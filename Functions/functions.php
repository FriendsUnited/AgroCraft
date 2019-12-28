<?php

$con = mysqli_connect("localhost","root" ,"","agrocraft");

function getCategories(){

    global $con;

    $query = "select * from categories";

    $run_query = mysqli_query($con,$query);

    while ($row_cat = mysqli_fetch_array($run_query)) {
        $cat_id = $row_cat['cat_id'];
        $cat_title = $row_cat['cat_title'];

        echo "<li><a href = '#'>$cat_title</a></li>";
    }
}


getCategories();





?>