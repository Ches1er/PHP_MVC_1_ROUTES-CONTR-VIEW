<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 12.02.2019
 * Time: 17:19
 */

namespace app\controllers;


use core\base\Controller;
use core\base\TemplateView;
use core\base\View;

class Main extends Controller
{
    public function actionIndex(){
        $view=new TemplateView("main","default");
        $view->title = "Main";
        $view->hello = "Hello Main";
        return $view;
    }
}