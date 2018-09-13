<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <!--Favicon-->
        <link rel="shortcut icon" href="./assets/media/favicon.ico" type="image/x-icon">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="./assets/css/project1CSS.css">
    </head>
    <body>
        <script>
            // Button for navbar to adjust for mobile
            var burg = 0;
            function burger(){
                if(burg == 0){
                    document.getElementById('burger').innerHTML='X';
                    document.getElementById('header').style.display='block';
                    burg = 1;
                }
                else{
                    document.getElementById('burger').innerHTML='&#9776;';
                    document.getElementById('header').style.display='none';
                    burg = 0;
                }
            }
        </script>
        <nav id="header" class="navbar">
            <a <?php if($url === "index"):?>class="active"<?php endif;?> href="./index.php">Home</a>
            <a <?php if($url === "flight"):?>class="active"<?php endif;?> href="./flight.php">The Flight</a>
            <a <?php if($url === "homes"):?>class="active"<?php endif;?> href="./homes.php">Where We Stayed</a>
            <div class="dropdown">
                <button class="dropButton">Places We Visited &#9660;</button>
                <div class="dropContent">
                    <a <?php if($url === "volcanoes"):?>class="active"<?php endif;?> href="./volcanoes.php">Volcanoes</a>
                    <a <?php if($url === "bike"):?>class="active"<?php endif;?> href="./bike.php">Bike Ride On a Volcano</a>
                    <a <?php if($url === "waterfalls"):?>class="active"<?php endif;?> href="./waterfalls.php">Waterfalls</a>
                    <a <?php if($url === "garden"):?>class="active"<?php endif;?> href="./garden.php">Flower Garden</a>
                    <a <?php if($url === "blacksand"):?>class="active"<?php endif;?> href="./blacksand.php">Black Sand Beach</a>
                    <a <?php if($url === "hiking"):?>class="active"<?php endif;?> href="./hiking.php">Hiking</a>
                    <a <?php if($url === "zipline"):?>class="active"<?php endif;?> href="./zipline.php">Zipline and Farm</a>
                    <a <?php if($url === "observatory"):?>class="active"<?php endif;?> href="./observatory.php">Observatory</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropButton">About this Site &#9660;</button>
                <div class="dropContent">
                    <a <?php if($url === "references"):?>class="active"<?php endif;?> href="./references.php">References and Contact</a>
                    <a <?php if($url === "about"):?>class="active"<?php endif;?> href="./about.php">About</a>
                    <a <?php if($url === "comments"):?>class="active"<?php endif;?> href="./comments.php">Leave a Comment</a>
                </div>
            </div>
        </nav>
        <div class='hamburger'>
            <button id='burger' onclick="burger();">&#9776;</button>
        </div>