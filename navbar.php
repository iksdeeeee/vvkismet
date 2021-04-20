<navbar>
    <a href="?pageid=home">home</a>
    <a href="?pageid=melding">meldingen</a>
    <a href="?pageid=contact">contact</a>
    <a href="?pageid=archief">archief</a>
    <a href="?pageid=wedstrijden">wedstrijden</a>
    <?PHP
        $loggedIn = isset($_SESSION["userid"]);
        if($loggedIn) : 
    ?>
        <a href="?pageid=home">Uitloggen</a>
    <?php else : ?>
        <a href="#login">login</a>
    <?php endif; ?>
</navbar>