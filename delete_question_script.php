<?php
    include("./functions.php");

    $id = sanitize($_GET["id"]);

    $sql = "DELETE FROM `contactform` WHERE `id` = {$id}";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ./index.php?content=message&alert=deletevraag-succes");
    }
    else{
        header("Location: ./index.php?content=message&alert=deletevraag-fail");
    }
?>