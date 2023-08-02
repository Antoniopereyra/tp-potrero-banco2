<?php
    require("user_controller.php");
    require("../database/database.php");
    $credentials= validateRegistration($_POST); 
    createUser($credentials,$connection);

    function validateRegistration($datos){
        $name=$datos["name"];
        $surname=$datos["surname"];
        $mail=$datos["mail"];
        $password=$datos["password"];
        $credentials = array ($name,$surname,$mail,$password);
        return $credentials;
    } 
    header("Location: ../view/home.php");


?>