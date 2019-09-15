<?php

class showTeam extends Echipa {

    public function showAllTeam() {

        $data0 = $this->getAllTeam();

        foreach($data0 as $data) {

            echo '
            <div class="card card-custom mx-2 mb-3">
            <img src="https://i.imgur.com/ePGIcEg.jpg" class="rounded-circle" style="position: absolute; width: 30%; left: 15px;">
            <div class="teamcardname">
            ' . $data['Prenume'] . '
            </div>
            <div class="teamcardrole">
            ' . $data['Role'] . '
            </div>
            </div>
            ';

            //echo $data['Prenume'];

        }

    }

}

?>