<?php
    include("./functions.php");

    $id = sanitize($_POST["id"]);
    $message = sanitize($_POST["message"]);

    $sql = "UPDATE `voorzitter` 
            SET `id`= {$id},`message`='{$message}'
            WHERE `id`= {$id}";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ./index.php?content=message&alert=updatevoorzitter-succes");
    }
    else{
        header("Location: ./index.php?content=message&alert=updatevoorzitter-fail"); 
    }
?>