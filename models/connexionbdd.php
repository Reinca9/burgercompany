<?php
$host = 'localhost';
$dbName = 'burgercompany';
$user = 'root';
$mdp = '';
$charset = 'utf8';
try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbName;charset=$charset", $user, $mdp);
} catch (PDOException $fail) {
    
    echo 'Erreur: ' . $fail->getMessage();
    die();
}

?>