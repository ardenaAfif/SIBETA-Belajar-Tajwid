<?php 
class Dashboard extends Controller {
    public function index(){
        $data['nama_file'] = 'dashboard';
        $data['judul'] = 'DashBoard';
        $this->view('templates/header', $data);
        $this->view('dashboard/index');
        $this->view('templates/footer');
    }
    
}