<?php 
class Session_c extends CI_Controller{
     
    function __construct(){
        parent::__construct();
        // Memuat library session

        $this->load->library('session');
    }

    // fungsi tambah session
    public function tambahsession(){
        $data = array(
            'nama'      => 'Ainun',
            'alamat'    => 'Malang'
        );
        $this->session->set_userdata($data);
    }

    // fungsi untuk melihat session
    public function lihatsession(){
        echo $this->session->userdata('nama')."<br>";
        echo $this->session->userdata('alamat');
    }

    //fungsi untuk menghapus session
    public function hapussession(){
        $this->session->unset_userdata('nama');
    }

    //fungsi untuk mengupdate session
    public function editsession(){
        $this->session->set_userdata('nama',"Adnan");
    }

    
}