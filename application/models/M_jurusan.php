
<?php

class M_Jurusan extends CI_Model
{

    private $_table = 'jurusan';

    function GetData($postData = NULL, $npsn = NULL)
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

        ## Search 
        $search_arr = array();
        $searchQuery = "";

        if ($searchValue != '') {
            $search_arr[] = " 
            (id like '%" . $searchValue . "%' or 
            namajurusan like '%" . $searchValue . "%') ";
        }

        if ($npsn) {
            $search_arr[] = " npsn = '$npsn'";
        }

        if (count($search_arr) > 0) {
            $searchQuery = implode(" and ", $search_arr);
        }


        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get($this->_table)->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get($this->_table)->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('*');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get($this->_table)->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "id" => $record->id,
                "namajurusan" => $record->namajurusan
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

    function insert($post = NULL)
    {
        $this->db->trans_begin();

        $data = array(
            'namajurusan' => $post['namajurusan'],
            'npsn' => $_SESSION['npsn']
        );

        $query = $this->db->insert($this->_table, $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }

        return $query;
    }

    function GetDataByID($id)
    {
        $query = $this->db->where('id=', $id)->get($this->_table);
        return $query;
    }

    function update($post = NULL)
    {
        $this->db->trans_begin();

        $data = array(
            'namajurusan' => $post['namajurusan']
        );


        $this->db->where('id',  $post['id']);
        $query = $this->db->update($this->_table, $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }

        return $query;
    }

    function delete($id = NULL)
    {


        $this->db->trans_begin();

        $this->db->where('id', $id);
        $result = $this->db->delete($this->_table);


        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }

        return $result;
    }
}
