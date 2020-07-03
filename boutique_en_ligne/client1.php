<?php
    include "entete1.php";
// tester si e-mail et mdp saisir correspandant ou nn
    if(isset($_POST['envoyer'])){
        $email = $_POST['email'];
        $motdepasse = $_POST['motdepasse'];
        
        $test = $conn->query("SELECT * FROM users WHERE email = '$email' AND motdepasse = '$motdepasse'");
        if($test->num_rows!=0){
            $fetch = $test->fetch_array();
            $_SESSION['login'] = $fetch['id'];
            header("Location: produit1.php"); //ouvrir la page produit.php
        }else{ 
            //si non affiche msg d'erreur
             echo " <span class='erreur'>  E-mail ou mot de passe incorrecte ! ";  echo '<img src="erreur.jpg" width=50 height=50 >  </span>' ; 
        }
        
    }
    // tester si e-mail et mdp saisir correspandant ou nn dans bd
    if(isset($_POST['connecter'])){
    $motdepasse = $_POST['motdepasse'];
    $email = $_POST['email'];
        
        $test = $conn->query("SELECT * FROM users WHERE email = '$email' AND motdepasse = '$motdepasse'");
        if($test->num_rows!=0){
            $fetch = $test->fetch_array();
            $_SESSION['login'] = $fetch['id'];
            header("Location: produit1.php"); //ouvrir la page produit.php
        }else{ 
            //si non affiche msg d'erreur
             echo " <span class='erreur'>  E-mail ou mot de passe incorrecte ! ";  echo '<img src="erreur.jpg" width=50 height=50 >  </span>' ; 
        }
        
    }
    //ajouter les informations de formulaire au BD et afficher msg de success
    if(isset($_POST['envoyer'])){
        $email = $_POST['email'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $motdepasse = $_POST['motdepasse'];
       
        
        $conn->query("INSERT INTO users VALUES( NULL, '$nom', '$prenom','$email', '$motdepasse')");
        echo " <span class='success'>  Inscription avec success ";  echo '<img src="valider.jpg" width=50 height=50 >  </span>'  ; }
        
            ?>

<table>  
    <h3 align="center">  Pour se connecter </h3>
    <tr>
        <td align="left">
            <div class="form">                                                                        
                <form method="post"> 

    

                   <h2>IDENTIFIEZ-VOUS</h2>
                   <p>Si ayant un compte si non il faut inscrire</p>
                    Email<input type="email" placeholder="E-mail" name="email" required/>
                    mot de passe<input type="password" placeholder="motdepasse" name="motdepasse" required/>
                    <input type="submit" name="connecter" value="    connecter
                    "/>
                    

                </form>
            </div>
        </td>
        </tr>
    </table>
<table>
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
include "piedpage1.php";
?>

    