<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <?php 
    include("conect_db.php");
   include("links.phtml");
   //include("security.php"); <- kijk hier effe na alex
   session_start();
   //var_dump($_SESSION);
   ?>
</head>
<?php

?>
<body>

    <?php
    include("banner.php");
    include("navbar.php");
    ?>
    <div class="container">
    <?Php
    $pageidexists = isset($_GET['pageid']);
    $pageid = $pageidexists? $_GET['pageid']:"";
   switch($pageid) {


    
    default :
       include('home.php');
    break;
  
    case 'index1':
        include('home.php');
  break;

    case 'index2':
          include('producten.php');
    break;
  
    case 'index3':
          include('loginform.php');
    break;
    }
    ?>
    </div>
    <?php
    include("footer.php");
    ?>
</body>
</html>