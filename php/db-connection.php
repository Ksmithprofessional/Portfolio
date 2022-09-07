<?php 

// Create connection
try {

    $pdo = new PDO("mysql:host=localhost;dbname=portfolio;","root","");
} catch (Exception $e) {

    echo 'Error: ' . $e->getMessage();
}

// cpanel connection

// try {

//     $pdo = new PDO("mysql:host=localhost;dbname=karlsmit_portfolio;","karlsmit_karlsmith","&B2bek(l4sP)");
// } catch (Exception $e) {

//     echo 'Error: ' . $e->getMessage();
// }