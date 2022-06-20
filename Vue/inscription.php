<?php 
    include('../models/connexionbdd.php');
    include('../controller/inscriptionController.php');
    ?>



<div id="pageinscriptionVue">
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form method="post" action="">
                <label for="chk" aria-hidden="true">S'inscrire</label>
                <input class='forminscription' name="mdp" type="password" placeholder="Votre mot de passe" required>
                <input class='forminscription' name="mdp2" type="password" placeholder="Confirmez votre mot de passe"
                    required>
                <input class='forminscription' name="nom" type="text" placeholder="Votre Nom" required>
                <input class='forminscription' name="prenom" type="text" placeholder="Votre prénom" required>
                <input class='forminscription' name="email" type="email" placeholder="Votre email" required>
                <input class='forminscription' name="age" type="number" placeholder="Votre âge" required>
                <input class='forminscription' name="adresse" type="adress" placeholder="Votre adresse" required>
                <input class='forminscription' name="telephone" type="number" placeholder="Votre numéro de telephone"
                    required>
                <input class='forminscription' name="ville" type="text" placeholder="Votre ville" required>
                <button id="sinscrire">S'inscrire</button>
            </form>
        </div>
    </div>
</div>

<?php  
    inscription($bdd, $_POST);

?>