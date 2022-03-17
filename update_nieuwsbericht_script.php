<?php
    include("./functions.php");

    $id = sanitize($_POST["id"]);
    $bericht = sanitize($_POST["bericht"]);

    $sql = "UPDATE `nieuwsbericht` 
            SET `bericht`='{$bericht}',
            WHERE `id`= {$id}";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ./index.php?pageid=message&alert=update-succes");
    }
    else{
        header("Location: ./index.php?pageid=message&alert=update-fail");
    }
?>