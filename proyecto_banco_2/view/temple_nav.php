<?php 
    require("../database/database.php");
    require("../controllers/cards_controller.php");
    require("../controllers/user_controller.php");
    $cards=getcards($connection);
    session_start();
    $datos = loginUser(array($_SESSION["mail"],$_SESSION["password"]),$connection);
    $auth;
    if ($datos == false) {
       $auth = false; 
    }else{
        $auth=true;
    }
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../public/css/home_style.css">
    <title>Online Banking</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
            <div class="container-fluid">
            <a class="navbar-brand font-" href="#">Banco S.A</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto hover">
                    <li class="nav-item ">
                        <a class="nav-link mx-2 text-light" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-light" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-light" href="#">Sobre Nosotros</a>
                    </li>
                    <?php if ($auth == false) {?>
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-light" href="./login.php">Iniciar Seccion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-light" href="./register.php">Registrarse</a>
                        </li>
                    <?php }else{?>
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-light" href="./register.php">Cajero</a>
                        </li>
                        <form action="../controllers/nose.php" method="post">
                            <button type="submit" class="nav-link mx-2 text-light">Cerrar session</button>
                        </form>

                    <?php }?>
                </ul>
            </div>
            </div>
        </nav>
    </header>