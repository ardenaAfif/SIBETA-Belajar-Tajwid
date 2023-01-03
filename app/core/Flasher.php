<?php

class Flasher {
    public static function setFlash($pesan, $aksi, $tipe){
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }
    public static function flash(){
        if(isset($_SESSION['flash'])) {
        echo '<div class="flash" style="
                font-style: italic;
                color: red;    
                font-size: 16px;        
               "><h2>'.$_SESSION['flash']['pesan'].'</h2></div>';
        unset($_SESSION['flash']);
        }
    } 
}