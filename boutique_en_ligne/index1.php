<?php
    include "entete1.php";

  ?>
<!DOCTYPE html>
 

<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


 
  
  
      <h3 align="center"> <p>Catalogues des images de produits...</p></h3>
   <div>   
<span class="position" style="max-width:500px">
   <img  src="photo/image1.jpg" style="width:70%">
    <img  src="photo/images7.jpg" style="width:70%">
   <img  src="photo/image5.jpg" style="width:70%">
   <img  src="photo/image8.jpg" style="width:70%">
   <img  src="photo/image9.jpg" style="width:70%">
   <img  src="photo/image12.jpg" style="width:70%">
   </span>
   <br/>
  <span class="position" style="max-width:500px">
   <img  src="photo/image3.jpg" style="width:70%">
  <img  src="photo/image2.jpg" style="width:70%">
  <img  src="photo/image4.jpg" style="width:70%">
  <img  src="photo/image6.jpg" style="width:70%">
  <img  src="photo/image10.jpg" style="width:70%">
  <img  src="photo/image11.jpg" style="width:70%">
</span>
  </div>


<div class="menu">
   
    </div>


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("photo");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 7000);    
}
</script>
    
 


    
    
    <?php
include "piedpage1.php";
?>



