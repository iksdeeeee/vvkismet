<!doctype html>
<html lang="nl">

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

<?php
$sql = "SELECT * FROM `teammsg`";
$result = mysqli_query($conn, $sql);
$tbl_rows = "";
while ($record = mysqli_fetch_assoc($result)) {
    $tbl_rows .= "  <tr>
                    <td>{$record['message']}</td>
                    <td>{$record['date']}</td>
                    </tr>";
}
?>

<div>
    <div class="container">
        <br>
        <div class="card">
            <div class="card-body">
                <h4 class="display-4">Welkom op de pagina voor het E team</h4>
                <hr class="my-2">
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <iframe src="https://embed.hollandsevelden.nl/competities/2021-2022/west-1/zo/4e/?sTFC=%23ffffff&amp;sBC=%23ffffff&amp;sAC=%23f3f3f3" width="470" height="1500" frameborder="0" border="0" scrolling="no" style="border:0;">
                            <p><img src="https://www.hollandsevelden.nl/images/joomleague/t_0.png" alt="HollandseVelden.nl"> Alle <a href="https://www.hollandsevelden.nl/competities/2021-2022/west-1/zo/4e/?sTFC=%23ffffff&amp;sBC=%23ffffff&amp;sAC=%23f3f3f3" target="_blank"></a></p>
                        </iframe>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Mededeling</th>
                                        <th scope="col">Datum</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php echo $tbl_rows ?>
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
</body>

</html>