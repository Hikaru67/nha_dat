<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/product.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/style.css" />
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.nhadat.net/public/frontend/font-awesome-4.5.0/css/font-awesome.min.css" /> -->
    
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/lightcase.css" /> -->

</head>
<body>
    
    <?php include "menu.php"; ?>
     <div class="slider-banner" id="home-slide" style="background: #fff;">
        <div id="slider-banner" class="carousel carousel-slider" data-ride="carousel" data-interval="3000">
            <div class="item-slider item">
                <img src="https://pixelz.cc/wp-content/uploads/2018/07/404-not-found-graffiti-uhd-4k-wallpaper.jpg" alt="">
            </div>
        </div>      
    </div>
    <?php include "tailer.php"; ?>
</body>
</html>