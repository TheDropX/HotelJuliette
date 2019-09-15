<?php
    include './inc/db.inc.php';
    include './inc/echipa.inc.php';
    include './inc/showteam.inc.php';

    ini_set('display_errors', 1);
?>
<html>

<?php
include_once "head.php";
?>

<body style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(146,101,199,1) 0%, rgba(96,193,203,1) 100.2% );">

    <?php
    include_once "sidebar.php";
    ?>

    <div class="first_hm">
            <h1 class="first_h1" data-aos="zoom-in">Firmă de exercițiu</h1>
            <p class="first_p">Pagină în construcție...</p>
    </div>

    <div class="container">
        <div class="row">

            <?php
                $users = new showTeam();
                $users->showAllTeam();
            ?>

        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/navbar.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
            AOS.init();
    </script>
</body>

</html>