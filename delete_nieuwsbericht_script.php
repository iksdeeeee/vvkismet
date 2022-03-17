<?php
    include("./functions.php");

    $id = sanitize($_GET["id"]);

    $sql = "DELETE FROM `nieuws` WHERE `id` = {$id}";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ./index.php?pageid=message&alert=delete-succes");
    }
    else{
        header("Location: ./index.php?pageid=message&alert=delete-fail");
    }
?>