<banner>
  <a href="/" class="logo">
    <img src="pic/kismetlogo.jpg" alt="kismetlogo" width="auto" height="200">
  </a>
  <?php   $loggedIn = isset($_SESSION["userid"]);
      if($loggedIn) echo"<a href='?pageid=profiel' id='welcome-user'> welkom " . $_SESSION['naam'] . " " . $_SESSION['achternaam'] . "</a>"?>
  <div class="eenblik">
    <div class="fade-gradient"></div>
  </div>
</banner>