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
        $tableName = $table_name;

        $this->db->query('SELECT * FROM ' . $tableName);
        return $this->db->resultSet();
        
    }

    
}