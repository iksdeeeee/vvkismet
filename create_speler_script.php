<div class="container">
    <?php
    include("./functions.php");


    $name = sanitize($_POST["spelernaam"]);
    $number = sanitize($_POST["rugnummer"]);
    $teamid = sanitize($_POST["teamid"]);


    $sql = "INSERT INTO `spelers`       (`id`, 
                                         `spelernaam`,
                                         `rugnummer`,
                                         `teamid`)
            VALUES                      (NULL, 
                                        '$name', 
                                        '$number', 
                                        '$teamid');";
   

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ./index.php?content=message&alert=speleradd-succes");
    }   else {
        header("Location: ./index.php?content=message&alert=speleradd-fail");
    }



    ?>

</div>