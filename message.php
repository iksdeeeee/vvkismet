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
      header("Refresh: 2; ./?content=admin_home");
    break;
    case "course-fail" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
      Het nieuwsbericht is niet geplaatst. Probeer het opnieuw.
            </div>';
      header("Refresh: 2; ./?content=create_nieuwsbericht");
    break;

    case "delete-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
             De actie is verwijderd.
            </div>';
      header("Refresh: 2; ./?content=admin_home");
    break;
    case "delete-fail" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
             De actie is niet verwijderd.
            </div>';
      header("Refresh: 2; ./?content=admin_home");
    break;
    case "update-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
             Het nieuwsbericht is geüpdate.
            </div>';
      header("Refresh: 2; ./?content=admin_home");
    break;
    case "update-fail" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
             Het nieuwsbericht is niet geüpdate.
            </div>';
      header("Refresh: 2; ./?content=admin_home");
    break;
    case "question-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
             Je vraag is verzonden naar de club.
            </div>';
      header("Refresh: 2; ./?content=contact");
    break;
    case "question-fail" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
      Je vraag is niet gestuurd naar de club, probeer het nog een keer.
            </div>';
      header("Refresh: 2; ./?content=contact");
    break;
    case "deleteorder-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
              De order is verwijderd.
            </div>';
      header("Refresh: 2; ./?content=waiter_home");
    break;
    case "deleteorder-fail" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              De order is niet verwijderd.
            </div>';
      header("Refresh: 2; ./?content=waiter_home");
    break;
    case "updateorder-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
              De order is geüpdate.
            </div>';
      header("Refresh: 2; ./?content=waiter_home");
    break;
    case "updateorder-fail" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              De order is niet geüpdate.
            </div>';
      header("Refresh: 2; ./?content=waiter_home");
    break;

  }


?>