<?php 

    session_start();
//connexion a la base de donnés
    $conn = mysqli_connect("localhost", "root", "", "boutique_en_ligne");

?>

<!DOCTYPE html>
<html lang="en">
    
    <link rel="icone" href="utica.gif" sizes="16x16" type="image/jpg">
<head>
    <meta charset="UTF-8">
    <title>Matériel de éléctroménager </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="entete" align="center">
     
    <p> <h1>Bienvenue chez notre site "Vente Matériel éléctroménager" .</h1></p>
                 <h5 align="right"> boutique électromenager tunis</h5>
                    <h5 align="right">Service Entreprise:électromenagerT@gmail.tn</h5>
                   

  
    
    
    </div>
    <div  class="mySlides w3-animate-fading" align="center">
        
        
        
       
        
       
                                              <img src="éléctroménager.jpg"  class="logo"> 
        
     
                       <form action="produit1.php" method="GET" >
        
                                <input type="search" placeholder="Recherche ici ..." name="search" maxlength="1000"   >
                                <input type="submit" name="recherche" value="recherche
                                "/>
                        </form>
       </div>

    
    
    
    
    
<div class="menu">
    <a href="index1.php">   <b>Acceuil </b>    </a>
   <?php 
    if(isset($_SESSION['login'])){
        echo '
        <a href="panier1.php">panier</a>
         
            <a href="deconnexion1.php"> Deconnexion <img width="15" height="15" src="icone/deconnexion.jpg"  ></a> 
            <a href="mesproduits1.php">Mes Produits</a>
            <a href="produit1.php">Produit</a>
            <a href="promotion1.php">promotion</a>
            <a href="ajouter1.php">  publier<img width="20" height="20" src="icone/publier.png"  >  </a>
             
        ';
    }
    else if(isset($_SESSION['loginA'])){
        echo '
            <a href="deconnexionA1.php"> Deconnexion <img width="15" height="15" src="icone/deconnexion.jpg"  ></a> 
            <a href="ajouter1.php">Ajouter des produits</a>
            <a href="modifier1.php"> Modifier les produits  </a>
            <a href="mesproduits1.php">supprimer des produits</a>
            
        ';
    }else{
        
        echo '
            <a href="moncompte1.php"><img width="20" height="20"  src="icone/compte.png"> connexion   </a>
            
            <a href="panier1.php">panier</a>
            <a href="client1.php">Client </a>
            <a href="actualite1.php">Actualités</a>
            <a href="text1.php">Publicités</a>
            <a href="produit1.php">Produit</a>
            <a href="promotion1.php">promotion</a>
             
        ';
    }
    ?>
    

</div>
    
 

    
    
    
    
      
    
    
    
    
    </body>
  
  </html>