<?php
include 'conection.php';
if ($connection->connect_errno) {
    echo "Connection failed" . $connection->connect_errno;
} else {
echo "Connected<br>";
}

$connection->set_charset("utf8");
$inst_sql = "SELECT * FROM products";
$result = $connection->query($inst_sql);

if ($connection->errno) {
    die($connection->error);
}

$connection->close();
?>