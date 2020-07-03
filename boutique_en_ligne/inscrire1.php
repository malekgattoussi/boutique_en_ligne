<?php
    include "entete.php";
// tester si e-mail et mdp saisir correspandant ou nn
    if(isset($_POST['inscription'])){
    $motdepasse = $_POST['motdepasse'];
        
        $test = $conn->query("SELECT * FROM utilisateur WHERE email = '$email' AND motdepasse = '$motdepasse'");
        if($test->num_rows!=0){
            $fetch = $test->fetch_array();
            $_SESSION['login'] = $fetch['id'];
            header("Location: produits.php"); //ouvrir la page produit.php
        }else{ 
            //si non affiche msg d'erreur
             echo " <span class='erreur'>  E-mail ou mot de passe incorrecte ! ";  echo '<img src="erreur.jpg" width=50 height=50 >  </span>' ; 
        }
        
    }

    
    
        
         if(isset($_POST['envoyer'])){
            if (!empty($_POST['nom']) AND !empty($_POST['prenom'])AND !empty($_POST['email'])AND !empty($_POST['motdepasse'])AND !empty($_POST['motdepasse1'])) {
                $motdepasse=sha1($_POST['motdepasse']);
                $motdepasse1=sha1($_POST['motdepasse1']);
            if ($motdepasse==$motdepasse1)
            {
                $insertmbr("INSERT INTO membre(nom,prenom,email,motdepasse) values (?,?,?,?)");
                $insertmbr->execute($nom,$prenom,$email,$motdepasse);
            }

            }
            else{
                echo" le deux mot de passe n'est pas identifier";
            }
//ajouter les informations de formulaire au BD et afficher msg de success
    if(isset($_POST['inscription'])){
        $email = $_POST['email'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mot_de_passe = $_POST['mot_de_passe'];
       
        
        $conn->query("INSERT INTO utilisateur VALUES( NULL, '$nom', '$prenom','$email', '$mot_de_passe')");
        echo " <span class='success'>  Inscription avec success ";  echo '<img src="valider.jpg" width=50 height=50 >  </span>'  ; }
        
            ?>
            <table>  
    <h3 align="center">  Pour se connecter </h3>
    <tr>
        <td align="left">
            <div class="form">                                                                        
                <form method="post"> 
        
                   <h2>S'INSCRIRE</h2>
                    Nom<input type="text" placeholder="Nom" name="nom" required/>
                    Prenom<input type="text" placeholder="Prenom" name="prenom" required/>
                    Email<input type="email" placeholder="Email" name="email" required/>
                    mot de passe<input type="password" placeholder="motdepasse" name="motdepasse" required/>
                    répeter mot de passe<input type="password" placeholder="motdepasse" name="motdepasse1" required/>
                    <input type="submit" name="envoyer" value="envoyer"/>
                 
                </form>
            </div>
        </td>
        </tr>
    </table>
    <div class="menu">
   
    

</div>
<?php
include "piedpage.php";
?>
<?php
  if(isset($_POST['inscription'])){
    header("Location: inscrire.php");}

?>
        
