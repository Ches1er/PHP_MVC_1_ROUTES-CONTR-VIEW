<?php
use core\Router\Route;
return [
    "routes"=>[
        new Route("",["controller"=>"Main","action"=>"index"]),
        new Route("api",["controller"=>"Api","action"=>"api"])
    ]
];