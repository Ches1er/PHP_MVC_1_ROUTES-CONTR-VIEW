<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 13.02.2019
 * Time: 14:13
 */

namespace core\base;


class View
{
    private $path;
    protected $data=[];

    /**
     * View constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->path = VIEWS_DIR.$name.EXT;
    }

    public function render($data=[]){
        $data = array_merge($data,$this->data);
        extract($data);
            ob_start();
            include $this->path;
            return ob_get_clean();
    }

    public function __toString()
    {
        return $this->render();
    }

    public function __set($name, $value)
    {
        $this->data[$name]=$value;
    }
}