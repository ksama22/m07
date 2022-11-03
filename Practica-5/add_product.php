<?php
include 'Products.php';
include 'db_connection_pdo.php';

$name = $_GET['name'];
$description = $_GET['description'];
$price = $_GET['price'];
$q_sold= $_GET['q_sold'];

try {
    //Crica la conexio i prepara una query
    $stmt = $connexio->prepare("INSERT INTO products (name,description, price, q_sold) VALUES (:name,:description,:price,:q_sold)");

    //$stmt->bindParam(':id', $id); // la id es autoincrement, no fa falta
    $stmt->bindParam(':name', $name); // Se enlaza a la variable
    $stmt->bindParam(':description', $description); // Se enlaza a la variable
    $stmt->bindParam(':price', $price); // Se enlaza a la variable
    $stmt->bindParam(':q_sold', $q_sold); // Se enlaza a la variable
    //Executa la comanda amb els valos relacionats amb bindParam
    $stmt->execute();
    #Retorna al index.php
    header('Location: ' . 'index.php');
} catch (Exception $e) {
    echo 'El error es ', $e->getMessage();
}

/*
//Aquest metode pot sustituir el bindParam i el execute
if ($stmt->execute(array(':name' => $name, ':description' => $description, ':price' => $price))) {
    echo "Se ha creado el nuevo registro!";
}
*/

?>