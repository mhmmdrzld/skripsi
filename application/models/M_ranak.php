<?php

class M_ranak extends CI_Model
{
    private $_table = 'ranak';

    function get_data($nip)
    {
        $query = $this->db->where('nip=', $nip)->get('ranak');
        return $query;
    }

    function get_anak($postData = null)
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
            $searchQuery = " (NANAK like '%" . $searchValue . "%' or TLAHIR like '%" . $searchValue . "%' or  ANAKKEN like '%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->where('nip', $nip);
        $records = $this->db->get('ranak')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->where('nip', $nip);
        $records = $this->db->get('ranak')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('*');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->where('nip', $nip);
        $records = $this->db->get('ranak')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "nanak" => $record->NANAK,
                "tlahir" => $record->TLAHIR,
                "tgllahir" => $record->TGLLAHIR,
                "anakken" => $record->ANAKKEN,
                "kjkel" => $record->KJKEL,
                "keluarga" => $record->KELUARGA,
                "tunj" => $record->TUNJ,
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

    function get_anak_byID($id)
    {
        $query = $this->db->where('cont_id=', $id)->get('ranak');
        return $query;
    }

    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'NANAK' => $post['ranak_nanak'],
            'TLAHIR' => $post['ranak_tlahir'],
            'TGLLAHIR' => (!$post['ranak_tgllahir']) ? $post['ranak_tgllahir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['ranak_tgllahir']))),
            'KJKEL' => $post['ranak_kjkel'],
            'KELUARGA' => $post['ranak_keluarga'],
            'TUNJ' => $post['ranak_tunj'],
            // 'TIJASAH' => $post['rsistri_kotlah'],
            'KKERJA' => $post['ranak_kkerja'],
            'ANAKKEN' => $post['ranak_anake'],
            'TUNJRP' => $post['ranak_tunjrp'],
            'PENDIKAKHIR' => $post['ranak_pendikakhirlist'],
            'NAKTE' => $post['ranak_nakte'],
            'ALAMAT' => $post['ranak_alamat']
            // 'PPK' => $post['rakand_kpos']
        );

        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'NANAK' => $post['ranak_nanak'],
            'TLAHIR' => $post['ranak_tlahir'],
            'TGLLAHIR' => (!$post['ranak_tgllahir']) ? $post['ranak_tgllahir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['ranak_tgllahir']))),
            'KJKEL' => $post['ranak_kjkel'],
            'KELUARGA' => $post['ranak_keluarga'],
            'TUNJ' => $post['ranak_tunj'],
            // 'TIJASAH' => $post['rsistri_kotlah'],
            'KKERJA' => $post['ranak_kkerja'],
            'ANAKKEN' => $post['ranak_anake'],
            'TUNJRP' => $post['ranak_tunjrp'],
            'PENDIKAKHIR' => $post['ranak_pendikakhirlist'],
            'NAKTE' => $post['ranak_nakte'],
            'ALAMAT' => $post['ranak_alamat']
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
