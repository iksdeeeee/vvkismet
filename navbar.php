
<navbar class="navbar">

    <a href="?content=home">Home</a>
    <a href="?content=teams">Onze Teams</a>
    <a href="?content=admin_home">Wedstrijden</a>
    <a href="?content=contact">Contact</a>

    <?PHP
        $loggedIn = isset($_SESSION["userid"]);
        if($loggedIn) :
    ?>
        <a href="?content=admin_home">Admin Pagina</a>
        <a href="?content=logoutform">Uitloggen</a>
    <?php else : ?>
        <a href="#login">Login</a>
    <?php endif; ?>

</navbar>