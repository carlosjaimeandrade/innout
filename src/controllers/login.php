<?php


loadModel('Login');
$exception = null;

if(count($_POST) > 0){
    $login = new Login($_POST);
    try{
        $users = $login->checklogin();
        header("location: day_records");
    }catch(AppException $e){
        $exception  = $e;
    }
}

loadView('login', $_POST + ['exception'=>$exception ]);

?>