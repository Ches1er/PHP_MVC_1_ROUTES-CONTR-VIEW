<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 12.02.2019
 * Time: 15:28
 */

namespace core;


class Configurator
{
    private $data = null;
    const CONFIG_CORE_PATH = CORE_DIR."config/";
    const CONFIG_APP_PATH = APP_DIR."config/";

    public function __construct(string $configname)
    {
        if (file_exists(self::CONFIG_APP_PATH.$configname.EXT)){
            $this->data = include self::CONFIG_APP_PATH.$configname.EXT;
        }
        else $this->data = include self::CONFIG_CORE_PATH.$configname.EXT;
    }

    public function __get($name): array
    {
        return $this->data[$name];
    }


}