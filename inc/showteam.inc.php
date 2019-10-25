<?php

class showTeam extends Echipa {

    public function showAllTeam() {

        $data0 = $this->getAllTeam();

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

            //echo $data['Prenume'];

        }

    }

    public function showAllRoles() {

        $data1 = $this->getAllRoles();

        foreach($data1 as $data) {

            echo '
            <h1 class="text-center position-relative" style="padding: 20px;">' . $data['Role'] . '</h1>
            ';

        }

    }

}

?>