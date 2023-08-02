<?php 
    require('../database/database.php');
    require('../env.php');


    function getcards($connection){
        // creo query
        $consulta="SELECT * FROM cards";

        //ejecuto la query
        $datos_cards= mysqli_query($connection, $consulta);
        // devuelvo los datos
        return $datos_cards;
    }
?>