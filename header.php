<!DOCTYPE html>
<html lang="en">
<!-- Header -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

  <!-- Custom JavaScript -->
  <script src="js/app.js"></script>
  

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">

  <!-- Custom CSS-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
<script>
    //Remove bg-image in index page
    $(location).attr('href');
    var pathname = window.location.pathname;
    if(pathname.indexOf("index.php") != -1){
    $("body").css("background-image", "none");
    $("body").css("background-color", "#999");
  }
 </script>
 <div class="container-fluid">
   <!--Navigation-->    
   <?php include 'nav.php';?> 