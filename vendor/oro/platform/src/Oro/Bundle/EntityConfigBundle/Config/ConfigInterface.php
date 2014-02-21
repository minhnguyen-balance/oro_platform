<?php

namespace Oro\Bundle\EntityConfigBundle\Config;

use Oro\Bundle\EntityConfigBundle\Config\Id\ConfigIdInterface;

interface ConfigInterface extends \Serializable
{
    /**
     * @return ConfigIdInterface
     */
    public function getId();

    /**
     * @param  string $code
     * @param  bool   $strict
     * @return mixed
     */
    public function get($code, $strict = false);

    /**
     * @param string $code
     * @param mixed  $value
     */
    public function set($code, $value);

    /**
     * @param string $code
     * @return bool
     */
    public function has($code);

    /**
     * @param string $code
     * @param bool   $value
     * @return bool
     */
    public function is($code, $value = true);

    /**
     * @param callable $filter
     * @return array
     */
    public function all(\Closure $filter = null);

    /**
     * @param $values
     */
    public function setValues($values);
}
