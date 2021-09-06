
<?php

class M_berita extends CI_Model
{

    private $_table = 'berita';

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
            (id like '%" . $searchValue . "%' or 
            judulberita like '%" . $searchValue . "%' or
            tanggalberita like '%" . $searchValue . "%' or
            isiberita like '%" . $searchValue . "%' or
            ) ";
        }

        // if ($postData['jeniskegiatan']) {
        $search_arr[] = ' jeniskegiatan ="' . $postData['jeniskegiatan'] . '"';
        // }

        if ($postData['jeniskegiatan'] == 'Sekolah') {
            $search_arr[] = ' idkegiatan ="' . $postData['idkegiatan'] . '"';
        }

        if ($postData['jeniskegiatan'] == 'Ekstrakurikuler') {
            $search_arr[] = ' npsn ="' . $_SESSION['npsn'] . '"';
        }

        if (count($search_arr) > 0) {
            $searchQuery = implode(" and ", $search_arr);
        }


        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        if ($postData['jeniskegiatan'] == 'Ekstrakurikuler')
            $this->db->join('eskul', 'berita.idkegiatan=eskul.id', 'left');
        $records = $this->db->get($this->_table)->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        if ($postData['jeniskegiatan'] == 'Ekstrakurikuler')
            $this->db->join('eskul', 'berita.idkegiatan=eskul.id', 'left');
        $records = $this->db->get($this->_table)->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        if ($postData['jeniskegiatan'] == 'Ekstrakurikuler') {
            $select  = 'berita.*,eskul.namaeskul';
        } else {
            $select  = '*';
        }

        $this->db->select($select);
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        if ($postData['jeniskegiatan'] == 'Ekstrakurikuler')
            $this->db->join('eskul', 'berita.idkegiatan=eskul.id', 'left');
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get($this->_table)->result();

        $data = array();

        foreach ($records as $record) {
            if ($postData['jeniskegiatan'] == 'Ekstrakurikuler') {
                $data[] = array(
                    "id" => $record->id,
                    "judulberita" => $record->judulberita,
                    "tanggalberita" => $record->tanggalberita,
                    "namaeskul" => $record->namaeskul,
                    "idkegiatan" => $record->idkegiatan
                );
            } else {
                $data[] = array(
                    "id" => $record->id,
                    "judulberita" => $record->judulberita,
                    "tanggalberita" => $record->tanggalberita
                );
            }
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

        if ($post['ideskul']) {
            $data = array(
                'judulberita' => $post['judulberita'],
                'tanggalberita' => (!$post['tanggalberita']) ? $post['tanggalberita'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['tanggalberita']))),
                'isiberita' => $post['isiberita'],
                'idkegiatan' => $post['idkegiatan'],
                'jeniskegiatan' => $post['jeniskegiatan'],
                'idkegiatan' => $post['ideskul'],
                'npsn' => $_SESSION['npsn']

            );
        } else {
            $data = array(
                'judulberita' => $post['judulberita'],
                'tanggalberita' => (!$post['tanggalberita']) ? $post['tanggalberita'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['tanggalberita']))),
                'isiberita' => $post['isiberita'],
                'idkegiatan' => $post['idkegiatan'],
                'jeniskegiatan' => $post['jeniskegiatan'],
                'npsn' => $_SESSION['npsn']
            );
        }


        $query = $this->db->insert($this->_table, $data);

        if ($this->db->trans_status() == FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }

        return $query;
    }

    function GetDataByID($id)
    {
        $query = $this->db->where('id=', $id['id'])->get($this->_table);
        return $query;
    }

    function update($post = NULL)
    {
        $this->db->trans_begin();
        if ($post['ideskul']) {
            $data = array(
                'judulberita' => $post['judulberita'],
                'tanggalberita' => (!$post['tanggalberita']) ? $post['tanggalberita'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['tanggalberita']))),
                'isiberita' => $post['isiberita'],
                'idkegiatan' => $post['ideskul'],
            );
        } else {
            $data = array(
                'judulberita' => $post['judulberita'],
                'tanggalberita' => (!$post['tanggalberita']) ? $post['tanggalberita'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['tanggalberita']))),
                'isiberita' => $post['isiberita'],
            );
        }



        $this->db->where('id',  $post['id']);
        $query = $this->db->update($this->_table, $data);

        if ($this->db->trans_status() == FALSE) {
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


        if ($this->db->trans_status() == FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }

        return $result;
    }


    function CekStatusAnggota($post)
    {
        $this->db->select('count(*) stat');
        $query = $this->db->where(array('nisn' => $post['nisn'], 'jabatan !=' => 'Anggota', 'status' => 'Aktif'))->get('anggota')->row();
        return $query;
    }

    function CekEskulAnggota($post)
    {
        $this->db->select('eskul.id,eskul.namaeskul');
        $this->db->join('eskul', 'anggota.ideskul=eskul.id', 'left');
        $query = $this->db->where(array('nisn' => $post['nisn'], 'jabatan !=' => 'Anggota', 'status' => 'Aktif'))->get('anggota')->result();
        return $query;
    }

    function CekAksiAnggota($post)
    {
        $this->db->select('count(*) count');
        $query = $this->db->where(array('nisn' => $post['nisn'], 'jabatan !=' => 'Anggota', 'status' => 'Aktif', 'ideskul' => $post['ideskul']))->get('anggota')->row();
        return $query;
    }

    function GetDataByIDSiswa($id)
    {
        $this->db->select('berita.*,eskul.namaeskul');
        $this->db->join('eskul', 'berita.idkegiatan=eskul.id', 'left');
        $query = $this->db->where('berita.id=', $id['id'])->get($this->_table);
        return $query;
    }
}
