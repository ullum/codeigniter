<?php
    class Siswa_model extends CI_Model{
        function get_siswa()
        {
            // $result = $this->db->get('siswa');
            $result = $this->db->query('select * from siswa order by nama DESC');
            return $result;
        }
        public function getsiswalimit($n=1){
            $sqlstr = "select * from siswa LIMIT $n";
            $result = $this->db->query($sqlstr);
            return $result;
        }
        function getjumlahdata(){
            $jumlahdata     =   $this->db->count_all("siswa");
            return $jumlahdata;
        }
       
        function getsiswaperpage($p=0, $per_page=5){
            $sqlstr = "select * from siswa ";
            $sqlstr.=" limit $p, $per_page ";
            $result = $this->db->query($sqlstr);
            return $result;
        }
    }