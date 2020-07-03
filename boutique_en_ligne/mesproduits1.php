<?php
    include "entete1.php";

    // supprimer le produit ça dépend a la id utilisateur
    if(isset($_GET['supp'])){
        
        $id = $_GET['supp'];
       
        $conn->query("DELETE FROM produit WHERE id = $id");
    }
//ouvrir la session d'utilisateur 
   $id = $_SESSION['login'];

        
        //afficher les information avec deux boutons supprimer et modifier
        echo                            
            '<div class='produit1'>
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
        ;'
    }

?>
  <div class="menu">
   
    

</div>
<?php
include "piedpage.php";
?>



