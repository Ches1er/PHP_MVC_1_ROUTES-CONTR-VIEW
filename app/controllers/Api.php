<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 13.02.2019
 * Time: 15:49
 */

namespace app\controllers;


use core\base\RestController;

class Api extends RestController
{
    public function actionApi()
    {
        return [
            "name"=>"vasia",
            "surname"=>"ivanov"
        ];
    }
}