<?PHP
$loggedIn = isset($_SESSION["userid"]);
if($loggedIn){
echo '<h1>Account van</h1>';
$result2 = mysqli_query($conn, "SELECT * FROM `users` where `userid` = ". $_SESSION['userid'] . "");
if ($row2 = mysqli_fetch_assoc($result2))
 {echo '<div class="sloer"> <p class="fullname">' . $row2['naam'] .' '. $row2['achternaam'] . '<br>' . $row2['funtie'] .'<br>' . $row2['email'] .' </p>' ;}
 
 
 //alle berichten van persoon
 $result = mysqli_query($conn, "SELECT * FROM `meldingen` where `userid` = ". $_SESSION['userid'] . "");
 while ($row = mysqli_fetch_assoc($result)) {
$result2 = mysqli_query($conn, "SELECT * FROM `users` where `userid` = ". $row['userid'] . "");
if ($row2 = mysqli_fetch_assoc($result2))
 {echo '<div class="comment"> <p class="fullname">' . $row2['naam'] .' '. $row2['achternaam'] . '</p>' ;}
 echo '<p class="title">'. $row['title'] .'</p>
 <p class="text">'. $row['text'] .'</p> 
 <a href=" ./index.php?content=deletemelding&msgid=' . $row['msgid']. '"><img src="./pic/delete.png" alt="delete" width="25px" height="25px">
 </div>
 </a>
 '
;}
 

echo '<h1>gemaakt door</h1>';
 $result3 = mysqli_query($conn, "SELECT * FROM `users` where `userid` = ". $row2['schepperid'] . "");
if ($row3 = mysqli_fetch_assoc($result3))
 {echo '<div class="sloer"> <p class="fullname">' . $row3['naam'] .' '. $row3['achternaam'] . ' </p>
    </div>';}

    echo '<h1>verantwoordelijk voor</h1>';
    $result4 = mysqli_query($conn, "SELECT * FROM `users` where `schepperid` = ". $_SESSION['userid'] . " AND `userid` != ". $_SESSION['userid'] . "");
while ($row4 = mysqli_fetch_assoc($result4))
 {echo '<div class="comment"> <p class="fullname">' . $row4['naam'] .' '. $row4['achternaam'] . ' </p>
    <a href=" ./index.php?content=deletegebruiker&userid=' . $row4['userid']. '"><img src="./pic/delete.png" alt="delete" width="25px" height="25px">
   </div>
   </a> ';}

?>
<a href="?content=registerform">nieuw account</a>
 <?php } else { header("Location: ./index.php?content=home"); } ?>
</div>