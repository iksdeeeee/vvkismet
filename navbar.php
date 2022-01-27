<navbar class="navbar">
    <a href="?pageid=home">Home</a>
    <a href="?pageid=melding">Meldingen</a>
    <a href="?pageid=contact">Contact</a>
    <a href="?pageid=archief">Archief</a>
    <a href="?pageid=wedstrijden">Wedstrijden</a>
    <a href="?pageid=registerform">Registreren</a>
    <?PHP
        $loggedIn = isset($_SESSION["userid"]);
        if($loggedIn) :
    ?>

        <a href="?pageid=logoutform">Uitloggen</a>
    <?php else : ?>
        <a href="#login">login</a>
    <?php endif; ?>
</navbar>