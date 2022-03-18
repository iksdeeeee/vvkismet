<?php
    include("./functions.php");

    $id = sanitize($_GET["id"]);

    $sql = "SELECT `message` FROM `voorzitter` WHERE `id` = {$id}";

    $result = mysqli_query($conn, $sql);

    $record = mysqli_fetch_assoc($result);
?>

<section>
    <div class="container">
        <div class="jumbotron">
            <div class="container">
                <div class="row-my6">
                    <div class="col-12"></div>
                    <h3>Voorzitterbericht: </h3>
                </div>
                <div class="row">
                    <div class="col-12"></div>
                    <form form name="update_voorzitterbericht" action="index.php?pageid=update_voorzitter_script"
                        onsubmit="return validateForm()" method="post">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="inputField">voorzitterbericht</label>
                                <input name="message" type="text" class="form-control" id="inputField"
                                    placeholder="Beschrijf hier de voorzitterbericht"
                                    value="<?php echo $record['message']; ?>">
                            </div>
                            <br>
                            <input type="hidden" name="id" value="<?php echo $id;?>">
                            <button type="submit" class="btn btn-primary btn-block btn-lg col-md-4">Update het
                                voorzitterbericht</button>
                            <br>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>