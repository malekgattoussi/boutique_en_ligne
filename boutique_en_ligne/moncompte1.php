<?php
    include "entete1.php";
        
    
        
        // tester si e-mail et mdp (d'admin) saisir correspandant ou nn
        if(isset($_POST['connexion'])){
        $emailA = $_POST['emailA'];
        $mot_de_passe = $_POST['mot_de_passe'];
        
        $test = $conn->query("SELECT * FROM admin WHERE emailA = '$emailA' AND mot_de_passe = '$mot_de_passe'");
        if($test->num_rows!=0){
            $fetch = $test->fetch_array();
            $_SESSION['loginA'] = $fetch['idA'];
            header("Location: produit1.php"); //ouvrir la page produit.php
        }else{ 
            //si non affiche msg d'erreur
             echo " <span class='erreur'>  E-mail ou mot de passe d'administrateur incorrecte ! ";  echo '<img src="erreur.jpg" width=50 height=50 >  </span>' ; 
        }
        } 
    ?>
         <table>
            <tr>
        <td align="right">
            <div class="form" >                                                                        
                <form method="post" > 
                   <h2>Administrateur</h2>
                 <input type="email" placeholder="E-mail Administrateur" name="emailA" required/>
                     <input type="password" placeholder="mot_de_passe" name="mot_de_passe" required/>
                    <input type="submit" name="connexion" value="connexion"/>
                </form>
            </div>
        </td>
    </tr>
</table>
     

    
     
        
   


 
  <div class="menu">
   
    

</div>
<?php
include "piedpage1.php";
?>

    



