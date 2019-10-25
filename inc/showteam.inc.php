<?php

class showTeam extends Echipa {

    public function showAllTeam() {

        $data0 = $this->getAllTeam();
        $data1 = $this->getAllRoles();

        foreach($data1 as $data) {

            echo '
            <div style="padding: 20px; width: 100%">
            <h1 class="text-center position-relative" style="padding: 20px;">' . $data['Role'] . '</h1>
            ';

        }

        foreach($data0 as $data) {
            
            echo '
            <div class="card card-custom mx-auto">
            <img src="https://i.imgur.com/ePGIcEg.jpg" class="rounded-circle" style="position: absolute; width: 30%; left: 15px;">
            <div class="teamcardname">
            ' . $data['Prenume'] . '
            </div>
            <div class="teamcardrole">
            ' . $data['Role'] . '
            </div>
            </div>
            ';

        }

    }

}

?>