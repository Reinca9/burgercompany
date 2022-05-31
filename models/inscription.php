<?php
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
</head>

<body>
    <a href="../public/index.php">RETOUR ACCUEIL</a>
    <form id="forminscriptionmain" action="" method="POST">
        <input class='forminscription' name="mdp" type="password" placeholder="Votre mot de passe" required>
        <input class='forminscription' name="mdp2" type="password" placeholder="Confirmez votre mot de passe" required>
        <input class='forminscription' name="nom" type="text" placeholder="Votre Nom" required>
        <input class='forminscription' name="prenom" type="text" placeholder="Votre prénom" required>
        <input class='forminscription' name="email" type="email" placeholder="Votre email" required>
        <input class='forminscription' name="age" type="number" placeholder="Votre âge" required>
        <input class='forminscription' name="adresse" type="adress" placeholder="Votre adresse" required>
        <input class='forminscription' name="telephone" type="number" placeholder="Votre numéro de telephone" required>
        <input class='forminscription' name="ville" type="text" placeholder="Votre ville" required>


        <input class='forminscription' type="submit">

    </form>
    <?php  


 $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $tel = $_POST['telephone'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $mdp = $_POST['mdp'];
    $ville = $_POST['ville'];
inscription($nom, $prenom, $age, $tel, $email, $adresse, $mdp, $ville,$bdd)
?>



</body>

</html>