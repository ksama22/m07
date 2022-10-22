<?php
if (isset($_GET['id'])) {
    #Guarda el valor del path en variable
    $myid = $_GET['id'];
    #Importa la conexio amb  msqli
    include 'conection_msqli.php';

    #Crea una query per llistar les dades
    $query = "SELECT * FROM products WHERE ID =$myid";

    #Executa la query a la base de dades
    $mysqlquery = mysqli_query($connection, $query);
    ?>
    <?php  #Com hi ha nomes una id, emplena un form amb les seves dades
    foreach ($mysqlquery as $i => $product) { ?>
        <h1>UPDATE</h1>
        <!-- -Totes les dades del formulari s'envien a edit.php via path-->
        <form method="GET" action="edit.php">
            <p>ID: <input readonly type="number" name="id" value="<?php echo $product['id'] ?>"/></p>
            <p>Name: <input type="text" name="name" value="<?php echo $product['name'] ?>"/></p>
            <p>Description: <input type="text" name="description" value="<?php echo $product['description'] ?>"/></p>
            <p>Price: <input type="number" name="price" value="<?php echo $product['price'] ?>"/></p>
            <p><input type="submit"/></p>
        </form>
    <?php
    } #tanca el foreach
} #tanca la condicio if?>

<!-- boto per tornar al inici -->
<a href="./index.php">Back</a>
