<!DOCTYPE html>
<html lang="en">
<title>Catégories</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}

</style>
<body>


<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Notre site commercial pour vente les matériels éléctroménager</h1> 
      <h5 class="w3-padding-32">
notre site est une plateforme numérique qui vente tous les éléments matériels  a bas prix avec des meilleurs qualités </h5>
  
     <h2 class="w3-center">Le plus demandée</h2>

<div class="w3-content w3-display-container">
  <img class="mySlides mySlidesAnimation" src="photo/image1.jpg" style="width:40%;">
  <img class="mySlides mySlidesAnimation" src="photo/image5.jpg" style="width:40%; display: none">
  <img class="mySlides mySlidesAnimation" src="photo/image3.jpg" style="width:40%; display: none">
  <img class="mySlides mySlidesAnimation" src="photo/image7.jpg" style="width:40%; display: none">
    <img class="mySlides mySlidesAnimation" src="photo/image8.jpg" style="width:40%; display: none">
 

  <button class="w3-button w3-black w3-display-left" onclick="showNext()">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="showPrev()">&#10095;</button>
</div>


      
    </div>
      
      <script>
var slideIndex = 0;
var count = document.getElementsByClassName("mySlidesAnimation").length;
function showNext(){
    if(slideIndex < count){
        document.getElementsByClassName("mySlidesAnimation")[slideIndex].style.display="none";
        document.getElementsByClassName("mySlidesAnimation")[slideIndex + 1].style.display="block";
        slideIndex++;
        
        console.log(slideIndex);
    }
}
function showPrev(){
    if(slideIndex > 0){
        document.getElementsByClassName("mySlidesAnimation")[slideIndex].style.display="none";
        document.getElementsByClassName("mySlidesAnimation")[slideIndex - 1].style.display="block";
        slideIndex--;
        
        console.log(slideIndex);
    }
}

</script>

   
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
   

    <div class="w3-twothird">
      <h1>Matériel éléctroménager : Commandez au meilleur prix !</h1>
      <h5 class="w3-padding-32">notre site commercial est un boutique à vendre du matériel éléctroménager en Tunisie. Depuis 2020, notre site marchand propose à ses clients toutes sortes d'articles pour les electroménager que ce soit matériel de maison , des roubeaux, des ordinateurs pc , des télévision  , des machines a laver ...</h5>

      <p class="w3-text-grey">nous offrons  à ses clients la possibilité de commander et de profiter des remises proposées lors de l'achat en ligne. Avec des boutiques implantées un peu partout dans le territoire tunisien, .</p>
    </div>
  </div>
</div>
   
    
    
    

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h3 class="w3-margin w3-xlarge">Copyright © 2019. Tous droits réservés.</h3> 

    
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">Malek Center developper.</a></p>
    
    <b></b>

<p> Tunisie
Tél : (216+) 54879635 : (216+)23014587</p>
    
</footer>
   
   
    
    
    
    
    
    


</body>
    
</html>
 
   
