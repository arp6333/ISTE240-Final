<?php 
    $title = "The Flight";
    $url = "flight";
    include("header.php");
?>

<p class="headerText">The Flight</p>
<div class="content">
    <h1>Flying Over The United States</h1>
    
    <p class="center">The trip to Hawaii started with around a 3 hour drive up to Toronto, Canada from Rochester, New York. Then, there was 3 separate flights to get to the island of Hilo in Hawaii. First, Toronto to Los Angeles which took about 6 hours. Next, Los Angeles to Honolulu which surprisingly took about another 6 hours. Lastly, a one hour flight from Honolulu to Hilo on the Big Island which was where we were staying for the first week.</p>
    <!--Google maps location-->
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1exeopoM8SBpW6gbTEFNJdlI7liSPzj0m"></iframe>  
    
    <div class="images">
        <img class="middleImage1" src="./assets/media/flight1.jpg" alt="Flight 1">
        <img class="middleImage2" src="./assets/media/flight2.jpg" alt="Flight 2">
    </div>
    
    <p class="center">The trip back to New York was the same as the way there; one hour from Hilo to Honolulu, 6 hours from Honolulu to Los Angeles, and another 6 hours from Los Angeles to Toronto. From there, the last 3 hour drive back to Rochester.</p>

<?php
    $home = false;
    include("footer.php");
?>