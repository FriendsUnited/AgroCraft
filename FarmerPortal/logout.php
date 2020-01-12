<?php

session_start();

session_destroy();

echo "<script>window.open('../FarmerPortal/Homepage.php','_self')</script>";


?>