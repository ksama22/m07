
</html>
<head>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<?php

//La consulta por pdo
include 'db_connection_pdo.php';

//Fem la QUERY per obtindre tota la info de la taula
$stmt = $connexio->prepare("SELECT * FROM products");
$mysqlquery = $stmt->execute();
$mydata = $stmt->fetchAll();
//Guardarem tota la info de la bbdd a la variable products

?>
<body>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">NumID</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">q_Sold</th>
        <th scope="col">Buttons</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($mydata as $product) { ?>
        <tr>
            <th scope="row">#</th> <!-- augmentem el index i -->
            <td><?php echo $product['id'] ?></td> <!--Accedim a NumID -->
            <td><?php echo $product['name'] ?></td> <!--Accedim a Name-->
            <td><?php echo $product['description'] ?></td> <!--Accedim a Description-->
            <td><?php echo $product['price'] ?></td> <!--Accedim a Price -->
            <td><?php echo $product['q_sold'] ?></td> <!--Accedim a q_Sold -->
            <td><a href="update_form_product.php?id=<?php echo $product['id'] ?>">
                    <button type="button" class="btn btn-outline-primary">Edit</button>
                </a></td>
            <td><a href="delete_product.php?id=<?php echo $product['id'] ?>">
                    <button type="button" class="btn btn-outline-danger">Delete</button>
                </a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<!-- SECCIÓ PER AFEGIR PRODUCTES -->
<div class="container p-4">
    <div class="row ">
        <div class="col-md-4">
            <div class="card card-body">
                AFEGIR PRODUCTE
                <!-- A través del mètode POST li enviem les dades del formulari a l'arxiu add_product.php -->
                <form action="add_product.php" method="GET">
                    <div class=form-group>
                        <input type="text" name="name" class="form-control" placeholder="Name" autofocus>
                    </div>
                    <div class=form-group>
                        <textarea name="description" rows="3" class="form-control" placeholder="Description"></textarea>
                    </div>
                    <div class=form-group>
                        <input type="text" name="price" class="form-control" placeholder="price">
                    </div>
                    <div class=form-group>
                        <input type="text" name="q_sold" class="form-control" placeholder="q_sold">
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="add_product" value="+ Producte">
                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>
