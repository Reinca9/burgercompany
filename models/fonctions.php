<?php

include ('connexionbdd.php');

function getUsers($bdd){
  $userstr = 'SELECT * FROM user';
  $userquery = $bdd->prepare($userstr);
  $userquery->execute();
  $bdduser = $userquery->fetchAll();
  return $bdduser;
}

function getVilleByNom($bdd, $nom){
  $selectstr = 'SELECT * FROM ville WHERE ville_nom=:ville';
  $userquery = $bdd->prepare($selectstr);
  $userquery->bindValue(':ville', $nom, PDO::PARAM_STR);
  $userquery->execute();
  $bddarray = $userquery->fetchAll();
  return $bddarray;
}

function setNewUser($bdd, $mdp, $nom, $prenom, $email, $age, $adresse, $telephone, $ville_id){
  $queryStr = 'INSERT INTO user (ID_user,mdp, ID_role, nom, prenom, id_ville, email, age, adresse, telephone) 
  VALUES (null,:mdp, 1, :nom, :prenom,:ville, :email, :age, :adresse, :telephone)';
  $query = $bdd->prepare($queryStr);
  $query->bindValue(':mdp', $mdp, PDO::PARAM_STR);
  $query->bindValue(':nom', $nom, PDO::PARAM_STR);
  $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
  $query->bindValue(':email', $email, PDO::PARAM_STR);
  $query->bindValue(':age', $age, PDO::PARAM_INT);
  $query->bindValue(':adresse', $adresse, PDO::PARAM_STR);
  $query->bindValue(':telephone', $telephone, PDO::PARAM_INT);
  $query->bindValue(':ville', $ville_id, PDO::PARAM_INT);
  $query->execute();  
}

function verifUser($bdd, $email){
    $userstr = 'SELECT * FROM user WHERE email=:email';
    $userquery = $bdd->prepare($userstr);
    $userquery->bindValue(':email', $email, PDO::PARAM_STR);
    $userquery->execute();
    $bdduser = $userquery->fetch();
    return $bdduser;
}
function selectCategory($bdd){
            $selectStr = "SELECT * FROM catégorie";
            $query = $bdd->prepare($selectStr);
            $query->execute();
            $queryArray = $query->fetchAll();
}
function insererproduit ($bdd){
if (isset($_POST['nom'])){
$insert = "INSERT INTO produit (id_produit, nom, prix, id_categorie, id_ingredient) 
VALUES (null, :nom, :prix, :id_categorie, :id_ingredient)";
$query = $bdd->prepare($insert);
$query->bindValue(':nom', $nom, PDO::PARAM_STR);
$query->bindValue(':prix', $prix, PDO::PARAM_INT);
$query->bindValue(':id_categorie', $categorie, PDO::PARAM_STR);
$query->bindValue(':id_ingredient', $ingredient, PDO::PARAM_STR);
$query->execute();
}
}
function selectcategories ($bdd){
 $selectStr = "SELECT * FROM catégorie";
$query = $bdd->prepare($selectStr);
$query->execute();
$queryArray = $query->fetchAll();

echo    "<select name = 'id_categorie' id='selectp2'>";
echo    "<option>Catégorie de l'ingrédient</option>";
foreach ($queryArray as $result) {
    
echo    "<option value=".$result['id_categorie']."> ".  $result['nom'] . "</option>";

}
echo    "</select>";

}
function selectingredients ($bdd){
  $selectStr = "SELECT*FROM ingredient";
  $query = $bdd->prepare($selectStr);
  $query->execute();
  $queryArray = $query->fetchAll();
  echo "<input type='radio' name = 'id_ingredient'";
  echo "<option>Ingrédients contenus dans le produit</option>";
  foreach ($queryArray as $result){
  echo "<option value=".$result['id_ingredient'].">".$result['nom'] ."</option>";
  }
  echo "</select>";
}

function check_user_status($bdd){
$authok = false;
if($authok == false){?>
<a id="connexion" href="index.php?page=connexion">Connexion</a>
<a id="inscription" href="index.php?page=inscription">Inscription</a>
<?php 
}
if (isset ($_SESSION ['email']) && isset($_SESSION['mdp'])){
$login = $_SESSION['email'];
$mdp = $_SESSION ['mdp'];
$authok = true;
$admin = false;
}


if (isset ($_SESSION['id_role']) && $_SESSION['id_role'] == 1  ){
?>
<p id="salutuser">Bonjour cher client</p>
<?php
} 
if (isset ($_SESSION ['email']) && isset($_SESSION['mdp'])){
$login = $_SESSION['email'];
$mdp = $_SESSION ['mdp'];
$authok = true;
}
}    

function admincheck($bdd){
if (isset ($_SESSION['id_role']) && $_SESSION['id_role'] == 2){
$admin = true;
if($admin == true){?>
<div id="adminlogin">
    <a id="ajouterproduit" href="index.php?page=ajouterproduit">Ajouter un produit</a>
    <hr>
    <p id="salutuser">Bonjour Administrateur</p>
    <hr>
    <a id="deco" href="../models/deco.php">Se deconnecter</a>
</div>
<?php } }}?>