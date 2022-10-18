<?php
$host = "localhost";
$name = "productdb";
$user = "root";
$passwd = "";

try {
    $connect_PDO = new PDO ($host, $user, $passwd, $name);
} catch (Exception $e) {
    die("Error: " . $e->GetMessage());
}
?>