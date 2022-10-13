<?php
include 'conection.php';
if (isset($_GET['add_product'])) {
    $nom = $_GET['name'];
    $descripcio = $_GET['description'];
    $preu = $_GET['price'];
    $query = "INSERT INTO PRODUCTS (name, description, price) VALUES ('$nom','$descripcio',$preu)";
    $mysqlquery = mysqli_query($connection, $query);
}
?>

<a href="./main.php">Back</a>
