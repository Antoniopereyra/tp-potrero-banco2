<?php
    require('../env.php');

    $card_invertir= "INSERT INTO cards (
        name,description,img)
        VALUES(
            'Invierte',
            'En Banco S.A puedes invertir de manera segura, ya que contamos con expertos que te asesoraran durante todo el camino',
            '../storage/img/card_img_1.png'
            )";
    $card_ahorro= "INSERT INTO cards (
        name,description,img)
        VALUES(
            'Ahorra tu dinero',
            'En Banco S.A segura, ya que tenemos 30 años en el mercado',
            '../storage/img/card_img_2.png'
            )";
    $card_prestamo= "INSERT INTO cards (
        name,description,img)
        VALUES(
            'Prestamos',
            'Puedes Obtener prestamos con tasas de interes muy bajas',
            '../storage/img/card_img_3.png'
            )";
    $card_afiliado= "INSERT INTO cards (
        name,description,img)
        VALUES(
            'Afiliados',
            'En Banco S.A contamos con un sistema de afiliados, en el que trayendo un cliente te recompensamos por ello',
            '../storage/img/card_img_4.png'
            )";
    $card_seguridad= "INSERT INTO cards (
        name,description,img)
        VALUES(
            'Seguridad',
            'Contamos con un sistema de deteccion biometrica que hace que sea uno de los bancos mas seguros de la region ',
            '../storage/img/card_img_5.png'
            )";
    $card_salud= "INSERT INTO cards (
        name,description,img)
        VALUES(
            'Salud',
            'Al ser cliente de nuestro banco obtienes una obra social totalmente paga por nosotros',
            '../storage/img/card_img_6.png'
            )";

   

?>