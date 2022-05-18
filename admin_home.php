<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/ css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">

</head>

<?php

    $sql  = "SELECT * FROM `nieuws`";
    $sql2 = "SELECT * FROM `contactform`";
    $sql3 = "SELECT * FROM `voorzitter`";
    $sql4 = "SELECT * FROM `spelers` ORDER BY `teamid`";  
    $sql5 = "SELECT * FROM `teammsg` ORDER BY `teamID`"; 


    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);
    $result3 = mysqli_query($conn, $sql3);
    $result4 = mysqli_query($conn, $sql4);
    $result5 = mysqli_query($conn, $sql5);
 


    $tbl_rows = "";
    while ($record = mysqli_fetch_assoc($result)) {
        $tbl_rows .= "  <tr>
        <td>{$record['bericht']}</td>
        <td>{$record['datum']}</td>
        <td><a href='index.php?content=update_nieuwsbericht&id={$record['id']}'><i class='bi bi-pencil-square'></i><a></td>
        <td><a href='index.php?content=delete_nieuwsbericht_script&id={$record['id']}'><i class='bi bi-x-square text-danger'></i><a></td>
        </tr>";
    }

    $tbl_rows2 = "";
    while ($record2 = mysqli_fetch_assoc($result2)) {
        $tbl_rows2 .= "  <tr>
        <td>{$record2['name']}</td>
        <td>{$record2['email']}</td>
        <td>{$record2['question']}</td>
        <td><a href='index.php?content=delete_question_script&id={$record2['id']}'><i class='bi bi-x-square text-danger'></i><a></td>
        </tr>";
    }

    $tbl_rows3 = "";
    while ($record3 = mysqli_fetch_assoc($result3)) {
        $tbl_rows3 .= "  <tr>
        <td>{$record3['message']}</td>
        <td><a href='index.php?content=update_voorzitterbericht&id={$record3['id']}'><i class='bi bi-pencil-square'></i><a></td>
        </tr>";
    }

    $tbl_rows4 = "";
    while ($record4 = mysqli_fetch_assoc($result4)) {
        $tbl_rows4 .= "  <tr>
        <td>{$record4['spelernaam']}</td>
        <td>{$record4['rugnummer']}</td>
        <td>{$record4['teamid']}</td>
        <td><a href='index.php?content=delete_speler_script&id={$record4['id']}'><i class='bi bi-x-square text-danger'></i><a></td>
        </tr>";
    }
    $tbl_rows5 = "";
    while ($record5 = mysqli_fetch_assoc($result5)) {
        $tbl_rows5 .= "  <tr>
        <td>{$record5['teamID']}</td>
        <td>{$record5['message']}</td>
        <td>{$record5['date']}</td>
        <td><a href='index.php?content=update_teammsg&id={$record5['id']}'><i class='bi bi-pencil-square'></i><a></td>
        <td><a href='index.php?content=delete_teammsg_script&id={$record5['id']}'><i class='bi bi-x-square text-danger'></i><a></td>
        </tr>";
    }


?>

<section class="container">
    <BR>
    <div class="card">
        <div class="card-body">

            <h2 class="display-6">Admin pagina van V.V. Kismet</h2>
            <p class="lead">Bekijk hieronder alle mogelijkheden om berichten aan te passen binnen de website.</p>
            <hr class="my-4">

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="row">
                    <div class="row my-3">
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <p class="lead">Homepagina nieuwsberichten</p>
                                    <hr class="my-4">
                                    <div class="d-grid gap-2">
                                        <a href="?content=create_nieuwsbericht" class="btn btn-primary"
                                            role="button">Maak Nieuwsbericht</a>
                                        <br>
                                    </div>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                        
                                                <th scope="col">Nieuwsbericht</th>
                                                <th scope="col-6">Datum</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php echo $tbl_rows; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="row">
                    <div class="row my-3">
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <p class="lead">Bericht van de Voorzitter</p>
                                    <hr class="my-4">
                                    <div class="d-grid gap-2">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Bericht</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php echo $tbl_rows3; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="lead">Contactpagina Vragen</p>
                    <hr class="my-4">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Naam</th>
                                <th scope="col">Email</th>
                                <th scope="col">Vraag</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php echo $tbl_rows2; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="lead">Spelers</p>
                    <hr class="my-4">
                    <a href="?content=create_speler" class="btn btn-primary" role="button">Voeg een Speler toe</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Naam Teamleden</th>
                                <th scope="col">Rugnummer</th>
                                <th scope="col">Team</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php echo $tbl_rows4; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <p class="lead">Team berichten</p>
            <hr class="my-4">
            <div class="d-grid gap-2">
                <a href="?content=create_teammsg" class="btn btn-primary" role="button">Maak een bericht</a>
                <br>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Team</th>
                        <th scope="col-6">Vraag</th>
                        <th scope="col">Datum</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $tbl_rows5; ?>
                </tbody>
            </table>
        </div>
    </div>
    <Br>
    </div>
</section>