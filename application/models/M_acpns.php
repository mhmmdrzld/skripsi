<?php

class M_acpns extends CI_Model
{
    function get_data($nip)
    {
        $query = $this->db->where('nip=', $nip)->get('acpns');
        return $query;
    }
}
