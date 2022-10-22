<?php

#Definim els valors de la base de dades
$host = "localhost";
$name = "productdb";
$user = "root";
$passwd = "";

#Crea una conexio a la base de dades
$connection = new mysqli($host, $user, $passwd, $name);
echo 'Conectat via mysqli';
?>