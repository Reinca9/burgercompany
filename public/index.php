<?php
session_start();
include ('../models/connexionbdd.php');
include ('../models/fonctions.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <script src="https://kit.fontawesome.com/bd1f979c00.js" crossorigin="anonymous"></script>


</head>


<body>



    <?php
    if(isset($_GET['page'])){
switch($_GET['page']){
case 'connexion':
    include('../Vue/connexion.php');
    break;
case 'inscription';
    include ('../Vue/inscription.php');
    break;
case 'accueil';
    include ('../controller/accueil.php');
    break;
case 'ajouterproduit';
    include ('../Vue/ajouterproduit.php');
    break;

    default : ('../controller/accueil.php');

}
}else {
    include ('../controller/accueil.php');
}

?>

</body>

</html>