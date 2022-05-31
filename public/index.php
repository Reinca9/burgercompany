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
    <script src="https://kit.fontawesome.com/bd1f979c00.js" crossorigin="anonymous"></script>

</head>

<body>
    <main>
        <h1>BURGER COMPANY</h1>
        <nav>
        <a href="">Menu</a>
        <a href="">Contactez nous</a>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-instagram"></i>
        <img src="../traitement/img/3081098 1.png" alt="">
        
    
        </nav>
        <?php
    if (isset ($_SESSION ['email']) && isset($_SESSION['mdp'])){
    $login = $_SESSION['email'];
    $mdp = $_SESSION ['mdp'];
    $connecte = true;
    }


    if (isset ($_SESSION['id_role']) && $_SESSION['id_role'] == 1  ){
            
        {    ?>
        <button><a id="deco" href="../models/deco.php">Deconnexion</a></button>
        <p id="salutuser">Bonjour cher client</p>
        <?php
            } 

         }

             
?>
        
            <button id="panier">Votre panier</button>
            <div>
                <img src="../traitement\img\burger2.png" alt="">
                <a href="">Burgers</a>
                <img src="../traitement\img\pizza1.png" alt="">
                <a href="">Sandwich</a>
                <img src="" alt="">
                <a href="">Frittes</a>
                
            </div>
       
    </main>

</body>

</html>