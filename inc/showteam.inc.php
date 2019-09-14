<?php

class showTeam extends Echipa {

    public function showAllTeam() {

        $data0 = $this->getAllTeam();

        foreach($data0 as $data) {

            echo $data['Prenume'];

        }

    }

}

?>