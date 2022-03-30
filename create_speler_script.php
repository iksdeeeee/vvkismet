<div class="container">
    <?php
    include("./functions.php");

    // var_dump($_POST);

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
        header("Location: ./index.php?pageid=message&alert=course-succes");
    }   else {
        header("Location: ./index.php?pageid=message&alert=course-fail");
    }



    ?>

</div>