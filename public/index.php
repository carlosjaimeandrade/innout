<?php

require_once(dirname(__FILE__,2) . '/src/config/config.php');
require_once(dirname(__FILE__,2) . '/src/models/User.php');

$user = new User(['name'=>'carlos', 'email'=>'jaime_andrek@hotmail.com']);
echo var_dump(User::get(['name'=>'Chaves', 'email'=>'chaves@cod3r.com.br'],'id, name'));
echo '<br>';
foreach(User::get([],'id, name, email') as $value){
    echo $value->name;
    echo '<br>';
    echo $value->email;
}



