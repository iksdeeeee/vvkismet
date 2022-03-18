<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/ css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">

</head>


<div class="container">
    <div class="row">
        <div class="col">
            <BR>
            <div class="card">
                <div class="card-body">
                    <h1 class="display-6">Welkom op de website van V.V. Kismet</h1>
                    <hr class="my-2">
                    <p class="lead"> Voetbalvereniging Kismet is een vereniging met een rijke
                        historie en een sterke eigen identiteit. Met een ledental dat rond de 100 ligt, is Kismet een
                        klein maar fijne, gezellige smeltkroes van verschillende culturen geworden. </p>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <h5 class="display-5"></h5>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Onze teams!</h5>
                            <p class="card-text">Bekijk op deze paginas de teams van V.V. Kismet.
                            </p>
                            <a href="index.php?pageid=teams" class="btn btn-primary">Teams</a>
                        </div>
                    </div>

                    <hr class="my-2">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Vragen?</h5>
                            <p class="card-text">Als je vragen hebt voor de club dan kan je deze via een formulier
                                stellen. <br>Ga hiervoor naar onze contact pagina.
                            </p>
                            <a href="index.php?pageid=contact" class="btn btn-primary">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
            <Br>

        </div>
        <div class="col-5">
            <BR>

            <div class="card" style="width: 27rem;">
                <div class="card-body">
                    <h5 class="card-title">Bericht van de Voorzitter!</h5>
                    <hr class="my-4">
                    <p class="card-text"><?php $berichtvoorzitter = "SELECT * FROM `voorzitter`";
                                            $result2 = mysqli_query($conn, $berichtvoorzitter);
                                            while ($bericht = mysqli_fetch_assoc($result2)) {
                                                $message =  $bericht['message'];
                                            }
                                            echo "$message";
                                            ?></p>
                </div>
            </div>
            <Br>
            <?php
            $sql = "SELECT * FROM `nieuws`";
            $result = mysqli_query($conn, $sql);
            $tbl_rows = "";
            while ($record = mysqli_fetch_assoc($result)) {
                $tbl_rows .= "  <tr>
                                <td>{$record['bericht']}</td>
                                <td>{$record['datum']}</td>
                                </tr>";
            }
            ?>
            <?php
            echo '
                    <div class="card">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Nieuws</th>
                                    <th scope="col">Datum</th>
                                </tr>
                            </thead>
                            <tbody>
                                ' . $tbl_rows . '
                            </tbody>
                        </table>
                    </div>
                </section>'
            ?>
        </div>
    </div>
</div>