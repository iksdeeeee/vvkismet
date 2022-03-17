<div class="container">
    <?php
    include("./functions.php");

    // var_dump($_POST);

    $name = sanitize($_POST["name"]);
    $email = sanitize($_POST["email"]);
    $question = sanitize($_POST["question"]);


    $sql = "INSERT INTO `contactform`  (`id`,
                                        `name`,
                                        `email`,
                                        `question`)
                VALUES                  (NULL, 
                                        '$name',
                                        '$email', 
                                        '$question');";
   

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ./index.php?pageid=message&alert=question-succes");
    }   else {
        header("Location: ./index.php?pageid=message&alert=question-fail");
    }



    ?>

</div>