<?php

class showTeam extends Echipa {

    public function showAllTeam() {

        $data0 = $this->getAllTeam();

        //foreach($data0 as $data) {

            echo $data0['Prenume'];

        //}

    }

    public function showName() {

        $data0 = $this->getAllTeam();

        //foreach($data0 as $data) {

            echo $data0[0]['Nume'];

        //}

    }

    public function showAdminValue() {

        $data0 = $this->getAllTeam();

        //foreach($data0 as $data) {

            echo $data0[0]['Admin'];

        //}

    }

    public function showRole() {

        $data0 = $this->getAllTeam();

        //foreach($data0 as $data) {

            echo $data0[0]['Role'];

        //}

    }

}

?>