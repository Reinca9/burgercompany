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
            <div id="login">
        <button ><a id="connexion" href="">Connexion</a></button>
        <button ><a id="inscription"href="">Inscription</a></button>
        </div>
        <div id="divmenuiconburger">
            <img id="menuburger"src="../traitement/img/Group (3).png" alt="">
        <a id="menu" href="">Menu</a>
        </div> 
        <a id="ctc"href="">Contactez nous</a>
        <div>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-instagram"></i>
        </div>
        <div id="panierdiv">
        <img id="panier"src="../traitement/img/3081098 1.png" alt="">
        <div id="carrénoir"><a href="">Click & collect</a></div>
        </div>
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
        
            
            <div id="choix3">
                <div id="burgers">
                <img class="iconfood"src="../traitement\img\burger2.png" alt="">
                <a href="">Burgers</a>
                </div>
                <div id="sandwich">
                <img id="sandwichpng" src="../traitement\img\pizza1.png" alt="">
                <a href="">Sandwich</a>
                </div>
                <div id="frites">
                <img class="iconfrites"src="../traitement\img\Group.png" alt="">
                <a href="">Frittes</a>
                </div>
            </div>
       
    </main>

</body>

</html>