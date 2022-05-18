<?php

include("./functions.php");

$email = sanitize($_POST['email']);
$password = sanitize($_POST['password']);

if (!empty($email) && !empty($password)) {

    $sql = "SELECT * FROM `users` 
        WHERE `email` = '$email'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $record = mysqli_fetch_assoc($result);

        $db_password = $record["password"];

        if (password_verify($password, $db_password)) {

            $_SESSION["userid"] = $record["userid"];
            $_SESSION["naam"] = $record["naam"];
            $_SESSION["achternaam"] = $record["achternaam"];
            $_SESSION["email"] = $record["email"];
            $_SESSION["funtie"] = $record["funtie"];
            $_SESSION["schepper"] = $record["schepperid"];



                    header("Location: ./index.php?content=home");
        }else {
            echo '<div class="alert alert-danger" role="alert">
    Het door u opgegeven emailadres is niet bekend. Probeer het opnieuw.</div>';
            header("Refresh: 4; url=./index.php?content=home");
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">
    Het door u opgegeven emailadres is niet bekend. Probeer het opnieuw.</div>';
        header("Refresh: 4; url=./index.php?content=home");
    }
} else {
    echo '<div class="alert alert-danger" role="alert">
    1 van uw velden is leeg.</div>';
    header("Refresh: 3; url=./index.php?content=home&email=$email");
}
