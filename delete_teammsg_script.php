<?php
    include("./functions.php");

    $id = sanitize($_GET["id"]);

    $sql = "DELETE FROM `teammsg` WHERE `id` = {$id}";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ./index.php?content=message&alert=deleteteammsg-succes");
    }
    else{
        header("Location: ./index.php?content=message&alert=deleteteammsg-fail");
    }
?>