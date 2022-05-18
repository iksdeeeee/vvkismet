<?php
    include("./functions.php");

    $id = sanitize($_GET["id"]);

    $sql = "DELETE FROM `spelers` WHERE `id` = {$id}";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ./index.php?content=message&alert=deletespeler-succes");
    }
    else{
        header("Location: ./index.php?content=message&alert=deletespeler-fail");
    }
?>