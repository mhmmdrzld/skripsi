<?php

class M_pkerja extends CI_Model
{
    function get_data($nip)
    {
        $query = $this->db->where('nip=', $nip)->get('pkerja');
        return $query;
    }
}
