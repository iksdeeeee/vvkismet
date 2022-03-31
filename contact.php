<!doctype html>
<html lang="nl">

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
<div>
    <div class="container">
        <br>
        <div class="card">
            <div class="card-body">
                <h4 class="display-4">V.V. Kismet</h4>
                <hr class="my-2">
                <p class="lead"> Hier kunt u alle informatie vinden over het contacteren van V.V. Kismet.</p>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3>Contact Gegevens<h3>
                                <hr class="my-2">
                                <h6> V.V. Kismet <br> Sportpark De Zuilenselaan <br> Burgemeester Norbruislaan 680
                                    <br> Utrecht, 3555 EZ
                                    <br> Tel: 030 243 4058 (nummer kantine)
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <h3>Openingstijden:<h3>
                                <hr class="my-2">
                                <h6>Dinsdag 19:30 - 22:00 <br>
                                    Vrijdag 19:30 - 01:00 <br>
                                    Zondag 09:00 - 18:00 (Indien Er Wedstrijden Thuis Zijn) <br>
                                    <br>
                                    <h3> Bestuurs Leden:<h3>
                                            <hr class="my-2">
                                            <h6>Dhr. Ronald Kalka : Functie Voorzitter <br>
                                                E-mail: r.kalka@ziggo.nl <br>
                                                Dhr. B. Sheombar : Functie Secretaris <br>
                                                Dhr. Rabin Kalka : Functie Wedstrijd Secretaris

                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <form form name="contactform" action="?content=nieuwe_vraag_script"
                            onsubmit="return validateForm()" method="post">
                            <h2>Stel hier uw vragen<h2>
                                    <hr class="my-3">
                                    <div class="form-group">
                                        <label for="nameForm">
                                            <h4>Naam
                                        </label>
                                        <input name="name" type="name" class="form-control" id="nameForm"
                                            placeholder="Voor en achternaam">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">
                                            <h4>Email address
                                        </label>
                                        <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">
                                            <h4>Beschrijf hier uw vraag
                                        </label>
                                        <textarea name="question" class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                        <br>
                                        <button type="submit" class="btn btn-primary">Verzenden</button>
                                    </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <!-- </div> -->

    <body>
        <!-- <main> -->

</div>
<br>
<div class="container" id="map">
    <iframe src="https://maps.google.com/maps?q=Burgemeester%20Norbruislaan%20680&t=&z=13&ie=UTF8&iwloc=&output=embed"
        frameborder="0" style="border:0" id="iframe" allowfullscreen width="100%" height="450 px"></iframe>
</div>
<!-- </main> -->
<!-- Footer -->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
</body>

</html>