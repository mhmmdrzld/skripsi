<?php

class M_rkursus extends CI_Model
{
    private $_table = 'rkursus';

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
            $searchQuery = " (r.NKURSUS like '%" . $searchValue . "%' or NPIAGAM like '%" . $searchValue . "%' or  PAN like '%" . $searchValue . "%' or  TEMPAT like '%" . $searchValue . "%'  or  TAKHIR like '%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->where('r.nip', $nip);
        $this->db->join('kursus k', 'r.KKURSUS = k.KKURSUS', 'left');
        $records = $this->db->get('rkursus r')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->where('r.nip', $nip);
        $this->db->join('kursus k', 'r.KKURSUS = k.KKURSUS', 'left');
        $records = $this->db->get('rkursus r')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('r.NKURSUS ,
        TEMPAT ,
        PAN,
        TMULAI ,
        TAKHIR ,
        NPIAGAM ,
        TPIAGAM ,
        k.NKURSUS nama,
        cont_id');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->where('r.nip', $nip);
        $this->db->join('kursus k', 'r.KKURSUS = k.KKURSUS', 'left');
        $records = $this->db->get('rkursus r')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "nama_kursus" => $record->NKURSUS,
                "nama_kursus2" => $record->nama,
                "tempat" => $record->TEMPAT,
                "pan" => $record->PAN,
                "tmulai" => $record->TMULAI,
                "takhir" => $record->TAKHIR,
                "nosertifikat" => $record->NPIAGAM,
                "tglsertifikat" => $record->TPIAGAM,
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
        $query = $this->db->where('cont_id=', $id)->get('rkursus r');
        return $query;
    }

    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'KKURSUS' => $post['rkursus_kkursus'],
            'TEMPAT' => $post['rkursus_tempat'],
            'PAN' => $post['rkursus_pan'],
            'TMULAI' => (!$post['rkursus_tmulai']) ? $post['rkursus_tmulai'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rkursus_tmulai']))),
            'TAKHIR' => (!$post['rkursus_takhir']) ? $post['rkursus_takhir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rkursus_takhir']))),
            'JAM' => $post['rkursus_jam'],
            'NPIAGAM' => $post['rkursus_npiagam'],
            'TPIAGAM' => (!$post['rkursus_tpiagam']) ? $post['rkursus_tpiagam'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rkursus_tpiagam']))),
            'NKURSUS' => $post['rkursus_nkursus'],
            'NPEJ' => $post['rkursus_npej']
        );


        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'KKURSUS' => $post['rkursus_kkursus'],
            'TEMPAT' => $post['rkursus_tempat'],
            'PAN' => $post['rkursus_pan'],
            'TMULAI' => (!$post['rkursus_tmulai']) ? $post['rkursus_tmulai'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rkursus_tmulai']))),
            'TAKHIR' => (!$post['rkursus_takhir']) ? $post['rkursus_takhir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rkursus_takhir']))),
            'JAM' => $post['rkursus_jam'],
            'NPIAGAM' => $post['rkursus_npiagam'],
            'TPIAGAM' => (!$post['rkursus_tpiagam']) ? $post['rkursus_tpiagam'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rkursus_tpiagam']))),
            'NKURSUS' => $post['rkursus_nkursus'],
            'NPEJ' => $post['rkursus_npej']
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
