<?php
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    // Fungsi untuk memanggil view register (Form Register)
    public function register()
    {
        $this->load->view('register_view');
    }
    //fungsi pengecekan register
    public function cekregister()
    {
        // Atur validasi
        $this->form_validation->set_rules(
            'user',
            'Username',
            'required'
        );
        $this->form_validation->set_rules(
            'pass',
            'Password',
            'required'
        );
        // Atur tag css untuk hasil validasi
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register_view');
        } else {
            $user = $this->input->post('user');
            $pass = md5($this->input->post('pass'));
            $level = $this->input->post('level');
            $this->user_model->prosesregister($user, $pass, $level);
            redirect('user/login');
        }
    }

    // Fungsi menampilkan form login
    public function login()
    {
        $this->load->view('login_view');
    }
    //Fungsi pengecekan Login
    public function ceklogin()
    {
        if (isset($_POST['login'])) {
            $user = $this->input->post('user', true);
            $pass = md5($this->input->post('pass', true));
            $cek = $this->user_model->proseslogin($user, $pass);
            $hasil = count($cek);
            if ($hasil > 0) {
                $pelogin = $this->db->get_where('user', array('username'
                => $user, 'password' => $pass))->row();
                $level = $pelogin->level;
                $data = array('level' => $level, 'user' => $user);
                $this->session->set_userdata($data);
                if ($pelogin->level == 'guru') {
                    redirect("user/guru");
                } elseif ($pelogin->level == 'siswa') {
                    redirect("user/siswa");
                }
            } else {
                redirect("user/login");
            }
        }
    }

    // Otorisasi guru
    public function guru()
    {
        if ($this->session->userdata('level') === 'guru') {
            $this->load->view('g_view');
        } else {
            echo "Access Denied";
        }
    }

    // Otorisasi siswa
    public function siswa()
    {
        if ($this->session->userdata('level') === 'siswa') {
            $this->load->view('s_view');
        } else {
            echo "Access Denied";
        }
    }

    // Fungsi untuk proses logout (Menghapus session)
    public function logout()
    {
        $this->session->sess_destroy();
        redirect("user/login");
    }
}
