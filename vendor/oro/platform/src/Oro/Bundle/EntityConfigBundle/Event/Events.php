<?php

namespace Oro\Bundle\EntityConfigBundle\Event;

final class Events
{
    /**
     * Config Event Names
     */
    const NEW_ENTITY_CONFIG_MODEL = 'entity_config.new.entity.config.model';
    const NEW_FIELD_CONFIG_MODEL  = 'entity_config.new.field.config.model';
    const PRE_PERSIST_CONFIG      = 'entity_config.persist.config';
}
