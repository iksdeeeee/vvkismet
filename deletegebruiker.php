
<?php

$userid = mysqli_real_escape_string($conn, $_GET["userid"]); 

$sql = "DELETE FROM `users` WHERE `users`.`userid` = $userid";

mysqli_query($conn, $sql);

header("Location: ./index.php?content=profiel");
?>