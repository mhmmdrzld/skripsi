<?php

class M_ibukand extends CI_Model
{
    private $_table = 'ribukand';


    function get_data($nip)
    {
        $query = $this->db->where('nip=', $nip)->get($this->_table);
        return $query;
    }


    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'NIBU' => $post['ribukand_nibu'],
            'TLAHIR' => $post['ribukand_tlahir'],
            'TGLLAHIR' => (!$post['ribukand_tgllahir']) ? $post['ribukand_tgllahir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['ribukand_tgllahir']))),
            'KKERJA' => $post['ribukand_kkerja'],
            'ALJALAN' => $post['ribukand_aljalan'],
            'ALRT' => $post['ribukand_alrt'],
            'ALRW' => $post['ribukand_alrw'],
            'NOTELP' => $post['ribukand_notelp'],
            'WIL' => $post['ribukand_wil'],
            'KPOS' => $post['ribukand_kpos']
        );

        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'NIBU' => $post['ribukand_nibu'],
            'TLAHIR' => $post['ribukand_tlahir'],
            'TGLLAHIR' => (!$post['ribukand_tgllahir']) ? $post['ribukand_tgllahir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['ribukand_tgllahir']))),
            'KKERJA' => $post['ribukand_kkerja'],
            'ALJALAN' => $post['ribukand_aljalan'],
            'ALRT' => $post['ribukand_alrt'],
            'ALRW' => $post['ribukand_alrw'],
            'NOTELP' => $post['ribukand_notelp'],
            'WIL' => $post['ribukand_wil'],
            'KPOS' => $post['ribukand_kpos']
        );

        $this->db->where('nip',  $post['nip']);
        $result = $this->db->update($this->_table, $data);
        return $result;
    }
}
