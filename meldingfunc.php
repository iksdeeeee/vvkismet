<?php
    $title = $_POST["title"];
    $text  = $_POST["text"];
    $userid = $_SESSION["userid"];
    date_default_timezone_set('Europe/Amsterdam');
    $datum = date("y/m/d");
    $tijd = date("H:i:s"); 

    $files = array_filter($_FILES['file']['name']);
    $totalFileCount = count($_FILES['file']['name']);
    $arrayToSave = array();
    
    for ($i = 0; $i < $totalFileCount; $i++) {
        // temp path
        $filename = $files[$i];

        if ($filename !=  "") {
            // set new file path
            $newPath = "./pic/other/" . $filename;

            // upload file to temp
            if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $newPath)) {
                array_push($arrayToSave, $filename);
            }
        }
    }

    $images =  implode(",",$arrayToSave);
    
    $sql = "INSERT INTO `meldingen` (`msgid`,
                             `title`,
                             `text`,
                             `userid`,
                             `datum`,
                             `tijd`,
                             `images`
) 
                VALUES      (NULL,
                            '$title',
                            '$text',
                            '$userid',
                            '$datum',
                            '$tijd',
                            '$images'
                            )";

    $id = mysqli_insert_id($conn);
    //var_dump($sql);
    $result = mysqli_query($conn, $sql);
    header("Refresh: 0; url=./index.php?content=melding");
?>