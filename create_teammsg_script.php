<div class="container">
    <?php
    include("./functions.php");


    $teamid = sanitize($_POST["teamid"]);
    $bericht = sanitize($_POST["bericht"]);


    $sql = "INSERT INTO `teammsg`   (`id`,
                                     `teamID`,
                                     `message`, 
                                     `date`) 
            VALUES                  (NULL, 
                                    '$teamid', 
                                    '$bericht', 
                                     now());";
   

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ./index.php?content=message&alert=teammsg-succes");
    }   else {
        header("Location: ./index.php?content=message&alert=teammsg-fail");
    }



    ?>

</div>