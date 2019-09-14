<?php

class Database {

    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function connect() {

        $this->servername = getenv('MYSQL_IP');
        $this->username = getenv('MYSQL_USER');
        $this->password = getenv('MYSQL_PASSWORD');
        $this->dbname = getenv('MYSQL_DBNAME');

        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        return $conn;

    }

}

?>