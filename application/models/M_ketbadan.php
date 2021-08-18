<?php

class M_ketbadan extends CI_Model
{
    function get_data($nip)
    {
        $query = $this->db->where('nip=', $nip)->get('ketbadan');
        return $query;
    }
}
