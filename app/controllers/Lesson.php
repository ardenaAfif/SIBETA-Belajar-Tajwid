<?php 
class Lesson extends Controller {
    public function index($id_lesson){
        $data['nama_file'] = 'lesson';
        $data['judul'] = 'Lesson';
        $id = $id_lesson;
        $lesson = $this->model('Materi_model')->tampilanPerMateri($id);

        // PARSE JUDUL 
        // $judul_array = explode('_', $id_lesson);
        $judul_materi =  str_replace("_"," ",$id_lesson);
        $judul_materi = strtoupper($judul_materi);
        // var_dump($judul_materi);
        // die();

        
        $this->view('templates/header', $data);
        $this->view('lesson/judul_materi', $judul_materi);
        $this->view('lesson/index', $lesson);
        $this->view('templates/footer');
    }

}