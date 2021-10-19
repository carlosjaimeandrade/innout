<?php

require_once(dirname(__FILE__,2) . '/src/config/config.php');
//require_once(CONTROLLER_PATH . '/login.php');

require_once(MODEL_PATH . '/login.php');

$login = new Login([
    'email' => 'admin@cod3r.com.br',
    'password' => 'a'
]);

try{
    $login->checklogin();
    echo 'login efetuado';

} catch(Exception $e){
    echo 'problema de login';
}