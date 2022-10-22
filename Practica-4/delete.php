<?php
#Importa la conexio amb  msqli
include 'conection_msqli.php';

if (isset($_GET['id'])) {
    #Guarda el valor del path en variable
    $id = $_GET['id'];

    #Crea una query per esborrar les dades
    $query = "DELETE FROM products WHERE ID = $id";

    #Executa la query a la base de dades
    $mysqlquery = mysqli_query($connection, $query);
}

#Retorna al index.php
header('Location: ' . 'index.php');
?>
