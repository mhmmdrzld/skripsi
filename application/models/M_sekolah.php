
<?php

class M_sekolah extends CI_Model
{

    private $_table = 'sekolah';

    function GetSekolah($postData = NULL, $npsn = NULL)
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
            (namasekolah like '%" . $searchValue . "%' or 
            npsn like '%" . $searchValue . "%' 
            or  status like '%" . $searchValue . "%' ) ";
        }

        if ($npsn) {
            $search_arr[] = "  npsn = '$npsn'";
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
                "npsn" => $record->npsn,
                "namasekolah" => $record->namasekolah,
                "status" => $record->status
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

        $config = array(
            'upload_path' => './file/',
            'allowed_types' => 'jpg|png|jpeg|pdf'

        );

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('bukti')) {
        } else {
            $result = $this->upload->data();
            $file_dokumen = $result['file_name'];
        }

        $data_akun = array(
            'username' => $post['npsn'],
            'password' => md5($post['password']),
            'level' => 'Operator'
        );

        $query = $this->db->insert('akun', $data_akun);
        if ($query) {
            $idakun = $this->db->insert_id();

            $data_sekolah = array(
                'npsn' => $post['npsn'],
                'namasekolah' => $post['namasekolah'],
                'alamatsekolah' => $post['alamatsekolah'],
                'akreditasi' => $post['akreditasi'],
                'email' => $post['email'],
                'status' => $post['status'],
                'idakun' => $idakun,
                'buktiakreditasi' => $file_dokumen
            );

            $this->db->insert($this->_table, $data_sekolah);
        }

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }
    }

    function GetSekolahByID($id)
    {
        $this->db->join('akun a', 's.idakun=a.id', 'left');
        $query = $this->db->where('s.npsn=', $id)->get('sekolah s');
        return $query;
    }

    function update($post = NULL)
    {
        $this->db->trans_begin();

        $config = array(
            'upload_path' => './file/',
            'allowed_types' => 'jpg|png|jpeg|pdf'

        );

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('bukti')) {
            $file_dokumen = $post['bukti_lama'];
        } else {
            $result = $this->upload->data();
            $file_dokumen = $result['file_name'];
        }


        $data_akun = array(
            'password' => md5($post['password']),
        );

        if ($post['password'] !== $post['password_lama']) {
            $this->db->where('id',  $post['idakun']);
            $this->db->update('akun', $data_akun);
        }

        $data_sekolah = array(
            'npsn' => $post['npsn'],
            'namasekolah' => $post['namasekolah'],
            'alamatsekolah' => $post['alamatsekolah'],
            'akreditasi' => $post['akreditasi'],
            'email' => $post['email'],
            'status' => $post['status'],
            'buktiakreditasi' => $file_dokumen
        );

        $this->db->where('npsn',  $post['npsn']);
        $this->db->update($this->_table, $data_sekolah);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }
    }

    function delete($id = NULL)
    {
        $this->db->where('npsn', $id);
        $result =  $this->db->update($this->_table, array('status' => 'Tidak Aktif'));
        return $result;
    }

    function CetakSekolah($id = NULL)
    {
        if ($id)
            $this->db->where('npsn', $id);


        $result = $this->db->get($this->_table)->result();
        return $result;
    }
}
