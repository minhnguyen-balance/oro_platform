<?php

namespace Oro\Bundle\ConfigBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use JMS\Serializer\Annotation\Exclude;

/**
 * ConfigValue
 *
 * @ORM\Table(
 *  name="oro_config_value",
 *  uniqueConstraints={@ORM\UniqueConstraint(name="CONFIG_VALUE_UQ_ENTITY", columns={"name", "section", "config_id"})}
 * )
 * @ORM\Entity(repositoryClass="Oro\Bundle\ConfigBundle\Entity\Repository\ConfigValueRepository")
 * @ORM\HasLifecycleCallbacks
 */
class ConfigValue
{
    const FIELD_SCALAR_TYPE     = 'text';
    const FIELD_LIST_TYPE       = 'list';
    const FIELD_SERIALIZED_TYPE = 'serialized';
    const DELIMITER             = ',';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @var Config[]
     *
     * @ORM\ManyToOne(targetEntity="Config", inversedBy="values")
     * @ORM\JoinColumn(name="config_id", referencedColumnName="id")
     */
    protected $config;

    /**
     * @var string
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    protected $section;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    protected $value;

    /**
     * @var string
     * @ORM\Column(type="string", length=20, nullable=false)
     */
    protected $type = self::FIELD_SCALAR_TYPE;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set config
     *
     * @param string $config
     *
     * @return Config
     */
    public function setConfig($config)
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Get config
     *
     * @return string
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $section
     *
     * @return $this
     */
    public function setSection($section)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * @return string
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getValue();
    }

    /**
     * @ORM\PostLoad
     */
    public function doOnPostLoad()
    {
        switch ($this->type) {
            case self::FIELD_SERIALIZED_TYPE:
                $this->value = unserialize($this->value);
                break;
            case self::FIELD_LIST_TYPE:
                $this->value = explode(ConfigValue::DELIMITER, $this->value);
                break;
        }
    }

    /**
     * @ORM\PrePersist
     */
    public function doOnPrePersist()
    {
        switch ($this->type) {
            case is_object($this->value):
                $this->value = serialize($this->value);
                $this->type = self::FIELD_SERIALIZED_TYPE;
                break;
            case is_array($this->value):
                $this->value = join(ConfigValue::DELIMITER, $this->value);
                $this->type = self::FIELD_LIST_TYPE;
                break;
            default:
                $this->type = self::FIELD_SCALAR_TYPE;
                break;
        }
    }

    /**
     * @ORM\PreUpdate
     */
    public function doOnPreUpdate()
    {
        $this->doOnPrePersist();
    }
}
