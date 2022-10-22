<!DOCTYPE html>
<html>
<body>

<!-- C:\xampp\htdocs  crea carpeta i extra er localhost:80/newPhpProject-->
<?php
$nom = "Kevin";
$cognom = "Sama";
$edat = 18;

$dataNaixament = "1998-03-21";
$dateLocal = date_create("1998-03-21");
$anynaixament = date_format($dateLocal,"Y-m-d");
$telefon = "666666666";
$adreca = "Carrer Napols";
$treballa = false;
$email = "example@gmail.com";
$treballaText = "";
if ($treballa) {
    $treballaText ="treballa";
} else {
    $treballaText ="no treballa";

}
?>


<h1>Descrivint a <?php echo $nom; ?></h1>
<h2>Les dades de <?php echo $nom; ?> són:</h2>
<ul>
    <li>Es diu: <?php echo $nom; ?> <?php echo $cognom; ?></li>
    <li>Té <?php echo $edat; ?> anys.</li>
    <li>Va neixer l'any <?php echo $anynaixament; ?></li>
    <li>Viu a <?php echo $adreca; ?></li>
    <li>El seu email es <?php echo $email; ?></li>
    <li>I actualment <?php echo $treballaText; ?></li>
</ul>
</body>
</html>

