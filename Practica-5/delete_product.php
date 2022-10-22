<?php
include 'Products.php';
include 'db_connection_pdo.php';


try {
    //Carrega la id del path
    $id = $_GET['id'];

    //Prepara la query per esborrar
    $stmt = $connexio->prepare("DELETE FROM Products  WHERE ID =:id");

    //Relaciona el valor id amb la variable id
    $stmt->bindParam(':id', $id);

    //Executa la query
    $stmt->execute();
    echo 'Query correcte';
} catch (Exception $e) {
    echo 'El error es ', $e->getMessage();
}

#Retorna al index.php
header('Location: ' . 'index.php');
?>