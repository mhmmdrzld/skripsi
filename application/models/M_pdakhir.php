<?php

class M_pdakhir extends CI_Model
{
    function get_data($nip)
    {
        $query = $this->db->where('nip=', $nip)->get('pdakhir');
        return $query;
    }
}
