<?php

class M_pensiun extends CI_Model
{
    function get_data($nip)
    {
        $query = $this->db->where('nip=', $nip)->get('m_pensiun');
        return $query;
    }
}
