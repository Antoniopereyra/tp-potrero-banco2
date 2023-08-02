<?php 
    $hostname="localhost";
    $username_db="root";
    $password_db="";
    $name_db="banco_db";
    $port=3306;

    $connection= mysqli_connect($hostname,$username_db,$password_db,$name_db,$port);
?>