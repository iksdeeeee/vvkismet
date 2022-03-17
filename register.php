<?php
require_once("./functions.php");

$naam = sanitize($_POST["naam"]);
$achternaam = sanitize($_POST["achternaam"]);
$funtie = sanitize($_POST["funtie"]);
$email = sanitize($_POST["email"]);
$userid = sanitize($_SESSION['userid']);


$sql = "SELECT * FROM `users` WHERE `email` = '$email'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    echo '<div class="alert alert-danger" role="alert">
    Er is iets fout gegaan. Probeer het nog eens.</div>';
    header("Refresh: 4; url=./index.php?content=registerform");
} else {

  date_default_timezone_set("Europe/Amsterdam");
  $date = date('d-m-Y H:i:s'); 
  $part_of_email = substr($email,0,4);

  $password = password_hash($date.$part_of_email, PASSWORD_BCRYPT);

  $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $naam = sanitize($_POST["naam"]);
    $achternaam = sanitize($_POST["achternaam"]);
    $funtie = sanitize($_POST["funtie"]);
    $email = sanitize($_POST["email"]);
    
    $sql = "INSERT INTO `users`(`userid`,
                             `password`,
                             `naam`,
                             `achternaam`, 
                             `email`,
                             `funtie`,
                             `schepperid`) 
                VALUES      (null,
                            '$password',
                            '$naam',
                            '$achternaam',
                            '$email',
                            '$funtie',
                             $userid)";
   //echo $sql;
    $result = mysqli_query($conn, $sql);

    $id = mysqli_insert_id($conn);

    //var_dump($result);

    if ($result) {

    header("Refresh: 0; url=./index.php?pageid=createpassword&id=" . $id . "&pw=" . $password_hash . "");
    } else {
        echo '<div class="alert alert-danger" role="alert">
    Er is iets fout gegaan met de registratie. Probeer het nog maals.</div>';
        header("; url=./index.php?pageid=registerform");
    }
}