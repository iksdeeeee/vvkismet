
<?php

$userid = mysqli_real_escape_string($conn, $_GET["userid"]); 

$sql = "DELETE FROM `users` WHERE `users`.`userid` = $userid";

mysqli_query($conn, $sql);

//var_dump($sql);
//var_dump($msgid);
//var_dump($_GET["msgid"]);
header("Location: ./index.php?content=profiel");
?>