<?php


loadModel('Login');

if(count($_POST) > 0){
    $login = new Login($_POST);
    try{
        $users = $login->checklogin();
        echo "usuário {$users->name}logado :)";
    }catch(Exception $e){
        echo 'falha de login :(';
    }
}

loadView('login', $_POST);

?>