<?php
include 'conection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM products WHERE ID = $id";
    $mysqlquery = mysqli_query($connection, $query);
}
echo 'Deleted ', $id;
?>
<a href="./main.php">Back</a>

