<?php
function inscription($bdd, $array){
    $ok =  false;
    if(isset($array['nom']) && isset($array['ville'])){
        $mdp = strip_tags($array['mdp']);
        $nom = strip_tags($array['nom']);
        $prenom = strip_tags($array['prenom']);
        $email = strip_tags($array['email']);
        $age = strip_tags($array['age']);
        $adresse = strip_tags($array['adresse']);
        $telephone = strip_tags($array ['telephone']);
        $mdp2 = strip_tags($array['mdp2']);
        $ville = strip_tags($array['ville']);
        $ok =  false;
        if(isset($array['email'])){
            if ($array['mdp'] == $array['mdp2']) {

                $bdduser = getUsers($bdd);
                foreach ($bdduser as $resultat){
                    if ($email == $resultat ['email'])
                    $ok =  true;
                }
            }
            $mdp = password_hash($mdp, PASSWORD_BCRYPT);
            if (isset($prenom, $age, $telephone, $email, $email, $adresse, $mdp, $ville)){
                if ($ok == false) {
                    $bddarray = getVilleByNom($bdd, $ville);
                    foreach($bddarray as $resultat ){
                        $ville_id = $resultat ['ville_id'];
                    }
                    if(isset($ville_id)){
                        setNewUser($bdd, $mdp, $nom, $prenom, $email, $age, $adresse, $telephone, $ville_id);
                    }
                }
            }
        }
    }
}
?>