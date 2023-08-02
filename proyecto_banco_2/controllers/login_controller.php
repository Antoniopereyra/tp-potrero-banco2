<?php

    require("./user_controller.php");
    require("../database/database.php");

    $credentials= validateLogin($_POST);
    $datos= loginUser($credentials,$connection);

    if ($datos!= false) {
        session_start();
        $_SESSION["mail"]=$datos["mail"];
        $_SESSION["password"]=$datos["password"];
        header("Location: ../view/home.php");    
    }else {
        header("Location: ../view/login.php");
    }

    function validateLogin($datos){
        $user=$datos["mail"];
        $password=$datos["password"];
        $credentials=array($user,$password);
        return $credentials;
    }
?>