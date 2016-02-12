<?php
    $host_name  = "db584314344.db.1and1.com";
    $database   = "db584314344";
    $user_name  = "dbo584314344";
    $password   = "Jasper2013";
    
    $connect = mysqli_connect($host_name, $user_name, $password, $database);
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>