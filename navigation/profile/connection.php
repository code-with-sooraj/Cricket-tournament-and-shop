<?php
    $host = "localhost";
    $user = "root";
    $dpass = "";
    $dbname = "cricket";

    $conn = mysqli_connect($host,$user,$dpass,$dbname);

    if(mysqli_connect_error()){
        echo "<script>alert('Database connection failed')</script>";
        die();
    }
?>