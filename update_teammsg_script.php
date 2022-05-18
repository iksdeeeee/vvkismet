<?php
    include("./functions.php");

    $id = sanitize($_POST["id"]);
    $teamid = sanitize($_POST["teamid"]);
    $bericht = sanitize($_POST["bericht"]);

    $sql = "UPDATE `teammsg`
             SET `id`= {$id},`teamID`='{$teamid}', `message`='{$bericht}',`date`= now() 
             WHERE `id`= {$id}";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ./index.php?content=message&alert=updateteammsg-succes");
    }
    else{
        header("Location: ./index.php?content=message&alert=updateteammsg-fail");
    }
?>