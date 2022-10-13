<?php
include 'conection.php';
if (isset($_GET['id'])) {
    $myid = $_GET['id'];
    $query = "SELECT * PRODUCTS  WHERE ID =$myid";
    $mysqlquery = mysqli_query($connection, $query);
    $nom = $mysqlquery['name'];
    $descripcio = $mysqlquery['description'];
    $preu = $mysqlquery['price'];

}

?>
<form method="post" action="edit_product.php">
    <p>Name: <input type="text" name="name" value=<?php $nom ?>></p>
    <p>Description: <input type="text" name="description" value=<?php $descripcio ?>></p>
    <p>Price: <input type="number" name="price" value=<?php $preu ?>/></p>
    <p><input type="submit"/></p>
</form>