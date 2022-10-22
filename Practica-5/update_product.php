<?php

#Guarda el valor del path en variable
$id = $_GET['id'];
$nom = $_GET['name'];
$desc = $_GET['description'];
$preu = $_GET['price'];
try {
    #Importa la conexio amb  msqli
    include 'db_connection_pdo.php';

    #Crea una query per llistar les dades
    $stmt = $connexio->prepare("UPDATE products SET name =:name, description = :description, price= :price WHERE ID =:id");
    //OPCIO-2: $stmt = $connexio->prepare("UPDATE products SET name=?, description=?, price=? WHERE id=?");

    #Aquest metode pot sustituir el bindParam i el execute
    $stmt->execute(array(':name' => $nom, ':description' => $desc, ':price' => $preu, ':id' => $id));
    //OPCIO-2: $stmt->execute([$nom, $desc, $preu, $id]);

    #Retorna al index.php
    header('Location: ' . 'index.php');

} catch (Exception $e) {
    echo "El error es ", $e->getMessage();
}
?>