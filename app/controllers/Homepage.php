<?php 
class Homepage extends Controller {
    public function index(){
        $data['nama_file'] = 'homepage';
        $data['judul'] = 'Homepage';
        $this->view('templates/header', $data);
        $this->view('homepage/index');
        $this->view('templates/footer');
    }
    
}