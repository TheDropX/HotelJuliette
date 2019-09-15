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

    <div class="container">
        <div class="row mt-5 justify-content-center">

            <div class="card card-custom mx-2 mb-3">
                <img src="https://i.imgur.com/ePGIcEg.jpg" class="teamcardimage">
                <div class="teamcardname">Alex</div>
                <div class="teamcardrole">Website Developer</div>
            </div>


            <div class="card card-custom mx-2 mb-3">
                <img src="https://i.imgur.com/ePGIcEg.jpg" class="teamcardimage">
                <div class="teamcardname">Alex</div>
                <div class="teamcardrole">Website Developer</div>
            </div>

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