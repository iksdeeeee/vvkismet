<?php
    include("./functions.php");

    $id = sanitize($_POST["id"]);
    $message = sanitize($_POST["message"]);

    $sql = "UPDATE `voorzitter` 
            SET `message`='{$message}',
            WHERE `id`= {$id}";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ./index.php?pageid=message&alert=update-succes");
    }
    else{
        header("Location: ./index.php?pageid=message&alert=update-fail");
    }
?>