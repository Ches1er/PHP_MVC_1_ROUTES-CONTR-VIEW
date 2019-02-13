<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 12.02.2019
 * Time: 16:13
 */

namespace core\Router;

class Route
{
    private $url;
    private $params;

    public function __construct($url, $params)
    {
        $this->url = $url;
        $this->params = $params;
    }

    public function getControllerName(){
        return @$this->params["controller"];
    }

    public function getActionName(){
        return @$this->params["action"];
    }

    public function match():bool{
        $uri = $_SERVER["REQUEST_URI"];
        $pos = strpos($uri,"?");
        return trim($pos===false?$uri:substr($uri,0,$pos),"/")==$this->url;
    }

}