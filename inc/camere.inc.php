<?php

class Camere extends Database {

    protected function getAllRooms() {

        $sql = "SELECT * FROM camere";
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