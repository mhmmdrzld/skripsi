<?php

class M_rpenyaji extends CI_Model
{
    private $_table = 'rpenyaji';

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
            $searchQuery = " (NAMA_SEMINAR like '%" . $searchValue . "%' or TEMPAT like '%" . $searchValue . "%' or  TANGGAL like '%" . $searchValue . "%' or  JUDUL_SEMINAR like '%" . $searchValue . "%'   ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('rpenyaji r')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('rpenyaji r')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('*');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('rpenyaji r')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "nama_seminar" => $record->NAMA_SEMINAR,
                "tempat" => $record->TEMPAT,
                "tanggal" => $record->TANGGAL,
                "judul_seminar" => $record->JUDUL_SEMINAR,
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
        $query = $this->db->where('cont_id=', $id)->get('rpenyaji r');
        return $query;
    }

    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'NAMA_SEMINAR' => $post['rpenyaji_nama_seminar'],
            'TEMPAT' => $post['rpenyaji_tempat'],
            'JUDUL_SEMINAR' => $post['rpenyaji_judul_seminar'],
            'TANGGAL' => (!$post['rpenyaji_tanggal']) ? $post['rpenyaji_tanggal'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rpenyaji_tanggal'])))
        );


        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'NAMA_SEMINAR' => $post['rpenyaji_nama_seminar'],
            'TEMPAT' => $post['rpenyaji_tempat'],
            'JUDUL_SEMINAR' => $post['rpenyaji_judul_seminar'],
            'TANGGAL' => (!$post['rpenyaji_tanggal']) ? $post['rpenyaji_tanggal'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rpenyaji_tanggal'])))
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
