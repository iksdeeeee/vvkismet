<?php
    $sql  = "SELECT * FROM `nieuws`";
    $sql2 = "SELECT * FROM `contactform`";
    $sql3 = "SELECT * FROM `voorzitter`"; 


    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);
    $result3 = mysqli_query($conn, $sql3);
 


    $tbl_rows = "";
    while ($record = mysqli_fetch_assoc($result)) {
        $tbl_rows .= "  <tr>
        <td>{$record['bericht']}</td>
        <td>{$record['datum']}</td>
        <td><a href='index.php?pageid=update_nieuwsbericht&id={$record['id']}'><i class='bi bi-pencil-square'></i><a></td>
        <td><a href='index.php?pageid=delete_nieuwsbericht_script&id={$record['id']}'><i class='bi bi-x-square text-danger'></i><a></td>
        </tr>";
    }

    $tbl_rows2 = "";
    while ($record2 = mysqli_fetch_assoc($result2)) {
        $tbl_rows2 .= "  <tr>
        <td>{$record2['name']}</td>
        <td>{$record2['email']}</td>
        <td>{$record2['question']}</td>
        <td>{$record2['status']}</td>
        <td><a href='index.php?pageid=update_question&id={$record2['id']}'><i class='bi bi-pencil-square'></i><a></td>
        <td><a href='index.php?pageid=delete_question_script&id={$record2['id']}'><i class='bi bi-x-square text-danger'></i><a></td>
        </tr>";
    }

    $tbl_rows3 = "";
    while ($record3 = mysqli_fetch_assoc($result3)) {
        $tbl_rows3 .= "  <tr>
        <td>{$record3['message']}</td>
        
        </tr>";
    }

    // <td><a href='index.php?pageid=update_voorzitterbericht&id={$record3['id']}'><i class='bi bi-pencil-square'></i><a></td>

?>

<section class="container">
    <BR>
    <div class="card">
        <div class="card-body">
            <div class="jumbotron">
                <h1 class="display-4">Admin pagina van V.V. Kismet</h1>
                <p class="lead">Bekijk hieronder alle mogelijkheden om berichten aan te passen binnen de website.</p>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="jumbotron">
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
                                            <a href="?pageid=create_nieuwsbericht" class="btn btn-primary"
                                                role="button">Maak Nieuwsbericht</a>
                                            <br>
                                        </div>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nieuwsbericht</th>
                                                    <th scope="col">Datum</th>
                                                    <th scope="col">Bewerken</th>
                                                    <th scope="col">Verwijderen</th>
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
                                                        <th scope="col">Bewerken</th>
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
                                    <th scope="col">Status</th>
                                    <th scope="col">Verwijderen</th>
                                    <th scope="col"></th>
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
        </div>
    <Br>


    </div>
</section>