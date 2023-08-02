<?php 
    require('database.php');
    require('migrations/migrations_1.php');

    $tables=array($table_cards,$table_users);

    foreach ($tables as $table) {
        mysqli_query($connection, $table);
    }
    header('Location: seeder.php');

?>