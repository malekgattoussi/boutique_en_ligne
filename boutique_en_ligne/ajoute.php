<?php

    include "delete_records.php";
   if(isset($_POST['ajoute'])){
        $description = $_POST['description'];
        
        
        $conn->query("INSERT INTO items VALUES('$description')");
        echo " <span class='success'>  ajoute avec success "; }
       
            ?>

            <!DOCTYPE html>
            <html>
            <head>
            	<title></title>
            </head>
            <body>
            <form action="ajoute.php">
<input type="text" name="description" value="description"> 
<br>
<input type="submit" name="ajoute" value="ajoute "></form>
            </body>
            </html>