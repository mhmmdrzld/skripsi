<?php

class M_jakhir extends CI_Model
{
    function get_data($nip)
    {
        $this->db->select('j.*,u.NUNKER NUNKER2TEXT,v.NUNKER NUNKER3TEXT,w.NUNKER NUNKER4TEXT,x.NUNKER NUNKER5TEXT');
        $this->db->join('unkerja u', 'concat(j.KUNKER2,"000000") = u.KUNKER', 'left');
        $this->db->join('unkerja v', 'concat(j.KUNKER2,j.KUNKER3,"0000") = v.KUNKER', 'left');
        $this->db->join('unkerja w', 'concat(j.KUNKER2,j.KUNKER3,KUNKER4,"00") = w.KUNKER', 'left');
        $this->db->join('unkerja x', 'concat(j.KUNKER2,j.KUNKER3,KUNKER4,KUNKER5) = x.KUNKER', 'left');
        $query = $this->db->where('nip=', $nip)->get('jakhir j');
        return $query;
    }
}
