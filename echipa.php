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

    <div class="container position-relative" style="top: 15vh;">

        <?php
            $users = new showTeam();
            $users->showAllTeam();
        ?>
        
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/navbar.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
            AOS.init();
    </script>
</body>

</html>