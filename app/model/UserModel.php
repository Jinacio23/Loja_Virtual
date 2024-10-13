<?php

class UserModel extends Database
{

    private $mysqli;

    public function __construct()
    {
        $this->mysqli = $this->getConnection();
    }

    public function fetch()
    {

        //Mysqli
        
        $sql = "SELECT * FROM aluno";
        $query = mysqli_query($this->mysqli, $sql);
        $result = mysqli_fetch_all($query);
        return $result;

        //---- em PDO -----
        //
        // $stm = $this->query("SELECT * FROM aluno");
        // if($stm->rowCount() > 0){
        //     return $stm->fetchAll(PDO::FETCH_ASSOC);
        // } else {
        //     return [];
        // }
    }

    
}