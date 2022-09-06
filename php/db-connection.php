<?php 

// Create connection
try {

    $pdo = new PDO("mysql:host=localhost;dbname=portfolio;","root","");
} catch (Exception $e) {

    echo 'Error: ' . $e->getMessage();
}

// cpanel connection
// $pdo = new PDO("mysql:host=localhost;dbname=karlsmit_news;","karlsmit_karlsmith","&B2bek(l4sP)");