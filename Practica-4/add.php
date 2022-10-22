<?php
#Importa la conexio amb  msqli
include 'conection_msqli.php';

#Guarda els valors del path en variables
$nom = $_GET['name'];
$descripcio = $_GET['description'];
$preu = $_GET['price'];

#Crea una query per insertar les dades
$query = sprintf("INSERT INTO products( name, description, price) VALUES ('%s','%s',%u)", $nom, $descripcio, $preu);

#Executa la query a la base de dades
$mysqlquery = mysqli_query($connection, $query);

#Retorna al index.php
header('Location: ' . 'index.php');
?>