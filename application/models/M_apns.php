<?php

class M_apns extends CI_Model
{
    function get_data($nip)
    {
        $query = $this->db->where('nip=', $nip)->get('apns');
        return $query;
    }
}
