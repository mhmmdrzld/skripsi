<?php

class M_raorg extends CI_Model
{
    private $_table = 'raorg';
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
            $searchQuery = " (NORG like '%" . $searchValue . "%' 
            or JBORG like '%" . $searchValue . "%'
             or  NPIMP like '%" . $searchValue . "%' 
             or  TEMPAT like '%" . $searchValue . "%' 
              or  TMULAI like '%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('raorg r')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('raorg r')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('
        NORG,
        JBORG,
        JORG,
        NPIMP,
        TEMPAT,
        TMULAI,
        TAKHIR,
        cont_id');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('raorg r')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "NORG" => $record->NORG,
                "JBORG" => $record->JBORG,
                "JORG" => $record->JORG,
                "NPIMP" => $record->NPIMP,
                "TEMPAT" => $record->TEMPAT,
                "TMULAI" => $record->TMULAI,
                "TAKHIR" => $record->TAKHIR,
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
        $query = $this->db->where('cont_id=', $id)->get('raorg r');
        return $query;
    }

    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'JORG' => $post['raorg_jorg'],
            'NORG' => $post['raorg_norg'],
            'JBORG' => $post['raorg_Jborg'],
            'TMULAI' => (!$post['raorg_tmulai']) ? $post['raorg_tmulai'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['raorg_tmulai']))),
            'TAKHIR' => (!$post['raorg_takhir']) ? $post['raorg_takhir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['raorg_takhir']))),
            'NPIMP' => $post['raorg_npimp'],
            'TEMPAT' => $post['raorg_tempat']
        );


        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'JORG' => $post['raorg_jorg'],
            'NORG' => $post['raorg_norg'],
            'JBORG' => $post['raorg_Jborg'],
            'TMULAI' => (!$post['raorg_tmulai']) ? $post['raorg_tmulai'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['raorg_tmulai']))),
            'TAKHIR' => (!$post['raorg_takhir']) ? $post['raorg_takhir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['raorg_takhir']))),
            'NPIMP' => $post['raorg_npimp'],
            'TEMPAT' => $post['raorg_tempat']
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
