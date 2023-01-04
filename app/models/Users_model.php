<?php 

class Users_model {
    private $table = 'users';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;    
    }

    public function getAllUsers(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    
    public function userDaftar($data) {
        $query = "INSERT INTO users VALUES ('', :fullname, :password, :email)";
    
        $this->db->query($query);
        $this->db->bind('fullname', $data['fullname']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('email', $data['email']);
        
        $this->db->execute();

        return $this->db->rowCount();

    }   
    public function checkUser($data, $dataDB) {
        // echo 'TEST';
        // Yang di Input dari Form
        $email = $data['email'];
        $password = $data['password'];
        $countDB = count($dataDB);
        
        // CEK ISI nya :v
        // var_dump($data);
        // var_dump($dataDB);
        // echo $countDB;
        
        // yang ada di DataBase
        $emailDB = '';
        $passwordDB = '';
        
        for($i=0; $i < $countDB;$i++){
            if ($email === $dataDB[$i]['email']){
                $emailDB = $dataDB[$i]['email'];
                $passwordDB = $dataDB[$i]['password'];
                echo 'Email ADA !';
                break;
            } 
        }
        if($emailDB == '')  {
            echo 'Email Tidak Ditemukan';
            exit;
        }   
        // echo $emailDB;
        // echo $passwordDB;
    
            //cek Password
            if(password_verify($password,$passwordDB)){
                echo 'Password Sama , Berhasil';
                // header('Location:' . BASEURL . '/dashboard');
            } else {
                echo "ERRORR!!, Password tidak sama";
                exit;
            }
        return true;
    }
}