<?php include("./functions.php"); ?>
<section>
    <br>
    <div class="container">
        <div class="jumbotron">
            <div class="container">

                <div class="card">
                    <div class="card-body">
                        <div class="row-my6">
                            <div class="col-12"></div>
                            <h3>Speler toevoegen </h3>
                        </div>
                        <div class="row">
                            <div class="col-12"></div>
                            <form name="create_speler" action="?pageid=create_speler_script"
                                onsubmit="return validateForm()" method="post">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Naam Speler</label>
                                        <input type="name" name="spelernaam" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Invoer spelernaam">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Rugnummer</label>
                                        <input type="number" name="rugnummer" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Voer het rugnummer in">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Example select</label>
                                        <select class="form-control" name="teamid"id="exampleFormControlSelect1">
                                            <option>Team A</option>
                                            <option>Team B</option>
                                            <option>Team C</option>
                                            <option>Team D</option>
                                            <option>Team E</option>
                                        </select>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-block btn-lg col-md-4">Maak nieuwe
                                        speler aan.</button>
                                    <br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>