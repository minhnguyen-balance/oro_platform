<?php

namespace Oro\Bundle\EntityConfigBundle\Tools;

use Doctrine\Common\Util\Inflector;

class ConfigHelper
{
    /**
     * Returns translation key (placeholder) by entity class name, field name and property code
     * example:
     *      [vendor].[bundle].[entity].[field].[config property]
     *      oro.user.group.name.label
     *
     *      if [entity] == [bundle] -> skip it
     *      oro.user.first_name.label
     *
     *      if NO fieldName -> add prefix 'entity_'
     *      oro.user.entity_label
     *      oro.user.group.entity_label
     *
     * @param string $className
     * @param string $fieldName
     * @param string $propertyName  property key: label, description, plural_label, etc.
     *
     * @return string
     */
    public static function getTranslationKey($className, $fieldName = null, $propertyName = null)
    {
        $transKey = '';
        if ($className) {
            //example: className - OroCRM\Bundle\ContactBundle\Entity\ContactAddress
            $class      = str_replace(['Bundle\\Entity', 'Bundle\\'], '', $className);

            //example: className - OroCRM\Contact\ContactAddress
            $classArray = explode('\\', strtolower($class));
            $classArray = array_filter($classArray);

            $keyArray = [];
            foreach ($classArray as $item) {
                if (!in_array(Inflector::camelize($item), $keyArray)) {
                    $keyArray[] = Inflector::camelize($item);
                }
            }

            if ($fieldName) {
                $keyArray[] = Inflector::tableize($fieldName);
            }

            if ($propertyName) {
                $propertyName = Inflector::tableize($propertyName);
                $keyArray[] = $fieldName ? $propertyName : 'entity_' . $propertyName;
            }

            $transKey = implode('.', $keyArray);
        }

        return $transKey;
    }
}
