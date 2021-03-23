<?php
class Blog extends CI_Controller{
    public function index()
    {
        // $this->load->view('blog_view');

        $data['judul'] = 'Ini adalah judul';
        $data['konten'] = 'Ini adalah konten';
        $this->load->view('blog_view', $data);
    }
}