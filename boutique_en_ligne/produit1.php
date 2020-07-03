
<?php
    include "entete1.php";
?>
 <!-- FACEBOOK JS COMMENT -->
<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2"></script>


<?php
   //barre de recherche sur le nom de produit
    $cond = "";
    if(isset($_GET['search']))
        $cond = " AND nomp LIKE '%".$_GET['search']."%' "; 




//afficher les informations apres voir nom de produit saisir qui compatible a la recherche dans la varriable $cond

//ou afficher tous les informations sans faire filtrer par la barre de recherche 
    $select = $conn->query("SELECT * FROM produit p, users u WHERE p.idUser = u.id $cond");

    
//une boucle while pour répéter l'affichage a tel que insertion de nouvel produit au bd
 while($row = $select){
        
        $nomp = $row['nomp'];
        $desc = $row['description'];
        $prix = $row['prix'];
        $qte = $row['quantite'];
        $nom = $row['idUser'];
        $image = $row['image'];
        
        echo "
        
        
        
            <div class='produit'>
                <img src='photo/$image' style='width:300px;height:300px;'/>
                 <div class='fb-like' data-href='http://localhost/Artisanat/produit.php?nomp=$nomp' data-action='like' data-size='large' data-show-faces='true' data-share='true'></div>
               <div class='info'>
                <h2>$nomp</h2>
                <p>$desc</p>
                Prix: <b style='color:red'>$prix DT</b><br>
                Quantité: <b>$qte</b>
               </div>
               <div class='profile'>
              
               </div>
               <div class=\"fb-comments\" data-href=\"http://localhost/Artisanat/produit.php?nomp=$nomp\" data-numposts=\"5\" style='width:950px'></div>
            </div>
        ";
    }

?>










  <div class="menu">
   
    

</div>


<?php
include "piedpage1.php";
?>
