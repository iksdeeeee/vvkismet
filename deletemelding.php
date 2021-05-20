
<?php

$msgid = mysqli_real_escape_string($conn, $_GET["msgid"]); 

$sql = "DELETE FROM `meldingen` WHERE `meldingen`.`msgid` = $msgid";

mysqli_query($conn, $sql);

//var_dump($sql);
//var_dump($msgid);
//var_dump($_GET["msgid"]);
header("Location: ./index.php?pageid=profiel");
?>