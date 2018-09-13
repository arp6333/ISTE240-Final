<?php 
    $title = "Visiting Hawaii";
    $url = "index";
    include("header.php");
?>

<!--Image slideshow, JavaScript component-->
<script>
    window.onload = function(){
        currentSlide(1);
    }

    function plusSlides(n){
        showSlides(slideIndex += n);
    }

    function currentSlide(n){
        showSlides(slideIndex = n);
    }

    function showSlides(n){
      var i;
      var slides = document.getElementsByClassName("mySlides");
      if (n > slides.length){
        slideIndex = 1;
      } 
      if (n < 1){
          slideIndex = slides.length;
      }
      for(i = 0; i < slides.length; i++){
          slides[i].style.display = "none"; 
      }
      slides[slideIndex-1].style.display = "block";
    }
</script>

<p class="headerText">&#9789; Visiting Hawaii &#9790;</p>
<div class="content">
    <h1>The Aloha State</h1>
    <p class="center">Hawaii is a gorgeous set of islands to the west of the United States in the North Pacific Ocean. It is composed of 8 main islands all which have diverse weather and scenery. Both active and dormant volcanoes occupy Hawaii many of which are popular tourist sites.</p>
    <!--Google maps location-->
    <iframe
      width="640"
      height="480"
      src="https://www.google.com/maps/embed/v1/view?key=AIzaSyCdBgTx-uRaiYU8iWkLOo0DVgNeC78sS6o&center=20.4507498,-157.7501038&zoom=7&maptype=roadmap" 
      allowfullscreen
    >
    </iframe>
    <p class="center">My family and I got to take a two week long trip to Hawaii last year over winter break where we stayed in two different houses, one for each week. The first week was on a rainy island where we got to go out for more active activities. The second week was on a sunny island where we got to relax and spend more time with the ocean. With this site, I'd like to show what there is to do in Hawaii besides just beaches. To read more, visit the links above.</p>
    
    <!--Image Slideshow-->
    <div class="slideshow">
        <div class="mySlides fade">
            <img src="./assets/media/beach1.jpg" alt="beach 1" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="./assets/media/beach2.jpg" alt="beach 2" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="./assets/media/flight2.jpg" alt="flight 1" style="width:100%">
        </div>
        
        <div class="mySlides fade">
            <img src="./assets/media/sunset1.jpg" alt="sunset 1" style="width:100%">
        </div>
        
        <div class="mySlides fade">
            <img src="./assets/media/blacksand1.jpg" alt="blacksand 1" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

<?php 
    $home = true;
    include("footer.php");
?>