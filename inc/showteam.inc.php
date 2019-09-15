<?php

class showTeam extends Echipa {

    public function showAllTeam() {

        $data0 = $this->getAllTeam();

        foreach($data0 as $data) {

            echo $data['Prenume'];

        }

    }

    public function showName() {

        $data0 = $this->getAllTeam();

        foreach($data0 as $data) {

            echo $data['Nume'];

        }

    }

    public function showAdminValue() {

        $data0 = $this->getAllTeam();

        foreach($data0 as $data) {

            echo $data['Admin'];

        }

    }

    public function showRole() {

        $data0 = $this->getAllTeam();

        foreach($data0 as $data) {

            echo $data['Role'];

        }

    }

}

?>