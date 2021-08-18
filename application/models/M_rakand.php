<?php

class M_rakand extends CI_Model
{
    private $_table = 'rakand';

    function get_data($nip)
    {
        $query = $this->db->where('nip=', $nip)->get($this->_table);
        return $query;
    }

    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'NAYAH' => $post['rakand_nayah'],
            'TLAHIR' => $post['rakand_tlahir'],
            'TGLLAHIR' => (!$post['rakand_tgllahir']) ? $post['rakand_tgllahir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rakand_tgllahir']))),
            'KKERJA' => $post['rakand_kkerja'],
            'ALJALAN' => $post['rakand_aljalan'],
            'ALRT' => $post['rakand_alrt'],
            'ALRW' => $post['rakand_alrw'],
            'NOTELP' => $post['rakand_notelp'],
            'WIL' => $post['rakand_wil'],
            'KPOS' => $post['rakand_kpos']
        );
        
        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'NAYAH' => $post['rakand_nayah'],
            'TLAHIR' => $post['rakand_tlahir'],
            'TGLLAHIR' => (!$post['rakand_tgllahir']) ? $post['rakand_tgllahir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rakand_tgllahir']))),
            'KKERJA' => $post['rakand_kkerja'],
            'ALJALAN' => $post['rakand_aljalan'],
            'ALRT' => $post['rakand_alrt'],
            'ALRW' => $post['rakand_alrw'],
            'NOTELP' => $post['rakand_notelp'],
            'WIL' => $post['rakand_wil'],
            'KPOS' => $post['rakand_kpos']
        );

        $this->db->where('nip',  $post['nip']);
        $result = $this->db->update($this->_table, $data);
        return $result;
    }
}
