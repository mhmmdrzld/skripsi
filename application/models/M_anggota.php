
<?php

class M_anggota extends CI_Model
{

    private $_table = 'anggota';

    function GetData($postData = NULL)
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
            (nisn like '%" . $searchValue . "%' or 
            namasiswa like '%" . $searchValue . "%' or
            jabatan like '%" . $searchValue . "%' or
            namaeskul like '%" . $searchValue . "%' or
            status like '%" . $searchValue . "%'
            ) ";
        }

        // if ($postData['npsn']) {
        //     $search_arr[] = " anggota.npsn = '" . $postData['npsn'] . "'";
        // }

        if (count($search_arr) > 0) {
            $searchQuery = implode(" and ", $search_arr);
        }


        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->join('eskul', 'anggota.ideskul=eskul.id', 'left');
        $this->db->join('siswa', 'anggota.nisn=siswa.nisn', 'left');
        $records = $this->db->get($this->_table)->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->join('eskul', 'anggota.ideskul=eskul.id', 'left');
        $this->db->join('siswa', 'anggota.nisn=siswa.nisn', 'left');
        $records = $this->db->get($this->_table)->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('anggota.*,eskul.namaeskul,siswa.namasiswa');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->join('eskul', 'anggota.ideskul=eskul.id', 'left');
        $this->db->join('siswa', 'anggota.nisn=siswa.nisn', 'left');
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get($this->_table)->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "nisn" => $record->nisn,
                "namasiswa" => $record->namasiswa,
                "jabatan" => $record->jabatan,
                "namaeskul" => $record->namaeskul,
                "status" => $record->status,
                "id" => $record->id,
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

        $data_siswa = array(
            'nisn' => $post['nisn'],
            'jabatan' => $post['jabatan'],
            'ideskul' => $post['ideskul'],
            'status' => $post['status']
        );

        $query =  $this->db->insert($this->_table, $data_siswa);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }

        return $query;
    }

    function GetDataByID($id)
    {
        // $this->db->select('anggota.*,siswa.namasiswa');
        // $this->db->join('siswa', 'anggota.nisn=siswa.nisn', 'left');
        $query = $this->db->where('id=', $id)->get($this->_table);
        return $query;
    }

    function update($post = NULL)
    {

        $this->db->trans_begin();


        $data_siswa = array(
            'nisn' => $post['nisn'],
            'jabatan' => $post['jabatan'],
            'ideskul' => $post['ideskul'],
            'status' => $post['status']
        );

        $this->db->where('id',  $post['id']);
        $this->db->update($this->_table, $data_siswa);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }
    }

    function delete($id = NULL)
    {


        $this->db->trans_begin();


        $this->db->where('id', $id['id']);
        $result = $this->db->delete($this->_table);



        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }

        return $result;
    }
}
