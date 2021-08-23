
<?php

class M_eskul extends CI_Model
{

    private $_table = 'eskul';

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
            namaeskul like '%" . $searchValue . "%') ";
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
                "namaeskul" => $record->namaeskul
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
            'namaeskul' => $post['namaeskul'],
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
            'namaeskul' => $post['namaeskul']
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

    function GetDataJadwal($id)
    {
        $query = $this->db->where('ideskul=', $id['id'])->get('jadwal')->result();
        return $query;
    }

    function GetJumlahAnggota($id)
    {
        $query = $this->db->where('ideskul=', $id['id'])->get('anggota')->num_rows();
        return $query;
    }

    function GetStatusAnggota($id)
    {
        $this->db->select('count(*) jml,status');
        $query = $this->db->where(array('ideskul' => $id['id'], 'nisn' => $id['nisn']))->get('anggota')->row();
        return $query;
    }

    function GabungEskul($post)
    {
        $this->db->trans_begin();

        $data = array(
            'nisn' => $post['nisn'],
            'jabatan' => 'Anggota',
            'ideskul' => $post['ideskul'],
            'status' => 'Belum Verifikasi'
        );

        $query = $this->db->insert('anggota', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }

        return $query;
    }

    function KeluarEskul($post)
    {


        $this->db->trans_begin();

        $this->db->where(array('nisn' => $post['nisn'], 'ideskul' => $post['ideskul']));
        $result = $this->db->delete('anggota');


        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }

        return $result;
    }
}
