<?php
class Siswa_model extends CI_Model
{
    function get_siswa()
    {
        // $result = $this->db->get('siswa');
        $result = $this->db->query('select * from siswa order by nama DESC');
        return $result;
    }
    public function getsiswalimit($n = 1)
    {
        $sqlstr = "select * from siswa LIMIT $n";
        $result = $this->db->query($sqlstr);
        return $result;
    }
    function getjumlahdata()
    {
        $jumlahdata     =   $this->db->count_all("siswa");
        return $jumlahdata;
    }

    function getsiswaperpage($p = 0, $per_page = 5)
    {
        $sqlstr = "select * from siswa ";
        $sqlstr .= " limit $p, $per_page ";
        $result = $this->db->query($sqlstr);
        return $result;
    }

    function save($nama, $kota)
    {
        $data = array(
            'nama'  => $nama,
            'kota'  => $kota
        );
        $this->db->insert('siswa', $data);
    }

    // fungsi untuk menghapus data berdasarkan $nim
    function delete($nim)
    {
        $this->db->where('nim', $nim);
        $this->db->delete('siswa');
    }

    // fungsi untuk mendapatkan nim
    function get_nim($nim)
    {
        $query = $this->db->get_where('siswa', array('nim' => $nim));
        return $query;
    }

    // fungsi untuk mengupdate data yg ada di dalam database
    function update($nim, $nama, $kota)
    {
        $data = array(
            'nama' => $nama,
            'kota' => $kota
        );
        $this->db->where('nim', $nim);
        $this->db->update('siswa', $data);
    }
}
