<?php
include('./connexionbdd.php');
if(isset($_POST['email'])){
$email = ($_POST['email']); 
$mdp = ($_POST['mdp']);

$userstr = 'SELECT * FROM user WHERE email=:email';
$userquery = $bdd->prepare($userstr);
$userquery->bindValue(':email', $email, PDO::PARAM_STR);
$userquery->execute();
$bdduser = $userquery->fetch();

if ($bdduser == false){
echo 'email inexistant';
}
else {
$mdpHash = $bdduser['mdp'];
$mdp = password_verify($mdp, $mdpHash);

  if ($mdp ==  true){
  echo 'connecté';


  $_SESSION['id_role'] = $bdduser['id_role'];
  $_SESSION['email'] = $email;
  $_SESSION ['mdp'] =  $mdp;
  header('Location:../public/index.php');

  }
  else{
echo 'mot de passe invalide';


  }

  }

}

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
        <form id='formregister' method="POST">

            <div id="seco">
                <button id="emailco"> Email
                    <input type="email" placeholder="Entrez votre e-mail" name="email" required>
                </button>

                <button id="mdpco"> Mot de passe
                    <input type="password" placeholder="Entrer le mot de passe" name="mdp" required>
                </button>

                <button><input type="submit" id='submit' value='Se connecter'></button>
            </div>
        </form>
        <button id="retouracc"><a href="../public/index.php">Retour à l'accueil</a></button>



        <button id="panier">Votre panier</button>

    </main>
</body>

</html>