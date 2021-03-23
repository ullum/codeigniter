<?php
class Mahasiswa_model extends CI_Model
{
    function get_mahasiswa()
    {
        $result = $this->db->query('select * from mahasiswa order by Nama DESC');
        return $result;
    }
    public function getmahasiswalimit($n = 1)
    {
        $sqlstr = "select * from mahasiswa LIMIT $n";
        $result = $this->db->query($sqlstr);
        return $result;
    }
    function getjumlahdata()
    {
        $jumlahdata     =   $this->db->count_all("mahasiswa");
        return $jumlahdata;
    }

    function getmahasiswaperpage($p = 0, $per_page = 5)
    {
        $sqlstr = "select * from mahasiswa ";
        $sqlstr .= " limit $p, $per_page ";
        $result = $this->db->query($sqlstr);
        return $result;
    }

    // button
    function save($nama, $jenis_kelamin, $agama, $telepon, $email, $alamat)
    {
        $data = array(
            'Nama'  => $nama,
            'Jenis_Kelamin'  => $jenis_kelamin,
            'Agama'  => $agama,
            'Telepon'  => $telepon,
            'Email'  => $email,
            'Alamat'  => $alamat
        );
        $this->db->insert('mahasiswa', $data);
    }

    // fungsi untuk menghapus data berdasarkan $nim
    function delete($no)
    {
        $this->db->where('No', $no);
        $this->db->delete('mahasiswa');
    }

    // fungsi untuk mendapatkan nim
    function get_no($no)
    {
        $query = $this->db->get_where('mahasiswa', array('No' => $no));
        return $query;
    }

    // fungsi untuk mengupdate data yg ada di dalam database
    function update($no, $nama, $jenis_kelamin, $agama, $telepon, $email, $alamat)
    {
        $data = array(
            'Nama' => $nama,
            'Jenis_Kelamin' => $jenis_kelamin,
            'Agama' => $agama,
            'Telepon' => $telepon,
            'Email' => $email,
            'Alamat' => $alamat

        );
        $this->db->where('No', $no);
        $this->db->update('mahasiswa', $data);
    }
}
