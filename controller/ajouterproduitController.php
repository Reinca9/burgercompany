<?php 

   function ajouterproduitController($bdd){
    selectCategory($bdd);
    foreach ($queryArray as $result) {

        echo "<option value=".$result['id']."> ". $result['nom'] . "</option>";

        }
        echo "
    </select>"; 
}
?>