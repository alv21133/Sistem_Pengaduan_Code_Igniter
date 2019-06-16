<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class data_model extends CI_Model {

    function user($key , $unix)
{
   
      return $this->db->query("select * from siswa where nim='$key' && password='$unix'");    
    
}

function lapor($t ,$r, $d ,$n ,$f)
{
    return $this->db->query("insert into data_laporan (Tanggal,Ruang,diskripsi,nim,file_pendukung) values ('$t','$r','$d','$n','$f')");
    
}


public function data_rusak()
{
    return $this->db->get('data_laporan');
    
}

public function del_laporan($key)
{
           $this->db->where('id', $key);
    return $this->db->delete('data_laporan');
    
}

}

/* End of file data_model.php */



?>