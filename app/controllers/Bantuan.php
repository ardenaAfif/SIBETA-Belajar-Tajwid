<?php 
class Bantuan extends Controller {
    public function index(){
        $data['nama_file'] = 'bantuan';
        $data['judul'] = 'Bantuan';
        $this->view('templates/header', $data);
        $this->view('bantuan/index');
        $this->view('templates/footer');
    }
    
}