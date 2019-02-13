<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 12.02.2019
 * Time: 16:12
 */

namespace core\Router;

class Router
{
    private $routes = [];


    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    /**
     * @throws RouterException
     */
    public function route(){
        foreach ($this->routes as $route){
            if ($route->match()){
                $controller_name = $route->getControllerName();
                $action_name=$route->getActionName();
                $this->navigate($controller_name,$action_name);
                return;
            }
        }
        throw new RouterException;
    }

    /**
     * @param $controller_name
     * @param $action_name
     * @throws RouterException
     */
    private function navigate($controller_name, $action_name)
    {
        $controller_name = ucfirst($controller_name);
        $action_name = "action".ucfirst($action_name);
        $controller_path = CONTROLLERS_DIR.$controller_name.EXT;
        if (file_exists($controller_path)){
            $controller = "app\controllers\\$controller_name";
            $ctrl = new $controller;
            if (method_exists($ctrl,$action_name))echo $ctrl->execAction($action_name);
            else throw new RouterException;
        }
        else throw new RouterException;
    }
}