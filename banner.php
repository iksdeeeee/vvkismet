<banner>
  <a href="/" class="logo">
    <img src="pic/kismetlogo.jpg" alt="kismetlogo" width="auto" height="200">
  </a>
  <?php   $loggedIn = isset($_SESSION["userid"]);
      if($loggedIn) echo"<h1>welkom " . $_SESSION['naam'] . " " . $_SESSION['achternaam'] . "</h1>"?>
  <div class="eenblik">
    <div class="fade-gradient"></div>
  </div>
</banner>