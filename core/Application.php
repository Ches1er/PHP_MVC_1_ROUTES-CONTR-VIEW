<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 12.02.2019
 * Time: 12:15
 */

namespace core;

use core\Router\Router;

class Application
{

    public static function run(){
        $router_config = new Configurator("router");
        $routes = $router_config->routes;
        $router = new Router($routes);
        $router->route();
    }
}