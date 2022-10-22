<!DOCTYPE html>
<html lang="ca-ES">
<body>

<!-- C:\xampp\htdocs  crea carpeta i extra er localhost:80/newPhpProject-->
<?php
//Exemple hotel
/*$hotelExemple = array(
    // 5 plantes
    array(0, 0, 2, 2, 0, 3, 0, 0, 4, 0), //10 habitacions
    array(0, 0, 2, 2, 0, 3, 0, 0, 4, 0),
    array(0, 0, 2, 2, 0, 3, 0, 0, 4, 0),
    array(0, 0, 2, 2, 0, 3, 0, 0, 4, 0),
    array(0, 0, 2, 2, 0, 3, 0, 0, 4, 0),
);*/

$numPlantes = 5; // 5 plantas
$numHabitacions = 10; //10 habitaciones
$hotel = array(); // Inicialitza un hotel
for ($i = 0; $i < $numPlantes; $i++) {
    //Crea temporalment les plantesList
    $plantes = array();
    for ($x = 0; $x < $numHabitacions; $x++) {
        //Emplena random fins a 4 hospedatges
        $rand = rand(0, 4);
        $plantes[$x] = $rand;
    }
    //Emplena la llista de plantes al hotel
    $hotel[$i] = array($plantes);
}
// function imprimir($var){echo '<pre>';print_r($var);echo '</pre>';}


//maxim echo "<h1>",$hotel[4][0][9],"</h1>";
echo "<h1>Hotel</h1>";
echo "<h2>Plantes: $numPlantes Habitacions:$numHabitacions</h2>";

for ($row = 0; $row < $numPlantes; $row++) {
    echo "<h3>Planta $row</h3>";
    echo "<ul>";
    for ($col = 0; $col < $numHabitacions; $col++) {
        $hospedat = $hotel[$row][0][$col];
        //Crec que el zero simbolitza l'array
        if ($hospedat == 4) {
            echo "<li>","L'habitació ", $col, " de la planta ", $row, " està plena","</li>";
        } elseif ($hospedat == 0) {
            echo "<li>","L'habitació ", $col, " de la planta ", $row, " està buida.","</li>";
        } else {
            echo "<li>","A l'habitació ", $col, " de la planta ", $row, " hi ha ", $hospedat, " persones.","</li>";
        }
        // echo "<li>", "Habitació: ", $col, " Planta: ", $row, " Hospedats: ", $hospedat, "</li>";
    }
    echo "</ul>";
}


?>

</body>
</html>

