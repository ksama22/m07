<?php
#Guarda el valor del path en variable
$myid = $_GET['id'];
#Importa la conexio amb  msqli
include 'db_connection_pdo.php';

#Crea una query per llistar les dades
$stmt = $connexio->prepare("SELECT * FROM products WHERE ID =:id");
$stmt->bindParam(':id', $myid);

#Executa la query a la base de dades
$mysqlquery = $stmt->execute();
$mydata = $stmt->fetchAll();
?>
</html>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<div class="container p-4">
    <div class="row ">
        <div class="col-md-4">
            <div class="card card-body">
                UPDATE PRODUCTE
                <?php #Com hi ha nomes una id, emplena un form amb les seves dades
                foreach ($mydata as $product) { ?>
                    <!-- A través del mètode POST li enviem les dades del formulari a l'arxiu add_product.php -->
                    <form action="update_product.php" method="GET">
                        <div class=form-group>
                            <input readonly type="number" name="id" value="<?php echo $product['id'] ?>" autofocus>
                        </div>
                        <div class=form-group>
                            <input type="text" name="name" class="form-control"  value="<?php echo $product['name'] ?>" placeholder="Name" autofocus>
                        </div>
                        <div class=form-group>
                            <textarea name="description" rows="3" class="form-control"
                                      placeholder="Description" ><?php echo $product['description'] ?></textarea>
                        </div>
                        <div class=form-group>
                            <input type="text" name="price" class="form-control "value="<?php echo $product['price'] ?>" placeholder="price">
                        </div>
                        <div class=form-group>
                            <input type="number" name="q_sold" class="form-control "value="<?php echo $product['q_sold'] ?>" placeholder="q_sold">
                        </div>
                        <input type="submit" class="btn btn-success btn-block" value="Modify Producte">
                    </form>
                    <?php
                } #tanca el foreach ?>
            </div>
        </div>
    </div>
</div>


</body>
</html>
