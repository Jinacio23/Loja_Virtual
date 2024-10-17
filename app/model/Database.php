<?php

class Database{
    private $database = 'bdAula';
    private $host = 'laradock-mysql-1';
    private $user = "root";
    private $password = "root";


    public function getConnection(){

        //Mysqli
        $mysqli = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        return $mysqli;

    }

}