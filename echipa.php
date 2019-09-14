<?php
    include './inc/db.inc.php';
    include './inc/echipa.inc.php';
    include './inc/showteam.inc.php';
    include_once "sidebar.php";

    ini_set('display_errors', 1);
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Firma de exercitiu</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/navbar1.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body style="background: #fff">

    <div class="bg"></div>
    <div class="first_hm">
            <h1 class="first_h1" data-aos="zoom-in">Firmă de exercițiu</h1>
            <p class="first_p">Pagină în construcție...</p>
            <?php
                $users = new showTeam();
                $users->showAllTeam();
            ?>
    </div>

    <div class="card">
        <div class="card-img-top"></div>
        <div class="card-body text-center">
            <img class="avatar rounded-circle" src="https://i.imgur.com/ePGIcEg.jpg" alt="Bologna">
            <h4 class="card-title">TheDrop.</h4>
            <h6 class="card-subtitle mb-2 text-muted">Website Developer</h6>
            <p class="card-text">... </p>
            <a href="#" class="btn btn-info">Follow</a>
            <a href="#" class="btn btn-outline-info">Message</a>
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