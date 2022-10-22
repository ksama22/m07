<?php

#Definim els valors de la base de dades
$dbname = "productdb";
$user = "root";
$password = "";
$connexio ;
try {
    //Prepara la comunicacio amb la base de dades
    $dsn = "mysql:host=localhost;dbname=$dbname";
    //Crea la conexio per pdo
    $connexio = new PDO($dsn, $user, $password);
    echo 'Conectat via PDO';
} catch (PDOException $e){
    $connexio = null;
    //Retorna error
    echo $e->getMessage();
}
?>