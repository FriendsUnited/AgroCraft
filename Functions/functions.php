<?php

$con = mysqli_connect("localhost","root" ,"","agrocraft");

function getCrops(){

    global $con;

    $query = "select * from products where product_cat = 1";

    $run_query = mysqli_query($con,$query);

    while ($row_cat = mysqli_fetch_array($run_query)) {
        $product_type = $row_cat['product_type'];

        // echo "<li><a href = '#'>$product_type</a></li>";
        echo $product_type;
    }
}

function getFruits(){

    global $con;

    $query = "select * from products where product_cat = 1";

    $run_query = mysqli_query($con,$query);

    while ($row_cat = mysqli_fetch_array($run_query)) {
        $product_type = $row_cat['product_type'];

        // echo "<li><a href = '#'>$product_type</a></li>";
        echo $product_type;
    }
}

function getVegetables(){

    global $con;

    $query = "select * from products where product_cat = 1";

    $run_query = mysqli_query($con,$query);

    while ($row_cat = mysqli_fetch_array($run_query)) {
        $product_type = $row_cat['product_type'];

        // echo "<li><a href = '#'>$product_type</a></li>";
        echo $product_type;
    }
}








?>