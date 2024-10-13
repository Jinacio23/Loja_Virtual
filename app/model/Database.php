<?php

class Database{
    private $database = 'bdaula';
    private $host = 'localhost';
    private $user = "root";
    private $password = "";


    public function getConnection(){

        //Mysqli
        $mysqli = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        return $mysqli;

        //---- em PDO -----
        //
        // try {
            
        //     $pdo = new PDO("mysql:dbname=$this->database,host=$this->host,user=$this->user,$this->password");
            
        //     return $pdo;
    
        // } catch (PDOException $e) {
        //     echo $e;
        // }

    }

}