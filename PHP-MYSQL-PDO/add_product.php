<?php
$host = "localhost";
$name = "productdb";
$user = "root";
$passwd = "";
$connection = new mysqli($host, $user, $passwd, $name);
$nom = $_GET['name'];
$descripcio = $_GET['description'];
$preu = $_GET['price'];
$query = sprintf("INSERT INTO products( name, description, price) VALUES ('%s','%s',%u)", $nom, $descripcio, $preu);
echo $query, "efrghjgukil.ñthrgfedsa";
echo "<br>",$nom, " ", $descripcio, " ", $preu;
$mysqlquery = mysqli_query($connection, $query);
?>