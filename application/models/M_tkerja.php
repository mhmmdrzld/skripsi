<?php

class M_tkerja extends CI_Model
{
    function get_data($nip)
    {
        $query = $this->db->where('nip=', $nip)->get('tkerja');
        return $query;
    }
}
