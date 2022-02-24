<?php

include("db.php");
include('add-product.php');

if(isset($_POST['save_product'])){
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $prod_type = $_POST['prod_type'];
    $dvd_size = $_POST['dvd_size'];
    $book_weight = $_POST['book_weight'];
    $fur_h = $_POST['fur_h'];
    $fur_w = $_POST['fur_w'];
    $fur_l = $_POST['fur_l'];

    $query = "INSERT INTO list (sku, name, price, prod_type, dvd_size, book_weight, fur_h, fur_w, fur_l) VALUES('$sku', '$name', '$price', '$prod_type', '$dvd_size', '$book_weight', '$fur_h', '$fur_w', '$fur_l')";
    $result = mysqli_query($conn, $query);
}

?>