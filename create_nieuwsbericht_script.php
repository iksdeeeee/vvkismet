<div class="container">
    <?php
    include("./functions.php");


    $bericht = sanitize($_POST["bericht"]);


    $sql = "INSERT INTO `nieuws`       (`id`,
                                       `bericht`,
                                       `datum`)
             VALUES                    (NULL, 
                                       '$bericht', 
                                       now());";
   

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ./index.php?content=message&alert=createnieuw-succes");
    }   else {
        header("Location: ./index.php?content=message&alert=createnieuw-fail");
    }



    ?>

</div>