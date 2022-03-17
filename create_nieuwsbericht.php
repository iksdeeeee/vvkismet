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
                            <h3>Nieuwsbericht toevoegen </h3>
                        </div>
                        <div class="row">
                            <div class="col-12"></div>
                            <form name="create_nieuwsbericht" action="?pageid=create_nieuwsbericht_script"
                                onsubmit="return validateForm()" method="post">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="inputField">Nieuwsbericht</label>
                                        <textarea name="bericht" class="form-control" id="inputField" rows="3"></textarea>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-block btn-lg col-md-4">Plaats het
                                        nieuwsbericht</button>
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