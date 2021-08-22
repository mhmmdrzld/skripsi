<?php

class M_master extends CI_Model
{
    function GetDataEskul($npsn = NULL)
    {
        ($npsn ? $this->db->where('npsn=', $npsn) : '');
        $this->db->order_by('namaeskul', 'asc');
        $query = $this->db->get('eskul');
        return $query;
    }

    function GetDataKelas($npsn = NULL)
    {
        ($npsn ? $this->db->where('npsn=', $npsn) : '');
        $this->db->order_by('namakelas', 'asc');
        $query = $this->db->get('kelas');
        return $query;
    }

    function GetDataJurusan($npsn = NULL)
    {
        ($npsn ? $this->db->where('npsn=', $npsn) : '');
        $this->db->order_by('namajurusan', 'asc');
        $query = $this->db->get('jurusan');
        return $query;
    }
}
