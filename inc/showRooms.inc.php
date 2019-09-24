<?php

class showRooms extends Camere {

    public function showRooms() {

        $data0 = $this->getAllRooms();

        foreach($data0 as $data) {

            echo '
            <div class="card card-custom mx-auto">
            <img src="https://i.imgur.com/ePGIcEg.jpg" class="rounded-circle" style="position: absolute; width: 30%; left: 15px;">
            <div class="teamcardname">
            ' . $data['Status'] . '
            </div>
            <div class="teamcardrole">
            ' . $data['Pret'] . '
            </div>
            </div>
            ';

        }

    }

}

?>