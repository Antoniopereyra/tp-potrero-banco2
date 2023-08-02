<?php 
    require('database.php');
    require('seeds/seeds_1.php');

    $cards=array($card_invertir,$card_ahorro,$card_prestamo,$card_afiliado,$card_seguridad,$card_salud);

    foreach ($cards as $card) {
        mysqli_query($connection, $card);
    }

    header('Location: ../view/home.php');
?>