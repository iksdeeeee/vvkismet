<?PHP
echo '<h1>acount van</h1>';
$result2 = mysqli_query($conn, "SELECT * FROM `users` where `userid` = ". $_SESSION['userid'] . "");
if ($row2 = mysqli_fetch_assoc($result2))
 {echo '<div class="comment"> <p class="fullname">' . $row2['naam'] .' '. $row2['achternaam'] . '<br>' . $row2['funtie'] .'<br>' . $row2['email'] .' </p>' ;}
 echo '<h1>gemaakt door</h1>';
 $result3 = mysqli_query($conn, "SELECT * FROM `users` where `userid` = ". $row2['schepperid'] . "");
if ($row3 = mysqli_fetch_assoc($result3))
 {echo '<div class="comment"> <p class="fullname">' . $row3['naam'] .' '. $row3['achternaam'] . ' </p>' ;}


?>
<a href="?pageid=registerform">nieuw account</a>
</div>
</div>