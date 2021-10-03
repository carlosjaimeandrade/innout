<?php

require_once(dirname(__FILE__,2) . '/src/config/config.php');
require_once(dirname(__FILE__,2) . '/src/models/User.php');
$user = new User(['name'=>'carlos', 'email'=>'jaime_andrek@hotmail.com']);
print_r($user);


