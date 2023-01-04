<?php 
class Homepage extends Controller {
    public function index(){
        $data['nama_file'] = 'homepage';
        $data['judul'] = 'Homepage';
        $lesson = $this->model('Materi_model')->getAllLesson();
        $this->view('templates/header', $data);
        $this->view('homepage/index', $lesson);
        $this->view('templates/footer');
    }
    
}