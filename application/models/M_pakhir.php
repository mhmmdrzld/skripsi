<?php

class M_pakhir extends CI_Model
{
    function get_data($nip)
    {
        $query = $this->db->where('nip=', $nip)->get('pakhir');
        return $query;
    }
}
