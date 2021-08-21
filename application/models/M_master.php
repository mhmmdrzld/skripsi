
<?php

class M_master extends CI_Model
{
    function GetDataEskul($npsn)
    {
        ($npsn ? $this->db->where('npsn=', $npsn) : '');
        $this->db->order_by('namaeskul', 'asc');
        $query = $this->db->get('eskul');
        return $query;
    }
}
