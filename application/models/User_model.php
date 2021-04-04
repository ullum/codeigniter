<?php
class User_model extends CI_Model{

    // Fungsi untuk memasukkan data register ke tabel User_model
    public function prosesregister($user, $pass, $level)
    {
        $data = array(
            'username'  => $user,
            'password'  => $pass,
            'level'     => $level
        );
        $this->db->insert('user', $data);
    }

    // Fungsi Login (mengecek ke database) //
    public function proseslogin($user, $pass)
    {
        $this->db->where('username', $user);
        $this->db->where('password', $pass);
        return $this->db->get('user')->row();
    }
}
