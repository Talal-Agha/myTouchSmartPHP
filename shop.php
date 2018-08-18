<!DOCTYPE html>
<html lang="en">
<head>
  <title>Indoor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
require "productsArray.php";
include "header.php";
?>
<div class="container">  
<div class="product-bar" id="under-cabinet-fixtures">
<div class="product-box-bar">
<div class="row">
<?php
foreach($products as $product){
?>
<div class="col-sm-3">
<?php include "productBox.php"; ?> 
</div>
<?php
}
?>
</div>
</div>
</div>
</div>
</body>
</html>