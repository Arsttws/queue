<?php

$server = "127.0.0.1";
$login = "root";
$pass = "Sfhc_510";
$name_db = "queuedb";

$link = mysqli_connect($server, $login, $pass, $name_db);

if($link == false)
{ 
    echo "Ошибка подключения"; 
}

?>