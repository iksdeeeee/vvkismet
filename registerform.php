<?PHP $loggedIn = isset($_SESSION["userid"]);
if($loggedIn){ ?>
<form action="?pageid=register" method="post">
              <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="firstname">Voornaam</label>
                    <input type="text" class="form-control" name="naam" id="naam" placeholder="Voornaam">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lastname">Achternaam</label>
                    <input type="text" class="form-control" name="achternaam" id="achternaam" placeholder="Achternaam">
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Jantje5@gmail.com">
                    </div>
                    <label for="funtie">funtie</label>
  <select name="funtie" id="funtie">
    <option value="Trainer">Trainer</option>
    <option value="Coach">Coach</option>
    <option value="Voorzitter">Voorzitter</option>
    <option value="Secretaris">Secretaris</option>
    <option value="ICT-Beheerder">ICT-Beheerder</option>
  </select>
                    </div>
                  <button type="submit" class="btn btn-primary">Sign in</button>
              </form>
              </div>
</div>
              <?php } else { header("Location: ./index.php?pageid=home"); } ?>