<?php
include ('../models/connexionbdd.php');

if(isset($_GET['page'])){
switch($_GET['page']){
case 'inscription':
include('../models/inscription.php');
break;
}}

include ('../models/fonctions.php');
session_start();
$connecte = false;
$admin = false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../traitement/style.css">

</head>

<body>
    <main>
        <?php
    if (isset ($_SESSION ['email']) && isset($_SESSION['mdp'])){
    $login = $_SESSION['email'];
    $mdp = $_SESSION ['mdp'];
    $connecte = true;
    }


    if (isset ($_SESSION['id_role']) && $_SESSION['id_role'] == 2  ){
            $admin = true;
            if($admin == true){?>
        <p id="salutuser">Salut Admin</p>
        <button><a id="deco" href="../models/deco.php">Deconnexion</a></button>


        <?php }} 

            else { ?>
        <button><a id="deco" href="../models/deco.php">Deconnexion</a></button>
        <p id="salutuser">Bonjour cher utilisateur</p>
        <?php
} 
?>
        <div id="divpanier">
            <button id="panier">Votre panier</button>
            <img id="imgpanier" src="../traitement\img\3081098 1.png" alt="">
        </div>
    </main>

</body>

</html>