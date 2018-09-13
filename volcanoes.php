<?php 
    $title = "Volcanoes";
    $url = "volcanoes";
    include("header.php");
?>

<p class="headerText">Volcanoes</p>
<div class="content">
    <h1>Dormant Volcanoes</h1>
    
    <p class="center">There are a lot of dormant sites to visit all over Hawaii. One place we visited was a long drive up and around multiple dormant sites where you can walk around on blackened rubble and remains at the Hawaii Volcanoes National Park. One spot had hot steam coming out from pockets in the ground. Being able to see how vast and massive some volcanoes used to be or still are is pretty incredible and can only be described by seeing it yourself.</p>
    
    <!--Google maps location-->
    <iframe src="https://www.google.com/maps/d/embed?mid=1BO1b8d2BHPq2MjKkBKsXAYEetkTpGKbz&hl=en" width="640" height="480"></iframe>
    <div class="images">
        <img class="middleImage1" src="./assets/media/volcano1.jpg" alt="Volcano 1">
        <img class="middleImage2" src="./assets/media/volcano2.jpg" alt="Volcano 2">
    </div>
    
    <p class="center">We also walked across lava rock out by the ocean. There are scarce plants trying to grow in cracks throughout the rocks. Near the water, the lava rock was formed into many different shapes and colors compared to the usual black rubble. We also got to see an active volcano which you can read about <a class="link" href="./bike.html">here</a>.</p>

<?php
    $home = false;
    include("footer.php");
?>