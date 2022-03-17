
<navbar class="navbar">

    <a href="?pageid=home">Home</a>
    <a href="?pageid=teams">Onze Teams</a>
    <a href="?pageid=wedstrijden">Wedstrijden</a>
    <a href="?pageid=contact">Contact</a>

    <?PHP
        $loggedIn = isset($_SESSION["userid"]);
        if($loggedIn) :
    ?>
        <a href="?pageid=admin_home">Admin Pagina</a>
        <a href="?pageid=logoutform">Uitloggen</a>
    <?php else : ?>
        <a href="#login">Login</a>
    <?php endif; ?>

</navbar>