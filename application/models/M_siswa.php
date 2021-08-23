
<?php

class M_siswa extends CI_Model
{

    private $_table = 'siswa';

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
            (nisn like '%" . $searchValue . "%' or 
            namasiswa like '%" . $searchValue . "%' or
            tempatlahir like '%" . $searchValue . "%' or
            tanggallahir like '%" . $searchValue . "%' or
            alamat like '%" . $searchValue . "%' or
            jeniskelamin like '%" . $searchValue . "%' or
            namakelas like '%" . $searchValue . "%' or
            namajurusan like '%" . $searchValue . "%' or
            ) ";
        }

        if ($npsn) {
            $search_arr[] = " siswa.npsn = '$npsn'";
        }

        if (count($search_arr) > 0) {
            $searchQuery = implode(" and ", $search_arr);
        }


        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->join('kelas', 'siswa.idkelas=kelas.id', 'left');
        $this->db->join('jurusan', 'siswa.idjurusan=kelas.id', 'left');
        $records = $this->db->get($this->_table)->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->join('kelas', 'siswa.idkelas=kelas.id', 'left');
        $this->db->join('jurusan', 'siswa.idjurusan=kelas.id', 'left');
        $records = $this->db->get($this->_table)->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('siswa.*,kelas.namakelas,jurusan.namajurusan');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->join('kelas', 'siswa.idkelas=kelas.id', 'left');
        $this->db->join('jurusan', 'siswa.idjurusan=jurusan.id', 'left');
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get($this->_table)->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "nisn" => $record->nisn,
                "namasiswa" => $record->namasiswa,
                "tempatlahir" => $record->tempatlahir,
                "tanggallahir" => $record->tanggallahir,
                "alamat" => $record->alamat,
                "jeniskelamin" => $record->jeniskelamin,
                "namakelas" => $record->namakelas,
                "namajurusan" => $record->namajurusan,
                "idakun" => $record->idakun
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

        $data_akun = array(
            'username' => $post['nisn'],
            'password' => md5($post['password']),
            'level' => 'Siswa'
        );
        $query = $this->db->insert('akun', $data_akun);

        if ($query) {
            $idakun = $this->db->insert_id();

            $data_siswa = array(
                'nisn' => $post['nisn'],
                'namasiswa' => $post['namasiswa'],
                'tempatlahir' => $post['tempatlahir'],
                'tanggallahir' => (!$post['tanggallahir']) ? $post['tanggallahir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['tanggallahir']))),
                'alamat' => $post['alamat'],
                'jeniskelamin' => $post['jeniskelamin'],
                'idkelas' => $post['idkelas'],
                'idjurusan' => $post['idjurusan'],
                'npsn' => $_SESSION['npsn'],
                'idakun' => $idakun
            );

            $this->db->insert($this->_table, $data_siswa);
        }

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }

        return $query;
    }

    function GetDataByID($id)
    {
        $this->db->select('siswa.*,akun.password');
        $this->db->join('akun', 'siswa.idakun=akun.id', 'left');
        $query = $this->db->where('nisn=', $id)->get($this->_table);
        return $query;
    }

    function update($post = NULL)
    {

        $this->db->trans_begin();

        $data_akun = array(
            'password' => md5($post['password']),
        );

        if ($post['password'] !== $post['password_lama']) {
            $this->db->where('id',  $post['id']);
            $this->db->update('akun', $data_akun);
        }

        $data_siswa = array(
            'namasiswa' => $post['namasiswa'],
            'tempatlahir' => $post['tempatlahir'],
            'tanggallahir' => (!$post['tanggallahir']) ? $post['tanggallahir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['tanggallahir']))),
            'alamat' => $post['alamat'],
            'jeniskelamin' => $post['jeniskelamin'],
            'idkelas' => $post['idkelas'],
            'idjurusan' => $post['idjurusan']
        );

        $this->db->where('nisn',  $post['nisn']);
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

        $this->db->where('id', $id['idakun']);
        $result = $this->db->delete('akun');

        if ($result) {
            $this->db->where('nisn', $id['id']);
            $this->db->delete($this->_table);
        }



        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }

        return $result;
    }

    function Cetak($id = NULL)
    {
        // if ($id)
        //     $this->db->where('npsn', $id);
        $this->db->select('siswa.*,jurusan.namajurusan,kelas.namakelas');
        $this->db->join('kelas', 'siswa.idkelas= kelas.id', 'left');
        $this->db->join('jurusan', 'siswa.idjurusan= jurusan.id', 'left');
        $result = $this->db->get($this->_table)->result();
        return $result;
    }
}
