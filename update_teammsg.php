<?php
    include("./functions.php");
 
    $id = sanitize($_GET["id"]);

    $sql = "SELECT `bericht` FROM `nieuws` WHERE `id` = {$id}";

    $result = mysqli_query($conn, $sql);

    $record = mysqli_fetch_assoc($result);
?>


<section>

<div class="container">
        <div class="jumbotron">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <div class="row-my6">
                            <div class="col-12"></div>
                            <h3>Bericht Bewerken </h3>
                        </div>
                        <div class="row">
                            <div class="col-12"></div>
                            <form name="update_teammsg" action="?content=update_teammsg_script"
                                onsubmit="return validateForm()" method="post">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Voor welk team is het bericht?</label>
                                        <select class="form-control" name="teamid" id="exampleFormControlSelect1">
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            <option>D</option>
                                            <option>E</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="inputField">Vul hier uw bericht in: </label>
                                        <textarea name="bericht" class="form-control" id="inputField"
                                            rows="3"></textarea>
                                    </div>
                                    <br>
                                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-block btn-lg col-md-4">Verstuur het
                                        bericht</button>
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