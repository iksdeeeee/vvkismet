<?php
  $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
  $id = (isset($_GET["id"]))? $_GET["id"]: "";
  $pwh = (isset($_GET["pwh"]))? $_GET["pwh"]: "";
  $email = (isset($_GET["email"]))? $_GET["email"]: "";
  
  
 

  switch($alert) {
    case "course-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
             Het nieuwsbericht is geplaatst.
            </div>';
      header("Refresh: 3; ./?content=admin_home");
    break;
    case "course-fail" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
      Het nieuwsbericht is niet geplaatst. Probeer het opnieuw.
            </div>';
      header("Refresh: 3; ./?content=create_nieuwsbericht");
    break;
    case "deleteteammsg-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
             Het teambericht is verwijderd
            </div>';
      header("Refresh: 3; ./?content=admin_home");
    break;
    case "deleteteammsg-fail" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
      Het teambericht is niet verwijderd. Probeer het opnieuw.
            </div>';
      header("Refresh: 3; ./?content=create_nieuwsbericht");
    break;
    case "deletevraag-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
            De vraag is verwijderd
            </div>';
      header("Refresh: 3; ./?content=admin_home");
    break;
    case "deletevraag-fail" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
      De vraag is niet verwijderd. Probeer het later nogmaals.
            </div>';
      header("Refresh: 3; ./?content=create_nieuwsbericht");
    break;
    case "deletespeler-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
            De speler is verwijderd
            </div>';
      header("Refresh: 3; ./?content=admin_home");
    break;
    case "deletespeler-fail" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
      De speler is niet verwijderd. Probeer het later nogmaals.
            </div>';
      header("Refresh: 3; ./?content=create_nieuwsbericht");
    break;
    case "updatevoorzitter-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
             Het voorzittersbericht is bijgewerkt.
            </div>';
      header("Refresh: 3; ./?content=admin_home");
    break;
    case "updatevoorzitter-fail" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
      Het voorzittersbericht is niet bewerkt. Probeer het opnieuw.
            </div>';
      header("Refresh: 3; ./?content=create_nieuwsbericht");
    break;
    case "updateteammsg-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
             Het bericht is bijgewerkt.
            </div>';
      header("Refresh: 3; ./?content=admin_home");
    break;
    case "updateteammsg-fail" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
      Het bericht is niet bijgewerkt.
            </div>';
      header("Refresh: 3; ./?content=create_nieuwsbericht");
    break;
    case "createnieuw-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
             Het nieuwsbericht is succesvol geplaatst.
            </div>';
      header("Refresh: 3; ./?content=admin_home");
    break;
    case "createnieuw-fail" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
      Het nieuwsbericht is niet aangemaakt.
            </div>';
      header("Refresh: 3; ./?content=create_nieuwsbericht");
    break;
    case "teammsg-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
             Het bericht is naar het team gestuurd en staat op de teampagina.
            </div>';
      header("Refresh: 3; ./?content=admin_home");
    break;
    case "teammsg-fail" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
      Het bericht is niet naar het team gestuurd.
            </div>';
      header("Refresh: 3; ./?content=create_nieuwsbericht");
    break;
    case "speleradd-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
             De speler is succesvol toegevoegd.
            </div>';
      header("Refresh: 3; ./?content=admin_home");
    break;
    case "speleradd-fail" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
      De speler is niet toegevoegd, Probeer het nogmaals.
            </div>';
      header("Refresh: 3; ./?content=admin_home");
    break;

    case "delete-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
             Het nieuwsbericht is verwijderd.
            </div>';
      header("Refresh: 3; ./?content=admin_home");
    break;
    case "delete-fail" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
             Het nieuwsbericht is niet verwijderd.
            </div>';
      header("Refresh: 3; ./?content=admin_home");
    break;
    case "update-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
             Het nieuwsbericht is geüpdate.
            </div>';
      header("Refresh: 3; ./?content=admin_home");
    break;
    case "update-fail" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
             Het nieuwsbericht is niet geüpdate.
            </div>';
      header("Refresh: 3; ./?content=admin_home");
    break;
    case "question-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
             Je vraag is verzonden naar de club.
            </div>';
      header("Refresh: 3; ./?content=contact");
    break;
    case "question-fail" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
      Je vraag is niet gestuurd naar de club, probeer het nog een keer.
            </div>';
      header("Refresh: 3; ./?content=contact");
    break;
    case "deleteorder-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
              De order is verwijderd.
            </div>';
      header("Refresh: 3; ./?content=waiter_home");
    break;
    case "deleteorder-fail" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              De order is niet verwijderd.
            </div>';
      header("Refresh: 3; ./?content=waiter_home");
    break;
    case "updateorder-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
              De order is geüpdate.
            </div>';
      header("Refresh: 3; ./?content=waiter_home");
    break;
    case "updateorder-fail" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              De order is niet geüpdate.
            </div>';
      header("Refresh: 3; ./?content=waiter_home");
    break;

  }


?>