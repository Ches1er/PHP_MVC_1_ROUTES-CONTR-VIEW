<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 13.02.2019
 * Time: 14:13
 */

namespace core\base;


abstract class Controller
{
    public function execAction(string $action){
        return $this->$action();
    }
}