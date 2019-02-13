<?php

use core\Application;

define("ROOT_DIR",$_SERVER["DOCUMENT_ROOT"]);
define("CORE_DIR",ROOT_DIR."/core/");
define("APP_DIR",ROOT_DIR."/app/");
define("PUBLIC_DIR",ROOT_DIR."/public/");
define("CONTROLLERS_DIR",APP_DIR."controllers/");
define("MODELS_DIR",APP_DIR."models/");
define("VIEWS_DIR",APP_DIR."views/");
define("TEMPLATES_DIR",VIEWS_DIR."templates/");
define("EXT",".php");

spl_autoload_register(function ($classname){
    $path = str_replace("\\","/",$classname);
    $path = ROOT_DIR."/".$path.EXT;
    if (file_exists($path)) include $path;
});

Application::run();