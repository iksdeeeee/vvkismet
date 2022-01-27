<!DOCTYPE html>
<html lang="en">

<head>
      <title>vvkismet</title>
      <link rel="icon" href="/pic/kismetlogo.jpg" type="image/gif">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
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