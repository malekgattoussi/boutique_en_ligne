<?php
    include "entete1.php";

  // pour tester id d'utilisateur qui sera modifier son produit


    if(isset($_POST['modifier'])){ // modifier les information qui sont inserer dans la bd 
        
        $nomp = $_POST['nomp'];
        $qte = $_POST['qte'];
        $prix = $_POST['prix'];
        $desc = $_POST['desc'];
       
        
        $conn->query("UPDATE produit SET nomp = '$nomp', description = '$desc',prix= '$prix',quantite= '$qte' WHERE id= '$id'");
        echo "<span class='success'>Produit modifier avec success "; echo '<img src="icone/verified-account.png" width=50 height=50 >  </span>'  ; 
        
    
}
  // afficher la nouvel modification:
$nomp = $_POST['nomp'];
    $select = $conn->query("SELECT * FROM produit WHERE nomp=$nomp");

?>
<div class="form centrer">
    <form method="post">
       <h2>Modifier Publication</h2>
        <input type="text" placeholder="Nom" name="nomp" value="<?php echo $select['nomp']; ?>" required/>
        <input type="number" placeholder="Prix" name="prix" value="<?php echo $select['prix']; ?>" required/>
        <input type="number" placeholder="Quantite" name="qte" value="<?php echo $select['quantite']; ?>" required/>
        <textarea placeholder="Description" name="desc" value="<?php echo $select['description']; ?>" ></textarea>
        
        <input type="submit" name="modifier" value="modifier"/>
    </form>
</div>
 
 <div class="menu">
   
    

</div>

<?php
include "piedpage1.php";

