<?php
if (isset($_GET['id'])) {
    $myid = $_GET['id'];

    include 'conection.php';
    $query = "SELECT * FROM products WHERE ID =$myid";
    $mysqlquery = mysqli_query($connection, $query);
    ?>

    <?php foreach ($mysqlquery as $i => $product) { ?>
        <h1>UPDATE ID: <?php echo $product['id'] ?></h1>
        <form method="post" action="add_product.php">
            <p>Name: <input type="text" name="name" value="<?php echo $product['name'] ?>"/></p>
            <p>Description: <input type="text" name="description" value="<?php echo $product['description'] ?>"/></p>
            <p>Price: <input type="number" name="price" value="<?php echo $product['price'] ?>"/></p>
            <p><input type="submit"/></p>
        </form>


    <?php } ?>
<?php } ?>