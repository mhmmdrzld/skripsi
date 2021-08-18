<?php

class M_rsistri extends CI_Model
{

    private $_table = 'rsistri';
    function get_data($postData = null)
    {
        $response = array();

        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value
        $nip = $postData['nip'];
        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (NISUA like '%" . $searchValue . "%' or KOTLAH like '%" . $searchValue . "%' or  NIPPAS like '%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->where('nip', $nip);
        $this->db->join('kerja', 'kerja.KKERJA = rsistri.KDKERJA', 'left');
        $this->db->join('tpu', 'tpu.KJUR = concat(rsistri.PENDAKHIR,"00000")', 'left');
        $records = $this->db->get('rsistri')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->where('nip', $nip);
        $this->db->join('kerja', 'kerja.KKERJA = rsistri.KDKERJA', 'left');
        $this->db->join('tpu', 'tpu.KJUR = concat(rsistri.PENDAKHIR,"00000")', 'left');
        $records = $this->db->get('rsistri')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('*');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->join('kerja', 'kerja.KKERJA = rsistri.KDKERJA', 'left');
        $this->db->join('tpu', 'tpu.KJUR = concat(rsistri.PENDAKHIR,"00000")', 'left');
        $this->db->where('nip', $nip);
        $records = $this->db->get('rsistri')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "nisua" => $record->NISUA,
                "kotlah" => $record->KOTLAH,
                "tgllahir" => $record->TGLLAHIR,
                "nkerja" => $record->NKERJA,
                "stapek" => $record->STAPEK,
                "nippas" => $record->NIPPAS,
                "tkawin" => $record->TKAWIN,
                "njur" => $record->NJUR,
                "id" => $record->cont_id
            );
        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response;
    }

    function get_data_byID($id)
    {
        $query = $this->db->where('cont_id=', $id)->get($this->_table);
        return $query;
    }

    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'NISUA' => $post['rsistri_nisua'],
            'KDKERJA' => $post['rsistri_kdkerja'],
            'STAPEK' => $post['rsistri_stapek'],
            'NIPPAS' => $post['rsistri_nippas'],
            // 'UNTKERPER' => $post['UNTKERPER'],
            'KOTLAH' => $post['rsistri_kotlah'],
            'TGLLAHIR' => (!$post['rsistri_tgllahir']) ? $post['rsistri_tgllahir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rsistri_tgllahir']))),
            // 'TIJASAH' => $post['rakand_notelp'],
            'TKAWIN' => (!$post['rsistri_tkawin']) ? $post['rsistri_tkawin'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rsistri_tkawin']))),
            'STUNJ' => $post['rsistri_stunj'],
            // 'ISAKHIR' => $post['rakand_wil'],
            'PENDAKHIR' => $post['rsistri_pendakhir'],
            'STSNIKAH' => $post['rsistri_stsnikah'],
            'ALAMAT' => $post['rsistri_alamat']
            // 'PPK' => $post['rakand_kpos']
        );


        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'NISUA' => $post['rsistri_nisua'],
            'KDKERJA' => $post['rsistri_kdkerja'],
            'STAPEK' => $post['rsistri_stapek'],
            'NIPPAS' => $post['rsistri_nippas'],
            'KOTLAH' => $post['rsistri_kotlah'],
            'TGLLAHIR' => (!$post['rsistri_tgllahir']) ? $post['rsistri_tgllahir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rsistri_tgllahir']))),
            'TKAWIN' => (!$post['rsistri_tkawin']) ? $post['rsistri_tkawin'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rsistri_tkawin']))),
            'STUNJ' => $post['rsistri_stunj'],
            'PENDAKHIR' => $post['rsistri_pendakhir'],
            'STSNIKAH' => $post['rsistri_stsnikah'],
            'ALAMAT' => $post['rsistri_alamat']
        );

        $this->db->where('cont_id',  $post['id']);
        $result = $this->db->update($this->_table, $data);
        return $result;
    }

    function delete($id = NULL)
    {
        $this->db->where('cont_id', $id);
        $result =  $this->db->delete($this->_table);
        return $result;
    }
}
