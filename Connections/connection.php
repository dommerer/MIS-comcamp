<?php
    $hostname = "localhost";
    $username = "root";
    $password = "12345678";
    $database = "comcamp";
    $objCon = mysqli_connect($hostname,$username,$password,$database)or die("Connection failed: " . mysqli_connect_error());
    mysqli_query($objCon,"SET CHARACTER SET UTF8");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    
?>