<!DOCTYPE html>
<html>
<body>

<!-- C:\xampp\htdocs  crea carpeta i extra er localhost:80/newPhpProject-->
<?php
$taules = array();
$estado = "";
for ($i = 0; $i < 10; $i++) {
    $numeroComensal = rand(0, 5);
    array_push($taules, $numeroComensal,$estado);
}
?>
    <h1>
        <?php

            for ($i = 0; $i < count($taules); $i++) {
                if ($numeroComensal==5) {
                    $estado = " - Completo";
                } else {
                    if ($numeroComensal==0) {
                        $estado = " - Vacio";
                    } else{
                        $estado= " ";
                    }
                }
                echo "Taula ",$i+1, " Comensal: ", $taules[$i], $estado,"<br>";
            }

        ?>
    </h1>
</body>
</html>

