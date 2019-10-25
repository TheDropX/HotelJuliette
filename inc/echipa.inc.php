<?php

class Echipa extends Database {

    protected function getAllTeam() {

        $sql = "SELECT * FROM accounts WHERE Admin = 1";
        $result = $this->connect()->query($sql);
        $rownumber = $result->num_rows;

        if($rownumber > 0) {

            while($row = $result->fetch_assoc()) {

                $data[] = $row;

            }

            return $data;

        }

    }

    protected function getAllRoles() {

        $sql = "SELECT * FROM roles";
        $result = $this->connect()->query($sql);
        $rownumber = $result->num_rows;

        if($rownumber > 0) {

            while($row = $result->fetch_assoc()) {

                $data[] = $row;

            }

            return $data;

        }

    }

}

?>