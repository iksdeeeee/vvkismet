<?php
    include("./functions.php");

    $id = sanitize($_POST["id"]);
    $bericht = sanitize($_POST["bericht"]);

    $sql = "UPDATE `nieuws` 
            SET `id`= {$id},`bericht`='{$bericht}',`datum`= now()
            WHERE `id`= {$id}";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ./index.php?content=message&alert=update-succes");
    }
    else{
       header("Location: ./index.php?content=message&alert=update-fail");
    }
?>