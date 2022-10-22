<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home Page</title>
</head>
<body>
<?php
#Importa la conexio amb  msqli
include 'conection_msqli.php';

#Crea una query per insertar les dades
$query = "SELECT * FROM products ";

#Executa la query a la base de dades
$mysqlquery = mysqli_query($connection, $query);
?>
<div class="container">
    <a href="add_form.php">
        <button type="button" class="btn btn-outline-primary">Add</button>
    </a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Buttons</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($mysqlquery as $i => $product) { ?>
            <tr>
                <th scope="row"><?php echo $product['id'] ?></th>
                <td><?php echo $product['name'] ?></td>
                <td><?php echo $product['description'] ?></td>
                <td><?php echo $product['price'] ?></td>
                <td>
                    <a href="edit_form.php?id=<?php echo $product['id'] ?>">
                        <button type="button" class="btn btn-outline-primary">Edit</button>
                    </a>
                    <a href="delete.php?id=<?php echo $product['id'] ?>">
                        <button type="button" class="btn btn-outline-danger">Delete</button>
                    </a>
                </td>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
