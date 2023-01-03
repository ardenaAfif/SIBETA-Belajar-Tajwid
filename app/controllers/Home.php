<?php
 
class Home extends Controller{
    public function index(){
        $this->view('home/index');
    }

    public function login(){
        $this->view('home/login');
    }
    
    public function registrasi(){
        $this->view('home/registrasi');
    }
    
    public function tambah(){
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];
        // Cek Konfirmasi Password
        if($password !== $password2) {
            Flasher::setFlash('Konfirmasi Password tidak sama','ditambahkan', 'danger');
            header('Location:' . BASEURL . '/home/registrasi');
            echo "<script> alert('Konfirmasi Password tidak sama'); </script>";
            exit;
        }
        
        // Enkripsi Password
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        // Kirim ke Model 
        $data['fullname'] = $fullname;
        $data['password'] = $password;
        $data['email'] = $email;
        if($this->model('Users_model')->userDaftar($data)) {
            Flasher::setFlash('Daftar Berhasil','ditambahkan', 'success');
            header('Location:' . BASEURL . '/dashboard');
            exit;
        }
        
    }

    public function cekUser () {
        $data = $this->model('Users_model')->getAllUsers();
        $login['email'] = $_POST['email'];
        $login['password']= $_POST['password'];
        if($this->model('Users_model')->checkUser($login , $data)) {
            Flasher::setFlash('Login Berhasil','ditambahkan', 'success');
            header('Location:' . BASEURL . '/dashboard');
            exit;
        }

    }
}