<?php
    include "entete.php";

    // supprimer le produit ça dépend a la id utilisateur
    if(isset($_GET['supp'])){
        
        $id = $_GET['supp'];
       
        $conn->query("DELETE FROM produit WHERE id = $id");
    }


//afficher tous informations d'utilisateur et leur produit
    $select = $conn->query("SELECT * FROM produit p, users u,admin a WHERE p.idUser= u.id AND p.idUser = a.id ");
    while($row = $select->fetch_array()){
        
        $id = $row[0];
        $nomp = $row['nomp'];
        $desc = $row['description'];
        $prix = $row['prix'];
        $qte = $row['quantite'];
        $image = $row['image'];
        
        //afficher les information avec deux boutons supprimer et modifier:
        echo "                             
            <div class='produit'>
                <img src='photo/$image'/>
               <div class='info'>
                <h2>$nomp</h2>
                <p>$desc</p>
                Prix: <b>$prix DT</b><br>
                Quantite: <b>$qte</b><br>
                 
               </div>
               <div class='profile'>
                   <a href='modifier.php?id=$id' class='btn'>Modifier</a>
                   <a href='mesproduits.php?supp=$id' class='btn'>Supprimer</a>
               </div>
            </div>
        ";
    }

?>
  <div class="menu">
   
    

</div>
<?php
include "piedpage.php";
?>

