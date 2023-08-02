<?php

    
    $table_cards = "CREATE TABLE IF NOT EXISTS cards (
        id BIGINT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50),
        description TEXT,
        img VARCHAR(500),
        created_at TIMESTAMP NULL,
        updated_at TIMESTAMP NULL
    )";
    $table_users = "CREATE TABLE IF NOT EXISTS users (
        id BIGINT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50),
        lastname VARCHAR(50),
        password VARCHAR(250),
        mail VARCHAR(100),
        cash BIGINT NULL,
        created_at TIMESTAMP NULL,
        updated_at TIMESTAMP NULL
    )";
    

?>