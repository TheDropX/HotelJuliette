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

<!--

<div class="container position-relative" style="top: 15vh;">
    <h1 class="text-center position-relative" style="padding: 20px;">Camere - test.</h1>
        <div class="row">

            <?php
                $users = new showRooms();
                $users->showAllRooms();
            ?>

        </div>
    </div>


-->
<div class="container position-relative" style="top: 15vh;">
    <h1 class="text-center position-relative" style="padding: 20px; color:white">In construction...</h1>    
</div>

<div class="room">
          <img src="http://www.langhamhotels.com/cdn-4fdea42f/globalassets/lhr/tl-chicago/rooms/tlchi-rooms-classic_room-doublebed-1680-945.jpg" style="width: 400px;">
          <div class="room_type">PREMIUM KING</div>
          <div class="info">
            <p>Size: 999mp</p>
            <p>Size: 999mp</p>
            <p>Size: 999mp</p>
            <p>Size: 999mp</p>
          </div>  
          <div class="button" id="button-3">
              <div id="circle"></div>
              <a href="#"><i class="fas fa-info-circle"></i>&nbsp;Afla mai multe</a>
          </div>
          <div class="button" id="button-3">
              <div id="circle"></div>
              <a href="#"><i class="fas fa-suitcase-rolling"></i>&nbsp;Rezervare</a>
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