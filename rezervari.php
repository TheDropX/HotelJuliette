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

<body style="background: white;">

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

    <div class="rooms">

        <div class="room">
            <img src="http://www.langhamhotels.com/cdn-4fdea42f/globalassets/lhr/tl-chicago/rooms/tlchi-rooms-classic_room-doublebed-1680-945.jpg" style="max-width: 100%; max-height: 100%;">
            <div class="room_type">CAMERA PREMIUM</div>
            <div class="info">
            <p>Pret pe noapte: 200 RON</p>
            <p>Paturi: 3</p>
            <p>Băi: 2</p>
            <p>Capacitate: 2x adulti, 3x copii</p>
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

        <div class="room">
            <img src="http://www.langhamhotels.com/cdn-4fdea42f/globalassets/lhr/tl-chicago/rooms/tlchi-rooms-classic_room-doublebed-1680-945.jpg" style="max-width: 100%; max-height: 100%;">
            <div class="room_type">CAMERA PREMIUM</div>
            <div class="info">
            <p>Pret pe noapte: 200 RON</p>
            <p>Paturi: 3</p>
            <p>Băi: 2</p>
            <p>Capacitate: 2x adulti, 3x copii</p>
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

        <div class="room">
            <img src="http://www.langhamhotels.com/cdn-4fdea42f/globalassets/lhr/tl-chicago/rooms/tlchi-rooms-classic_room-doublebed-1680-945.jpg" style="max-width: 100%; max-height: 100%;">
            <div class="room_type">CAMERA PREMIUM</div>
            <div class="info">
            <p>Pret pe noapte: 200 RON</p>
            <p>Paturi: 3</p>
            <p>Băi: 2</p>
            <p>Capacitate: 2x adulti, 3x copii</p>
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

        <div class="room">
            <img src="http://www.langhamhotels.com/cdn-4fdea42f/globalassets/lhr/tl-chicago/rooms/tlchi-rooms-classic_room-doublebed-1680-945.jpg" style="max-width: 100%; max-height: 100%;">
            <div class="room_type">CAMERA PREMIUM</div>
            <div class="info">
            <p>Pret pe noapte: 200 RON</p>
            <p>Paturi: 3</p>
            <p>Băi: 2</p>
            <p>Capacitate: 2x adulti, 3x copii</p>
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

        <div class="room">
            <img src="http://www.langhamhotels.com/cdn-4fdea42f/globalassets/lhr/tl-chicago/rooms/tlchi-rooms-classic_room-doublebed-1680-945.jpg" style="max-width: 100%; max-height: 100%;">
            <div class="room_type">CAMERA PREMIUM</div>
            <div class="info">
            <p>Pret pe noapte: 200 RON</p>
            <p>Paturi: 3</p>
            <p>Băi: 2</p>
            <p>Capacitate: 2x adulti, 3x copii</p>
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

        <div class="room">
            <img src="http://www.langhamhotels.com/cdn-4fdea42f/globalassets/lhr/tl-chicago/rooms/tlchi-rooms-classic_room-doublebed-1680-945.jpg" style="max-width: 100%; max-height: 100%;">
            <div class="room_type">CAMERA PREMIUM</div>
            <div class="info">
            <p>Pret pe noapte: 200 RON</p>
            <p>Paturi: 3</p>
            <p>Băi: 2</p>
            <p>Capacitate: 2x adulti, 3x copii</p>
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

        <div class="room">
            <img src="http://www.langhamhotels.com/cdn-4fdea42f/globalassets/lhr/tl-chicago/rooms/tlchi-rooms-classic_room-doublebed-1680-945.jpg" style="max-width: 100%; max-height: 100%;">
            <div class="room_type">CAMERA PREMIUM</div>
            <div class="info">
            <p>Pret pe noapte: 200 RON</p>
            <p>Paturi: 3</p>
            <p>Băi: 2</p>
            <p>Capacitate: 2x adulti, 3x copii</p>
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
		
		        <div class="room">
            <img src="http://www.langhamhotels.com/cdn-4fdea42f/globalassets/lhr/tl-chicago/rooms/tlchi-rooms-classic_room-doublebed-1680-945.jpg" style="max-width: 100%; max-height: 100%;">
            <div class="room_type">CAMERA ECONOMIC</div>
            <div class="info">
            <p>Pret pe noapte: 90 RON</p>
            <p>Paturi: 1</p>
            <p>Băi: 1</p>
            <p>Capacitate: 2x adulti</p>
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
		
		        <div class="room">
            <img src="http://www.langhamhotels.com/cdn-4fdea42f/globalassets/lhr/tl-chicago/rooms/tlchi-rooms-classic_room-doublebed-1680-945.jpg" style="max-width: 100%; max-height: 100%;">
            <div class="room_type">CAMERA BASIC</div>
            <div class="info">
            <p>Pret pe noapte: 100 RON</p>
            <p>Paturi: 2</p>
            <p>Băi: 1</p>
            <p>Capacitate: 2x adulti, 1x copil</p>
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

        <div class="room">
            <img src="http://www.langhamhotels.com/cdn-4fdea42f/globalassets/lhr/tl-chicago/rooms/tlchi-rooms-classic_room-doublebed-1680-945.jpg" style="max-width: 100%; max-height: 100%;">
            <div class="room_type">CAMERA PREMIUM</div>
            <div class="info">
            <p>Pret pe noapte: 200 RON</p>
            <p>Paturi: 3</p>
            <p>Băi: 2</p>
            <p>Capacitate: 2x adulti, 3x copii</p>
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