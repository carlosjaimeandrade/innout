<?php

require_once(dirname(__FILE__,2) . '/src/config/config.php');

$uri = 
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//echo $uri;

$uri = str_replace(".php", "", $uri);
$uri = rtrim($uri, '/');

if($uri === '/' || $uri === '' || $uri === '/index.php'){
    $uri = '/home';
}

if(file_exists(CONTROLLER_PATH . "{$uri}.php")){
    require_once(CONTROLLER_PATH . "{$uri}.php");
}else{
    header("location:". "/" );
}

