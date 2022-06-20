<?php
include ('../models/connexionbdd.php');
include ('../controller/ajouterproduitController.php');



?>
<form method="post" action="">
    <div id="divproduit">
        <input id="inputnomproduit" type="text" placeholder="nom du produit" name="entry" required />
        <input id="inputingredient" type="text" placeholder="ingredient principal" name="entry" required />


</form>


<div id="ajouterproduitform">
    <?php
            ajouterproduitController($bdd);?>
    <select name='catégorie' id='selectcatégorie'>;
        <option>Choisissez la catégorie du produit</option>;


</div>







<input id="submitbutton" type="submit" value="Envoyer" />
</form>
</div>
<?php
    if (isset($_POST ['entry'])) {
    

        $selectStr = "SELECT nom FROM produit";
        $query = $bdd->prepare($selectStr);
        $query->execute();
        $queryArray = $query->fetchAll();
        $donnees = $queryArray;
        $exist = false;
        
        $entry = $_POST['entry'];
        foreach($donnees as $result){
            if ($result['nom'] == $entry){
            $exist = true;
            echo 'Le produit existe déjà';
            }
        }
        
        if($exist == false){
        $queryStr = "INSERT INTO produit (id_produit, nom, prix, id_categorie, id_ingredient)
         VALUES (null, :nom, :prix, :id_categorie, :id_ingredient)";
        $query = $bdd->prepare($queryStr);
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':prix', $prix, PDO::PARAM_INT);
        $query->bindValue(':id_categorie', $categorie, PDO::PARAM_INT);
        $query->bindValue(':id_ingredient', $ingredient, PDO::PARAM_INT);
        $query->execute();

        }
}


?>
</main>

</body>

</html>