<?php 

class Materi_model {
    private $table = 'materi';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;    
    }

    public function getAllLesson(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tampilanPerMateri($table_name){        
        // TABLE NAME
        $tableName = $table_name;
        $adaTable = false;
        // CEK APAKAH ADA TABEL NYA DI DB
        $this->db->query('show tables');
        $this->db->execute();

        $rows = $this->db->resultSet();
        // var_dump($rows);
        $countROW = count($rows);
        for($i=0;$i < $countROW;$i++){
            if($rows[$i]['Tables_in_sibeta'] == $tableName){
                $adaTable = true;
            }
        } 
        if($adaTable == false){
            echo '404 PAGE NOT FOUND';
            die();
        }
        
        $this->db->query('SELECT * FROM ' . $tableName);
        return $this->db->resultSet();
        
    }
    
}