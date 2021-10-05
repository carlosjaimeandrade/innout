<?php

require_once(dirname(__FILE__,2) . '/src/config/config.php');
require_once(dirname(__FILE__,2) . '/src/models/User.php');

//$user = new User(['name'=>'carlos', 'email'=>'jaime_andrek@hotmail.com']);
echo User::getSelect(['name'=>'Chaves', 'email'=>'chaves@cod3r.com.br'],'id, name');
echo '<br>';
echo User::getSelect(['id'=>'1'],'id, name');



