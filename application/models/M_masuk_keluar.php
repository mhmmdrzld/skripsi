<?php

class M_masuk_keluar extends CI_Model
{
    function get_data($nip)
    {
        $query = $this->db->where('nip=', $nip)->get('r_masuk');
        return $query;
    }
}
