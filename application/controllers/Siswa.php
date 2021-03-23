<?php
    class Siswa extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('siswa_model');
        }
        public function index(){    
            $data['siswa'] = $this->siswa_model->get_siswa();
            $this->load->view('siswa_view', $data);
        }
        public function bacalimit($n=1){
            $data['siswa'] = $this->siswa_model->getsiswalimit($n);
            $this->load->view('siswa_view', $data);
        }

        //Fungsi untuk membuat pagination
        public function page($p=0) {
            $per_page = 5;

        // Load library pagination
        $this->load->library('pagination');

        // Konfigurasi pagination
        $config['base_url'] = site_url().'/siswa/page/';
        $config['total_rows'] = $this->siswa_model->getjumlahdata();
        $config['per_page'] = $per_page;

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="paging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);

        $data["pagination"]=$this->pagination->create_links();
        $data["result"]=$this->siswa_model->getsiswaperpage($p,$per_page);

        //Load view
        $this->load->view("siswa_paging_view", $data);

        }
        
    }