<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
</head>
<body>
<?php 
require "productsArray.php";
include "header.php";?>
<img class="index-main-image" src="img/learn-top-2.jpg"/>
<div class="container">
        <div class="slick-carousel shop-carousel">
		<?php
foreach($frontProducts as $product){
?>
<div>
<?php include "productBox.php"; ?> 
</div>
<?php
}
?>
   </div>
</div>
    <script type="text/javascript" src="Js/slick.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function () {
        $('.shop-carousel').slick({
          infinite: true,
          slidesToShow: 4, // Shows a three slides at a time
          slidesToScroll: 4, // When you click an arrow, it scrolls 1 slide at a time
          arrows: true, // Adds arrows to sides of slider
          dots: true // Adds the dots on the bottom
        });
      });
    </script>
</body>
</html>