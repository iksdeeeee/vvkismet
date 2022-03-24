<!DOCTYPE html>
<html lang="en">
<head>
      <title>V.V. Kismet</title>
      <link rel="icon" href="/pic/kismetlogo.jpg" type="image/gif">
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    
      <?php
      include("conect_db.php");
      include("links.phtml");
      
      //include("security.php"); 
      session_start();
      ?>
</head>
<body>
      <div id="login" class="logindialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<h2>Login scherm</h2>
            <form action="?pageid=login-script" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email adres</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Emailadres" value="<?php if (isset($_GET['email'])) {
                                                                                                                                                echo $_GET['email'];
                                                                                                                                            } ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Wachtwoord</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="wachtwoord">
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-outline-info btn-lg btn-block">Log in</button>
                        <br>
                    </div>
                </form>
		</div>
      </div>
      <div class="container">

            <?Php
            include("banner.php");
            include("navbar.php");
            $pageidexists = isset($_GET['pageid']);
            $pageid = $pageidexists ? $_GET['pageid'] : "home";
            $fileName = "{$pageid}.php";

            if(file_exists($fileName)) {
                  include($fileName);
            }
            ?>
      </div>
      <?php
      
      include("footer.php");
      ?>
</body>

</html>