<?php
#Importa la conexio amb  msqli
include 'conection_msqli.php';

#Guarda els valors del path en variables
$id = $_GET['id'];
$nom = $_GET['name'];
$descripcio = $_GET['description'];
$preu = $_GET['price'];

#Crea una query per modificar les dades
$query = sprintf("UPDATE products SET name='%s', description='%s', price=%u WHERE ID=%u", $nom, $descripcio, $preu, $id);

#Executa la query a la base de dades
$mysqlquery = mysqli_query($connection, $query);

#Retorna al index.php
header('Location: ' . 'index.php');
?>