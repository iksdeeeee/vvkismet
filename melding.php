<?php
$result = mysqli_query($conn, "SELECT * FROM `meldingen`");
while ($row = mysqli_fetch_assoc($result)) {
$result2 = mysqli_query($conn, "SELECT * FROM `users` where `userid` = ". $row['userid'] . "");
if ($row2 = mysqli_fetch_assoc($result2))
 {echo '<div class="comment"> <p class="fullname">' . $row2['naam'] .' '. $row2['achternaam'] . '</p>' ;}
 echo '
 <p class="datum">'. $row['datum'] .'</p>
 <p class="tijd">'. $row['tijd'] .'</p>
 <p class="title">'. $row['title'] .'</p>
 <p class="text">'. $row['text'] .'</p> </div>
 '
;}
?>
<div>
<?php
$loggedIn = isset($_SESSION["userid"]);
if($loggedIn) echo "<div class='flip'>
<form  action='?pageid=meldingfunc' method='post' enctype='multipart/form-data'>
<label id='label' for='exampleInputreactie1'>melding</label>
<input class='meldingtext' type='title' name='title' class='form-control' id='exampleInputtitle' placeholder='title'>
<textarea type='text' name='text' class='form-control' id='exampleInputtext' placeholder='text'></textarea>
<input type='file' id='fileVal' name='file[]' multiple onchange='main.checkFiles(event)'>
<div>
<button type='submit' name='submit' id='txtclr' class='btn btn-outline-info btn-lg btn-block'>plaats melding</button>
</form>
</div>
"
?>
</div>
</div>
