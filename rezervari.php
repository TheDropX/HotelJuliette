<?php
    include './inc/db.inc.php';
    include './inc/camere.inc.php';
    include './inc/showRooms.inc.php';

    ini_set('display_errors', 1);
?>
<html>

<?php
include_once "head.php";
?>

<body style="background: #121212">

    <?php
    include_once "sidebar.php";
    ?>

<div class="container position-relative" style="top: 15vh;">
    <h1 class="text-center position-relative" style="padding: 20px;">Camere - test.</h1>
        <div class="row">

            <?php
                $users = new showRooms();
                $users->showAllRooms();
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