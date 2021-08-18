<?php

class M_rkaryatulis extends CI_Model
{
    private $_table = 'rkaryatulis';

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
            $searchQuery = " (TJUDUL like '%" . $searchValue . "%' or TEMPAT like '%" . $searchValue . "%' or  TANGGAL like '%" . $searchValue . "%' or  JENIS like '%" . $searchValue . "%'  or  KBIDANG like '%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->where('r.nip', $nip);
        $this->db->join('kartulbid k', 'r.KBIDANG=k.KBIDANG', 'left');
        $records = $this->db->get('rkaryatulis r')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->where('r.nip', $nip);
        $this->db->join('kartulbid k', 'r.KBIDANG=k.KBIDANG', 'left');
        $records = $this->db->get('rkaryatulis r')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('
        TJUDUL,
        TEMPAT,
        TANGGAL,
        JENIS,
        NBIDANG,
        cont_id');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->join('kartulbid k', 'r.KBIDANG=k.KBIDANG', 'left');
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('rkaryatulis r')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "tjudul" => $record->TJUDUL,
                "tempat" => $record->TEMPAT,
                "tanggal" => $record->TANGGAL,
                "jenis" => $record->JENIS,
                "nbidang" => $record->NBIDANG,
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
        $query = $this->db->where('cont_id=', $id)->get('rkaryatulis r');
        return $query;
    }

    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'TJUDUL' => $post['rkaryatulis_judul'],
            'TEMPAT' => $post['rkaryatulis_tempat'],
            'TANGGAL' => (!$post['rkaryatulis_tanggal']) ? $post['rkaryatulis_tanggal'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rkaryatulis_tanggal']))),
            'JENIS' => $post['rkaryatulis_jenis'],
            'KBIDANG' => $post['rkaryatulis_kbidanglist']
        );


        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'TJUDUL' => $post['rkaryatulis_judul'],
            'TEMPAT' => $post['rkaryatulis_tempat'],
            'TANGGAL' => (!$post['rkaryatulis_tanggal']) ? $post['rkaryatulis_tanggal'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rkaryatulis_tanggal']))),
            'JENIS' => $post['rkaryatulis_jenis'],
            'KBIDANG' => $post['rkaryatulis_kbidanglist']
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
