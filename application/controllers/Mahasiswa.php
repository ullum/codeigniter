<?php
class Mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model');
    }
    public function index()
    {
        $data['mahasiswa'] = $this->mahasiswa_model->get_mahasiswa();
        $this->load->view('mahasiswa_view', $data);
    }
    public function bacalimit($n = 1)
    {
        $data['mahasiswa'] = $this->mahasiswa_model->getmahasiswalimit($n);
        $this->load->view('mahasiswa_view', $data);
    }

    //Fungsi untuk membuat pagination
    public function page($p = 0)
    {
        $per_page = 5;

        // Load library pagination
        $this->load->library('pagination');

        // Konfigurasi pagination
        $config['base_url'] = site_url() . '/mahasiswa/page/';
        $config['total_rows'] = $this->mahasiswa_model->getjumlahdata();
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

        $data["pagination"] = $this->pagination->create_links();
        $data["result"] = $this->mahasiswa_model->getmahasiswaperpage($p, $per_page);

        //Load view
        $this->load->view("mahasiswa_paging_view", $data);
    }

    function add()
    {
        $this->load->view('add_mahasiswa_view');
    }


    
    function save()
    {
        // Atur validasi
        $this->form_validation->set_rules('Nama', 'Nama', 'required');
        $this->form_validation->set_rules('Jenis_Kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('Agama', 'Agama', 'required');
        $this->form_validation->set_rules('Telepon', 'Telepon', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required');
        $this->form_validation->set_rules('Alamat', 'Alamat', 'required');

        // Atur tag css untuk hasil validasi
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
        if ($this->form_validation->run() == FALSE) 
        {
            $this->load->view('add_mahasiswa_view');
        } 
        else 
        {
            $nama = $this->input->post('Nama');
            $jenis_kelamin = $this->input->post('Jenis_Kelamin');
            $agama = $this->input->post('Agama');
            $telepon = $this->input->post('Telepon');
            $email = $this->input->post('Email');
            $alamat = $this->input->post('Alamat');
            $this->mahasiswa_model->save($nama, $jenis_kelamin, $agama, $telepon, $email, $alamat);
            redirect('mahasiswa/page');
        }
    }

    // Fungsi untuk menghapus data berdasarkan $nim
    function delete()
    {
        $no = $this->uri->segment(3);
        $this->mahasiswa_model->delete($no);
        redirect('mahasiswa/page');
    }

    // Fungsi untuk mengupdate data
    function edit()
    {
        $no = $this->uri->segment(3);
        $result = $this->mahasiswa_model->get_no($no);
        if ($result->num_rows() > 0) {
            $i = $result->row_array();
            $data = array(
                'no' => $i['No'],
                'nama' => $i['Nama'],
                'jenis_kelamin' => $i['Jenis_Kelamin'],
                'agama' => $i['Agama'],
                'telepon' => $i['Telepon'],
                'email' => $i['Email'],
                'alamat' => $i['Alamat']

            );
            $this->load->view('edit_mahasiswa_view', $data);
        } else {
            echo "Data Was Not Found";
        }
    }

    // Fungsi update untuk mengirim nilai dari form ke model
    function update()
    {
        $no = $this->input->post('No');
        $nama = $this->input->post('Nama');
        $jenis_kelamin = $this->input->post('Jenis_Kelamin');
        $agama = $this->input->post('Agama');
        $telepon = $this->input->post('Telepon');
        $email = $this->input->post('Email');
        $alamat = $this->input->post('Alamat');

        $this->mahasiswa_model->update($no, $nama, $jenis_kelamin, $agama, $telepon, $email, $alamat);
        redirect('mahasiswa/page');
    }

    
    
}
