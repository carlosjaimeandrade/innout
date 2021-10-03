<?php

require_once(dirname(__FILE__,2) . '/src/config/database.php');

$sql = "SELECT * FROM users";
$resultado = database::getResultFromQuery($sql);
while($row = $resultado->fetch_assoc()) {
    echo $row['name'] . $row['id'] . "<br>";
}





