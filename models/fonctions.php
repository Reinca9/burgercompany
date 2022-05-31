<?php

include ('../models/connexionbdd.php');

function inscription($nom, $prenom, $age, $tel, $email, $adresse, $mdp, $ville, $bdd){
    
$ok =  false;
if(isset($_POST['email'])){
$mdp = strip_tags($_POST['mdp']);
$nom = strip_tags($_POST['nom']);
$prenom = strip_tags($_POST['prenom']);
$email = strip_tags($_POST['email']);
$age = strip_tags($_POST['age']);
$adresse = strip_tags($_POST['adresse']);
$telephone = strip_tags($_POST ['telephone']);
$mdp2 = strip_tags($_POST['mdp2']);
$ville = strip_tags($_POST['ville']);


if ($_POST['mdp'] == $_POST['mdp2']) {

$userstr = 'SELECT * FROM user';
$userquery = $bdd->prepare($userstr);
$userquery->execute();
$bdduser = $userquery->fetchAll();
foreach ($bdduser as $resultat){
  if ($email == $resultat ['email'])
  $ok =  true;
}
}
$nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $tel = $_POST['telephone'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $mdp = $_POST['mdp'];
    $ville = $_POST['ville'];
    if ($_POST['mdp'] == $_POST['mdp2']) {

$userstr = 'SELECT * FROM user';
$userquery = $bdd->prepare($userstr);
$userquery->execute();
$bdduser = $userquery->fetchAll();
foreach ($bdduser as $resultat){
  if ($email == $resultat ['email'])
  $ok =  true;
    }
        }
$mdp = password_hash($mdp, PASSWORD_BCRYPT);
       
        
if (isset($prenom, $age, $tel, $email, $email, $adresse, $mdp, $ville)){
    
    
    $queryStr ="INSERT INTO user (id_user, nom, prenom, age, telephone, email, adresse, mdp, id_ville, id_role) 
    VALUES (null, :nom, :prenom, :age, :telephone, :email, :adresse, :mdp, :id_ville, 1)";
    $query = $bdd->prepare($queryStr);
    $query->bindValue(':nom', $nom, PDO::PARAM_STR);
    $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $query->bindValue(':age', $age, PDO::PARAM_INT);
    $query->bindValue(':telephone', $tel, PDO::PARAM_STR);
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':adresse', $adresse, PDO::PARAM_STR);
    $query->bindValue(':mdp', $mdp, PDO::PARAM_STR);
    $query->bindValue(':id_ville', $ville, PDO::PARAM_STR);
    $query->execute();
   }


}

}




function afficheruser($bdd){



$selectStr = 'SELECT*FROM user';
$query = $bdd->prepare($selectStr);
$query->execute();
$queryArray = $query->fetchAll();
      echo "<p id='userlist'>Listes des utilisateurs</p>";

foreach($queryArray as $result){
    echo "<table>";
  
echo "<tr>";
echo "<td> {$result['nom']}</td>";
echo "<td> {$result['prenom']}</td>";
echo "<td> {$result['age']}</td>";
echo "<td> <a id='delete' href='delete.php?ID=$result[ID_user]'>Supprimer</a></td>";
echo "<td> <a  href='update.php?ID=$result[ID_user]'>Mettre à jour</a></td>";
echo "</tr>";
echo "</table>";
}
}
?>