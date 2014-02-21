<?php

namespace Oro\Bundle\EntityConfigBundle\Config;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;

use Oro\Bundle\EntityConfigBundle\Config\Id\ConfigIdInterface;
use Oro\Bundle\EntityConfigBundle\Config\Id\FieldConfigId;

use Oro\Bundle\EntityConfigBundle\Entity\AbstractConfigModel;
use Oro\Bundle\EntityConfigBundle\Entity\EntityConfigModel;
use Oro\Bundle\EntityConfigBundle\Entity\FieldConfigModel;

use Oro\Bundle\EntityConfigBundle\DependencyInjection\Utils\ServiceLink;
use Oro\Bundle\EntityConfigBundle\Exception\RuntimeException;

class ConfigModelManager
{
    /**
     * mode of config model
     */
    const MODE_DEFAULT  = 'default';
    const MODE_HIDDEN   = 'hidden';
    const MODE_READONLY = 'readonly';

    /**
     * @var AbstractConfigModel[]|ArrayCollection
     */
    protected $localCache;

    /**
     * @var bool
     */
    protected $dbCheckCache;

    /**
     * @var ServiceLink
     */
    protected $proxyEm;

    private $ignoreModel = array(
        'Oro\Bundle\EntityConfigBundle\Entity\EntityConfigModel',
        'Oro\Bundle\EntityConfigBundle\Entity\FieldConfigModel',
        'Oro\Bundle\EntityConfigBundle\Entity\AbstractConfigModel',
    );

    private $requiredTables = array(
        'oro_entity_config',
        'oro_entity_config_field',
        'oro_entity_config_value',
    );

    public function __construct(ServiceLink $proxyEm)
    {
        $this->localCache = new ArrayCollection();
        $this->proxyEm    = $proxyEm;
    }

    /**
     * @return EntityManager
     */
    public function getEntityManager()
    {
        return $this->proxyEm->getService();
    }

    /**
     * @return bool
     */
    public function checkDatabase()
    {
        if ($this->dbCheckCache === null) {
            try {
                $conn = $this->getEntityManager()->getConnection();

                if (!$conn->isConnected()) {
                    $this->getEntityManager()->getConnection()->connect();
                }

                $this->dbCheckCache = $conn->isConnected()
                    && (bool)array_intersect(
                        $this->requiredTables,
                        $this->getEntityManager()->getConnection()->getSchemaManager()->listTableNames()
                    );
            } catch (\PDOException $e) {
                $this->dbCheckCache = false;
            }
        }

        return $this->dbCheckCache;
    }

    public function clearCheckDatabase()
    {
        $this->dbCheckCache = null;
    }

    /**
     * @param      $className
     * @param null $fieldName
     * @return null|bool|AbstractConfigModel
     */
    public function findModel($className, $fieldName = null)
    {
        if (in_array($className, $this->ignoreModel)) {
            return false;
        }

        $cacheKey = $fieldName ? $className . '::' . $fieldName : $className;

        $result = false;
        // check that a model exist in the local cache
        if ($this->localCache->containsKey($cacheKey)) {
            $result = $this->localCache->get($cacheKey);
        } else {
            if ($fieldName) {
                // field model was requested
                if (!$this->localCache->containsKey($className)) {
                    // at the first load entity model
                    // on this stage models for all fields will be loaded in the local cache as well
                    $this->findModel($className);
                    // next check again that field model exist in the local cache
                    if ($this->localCache->containsKey($cacheKey)) {
                        $result = $this->localCache->get($cacheKey);
                    }
                }
            } else {
                // entity model was requested
                // load entity model and put it in the local cache
                $result = $this->getEntityManager()->getRepository(EntityConfigModel::ENTITY_NAME)
                    ->findOneBy(['className' => $className]);
                $this->localCache->set($cacheKey, $result);

                // if entity model found, load models for all fields of this entity and put them in the local cache
                if ($result) {
                    $fieldModels = $result->getFields();
                    foreach ($fieldModels as $fieldModel) {
                        $this->localCache->set(
                            $className . '::' . $fieldModel->getFieldName(),
                            $fieldModel
                        );
                    }
                }
            }
        }

        return $result;
    }

    /**
     * @param      $className
     * @param null $fieldName
     * @return null|AbstractConfigModel
     * @throws RuntimeException
     * @throws RuntimeException
     */
    public function getModel($className, $fieldName = null)
    {
        $model = $this->findModel($className, $fieldName);
        if (!$model) {
            $message = $fieldName
                ? sprintf('FieldConfigModel "%s::%s" is not found ', $className, $fieldName)
                : sprintf('EntityConfigModel "%s" is not found ', $className);

            throw new RuntimeException($message);
        }

        return $model;
    }

    /**
     * @param ConfigIdInterface $configId
     * @return AbstractConfigModel
     */
    public function getModelByConfigId(ConfigIdInterface $configId)
    {
        $fieldName = $configId instanceof FieldConfigId ? $configId->getFieldName() : null;

        return $this->getModel($configId->getClassName(), $fieldName);
    }

    /**
     * @param null $className
     * @return AbstractConfigModel[]
     */
    public function getModels($className = null)
    {
        if ($className) {
            return $this->getModel($className)->getFields()->toArray();
        } else {
            $entityConfigModelRepo = $this->getEntityManager()->getRepository(EntityConfigModel::ENTITY_NAME);

            return (array)$entityConfigModelRepo->findAll();
        }
    }

    /**
     * @param string $className
     * @param string $mode
     * @throws \InvalidArgumentException
     * @return EntityConfigModel
     */
    public function createEntityModel($className, $mode = self::MODE_DEFAULT)
    {
        if (!in_array($mode, array(self::MODE_DEFAULT, self::MODE_HIDDEN, self::MODE_READONLY))) {
            throw new \InvalidArgumentException(
                sprintf('EntityConfigModel give invalid parameter "mode" : "%s"', $mode)
            );
        }

        $entityModel = new EntityConfigModel($className);
        $entityModel->setMode($mode);

        $this->localCache->set($className, $entityModel);

        return $entityModel;
    }

    /**
     * @param string $className
     * @param string $fieldName
     * @param string $fieldType
     * @param string $mode
     * @throws \InvalidArgumentException
     * @return FieldConfigModel
     */
    public function createFieldModel($className, $fieldName, $fieldType, $mode = self::MODE_DEFAULT)
    {
        if (!in_array($mode, array(self::MODE_DEFAULT, self::MODE_HIDDEN, self::MODE_READONLY))) {
            throw new \InvalidArgumentException(
                sprintf('FieldConfigModel give invalid parameter "mode" : "%s"', $mode)
            );
        }

        /** @var EntityConfigModel $entityModel */
        $entityModel = $this->getModel($className);

        $fieldModel = new FieldConfigModel($fieldName, $fieldType);
        $fieldModel->setMode($mode);
        $entityModel->addField($fieldModel);

        $this->localCache->set($className . '::' . $fieldName, $fieldModel);

        return $fieldModel;
    }
}
