<?php

class M_rtatar extends CI_Model
{
    private $_table = 'rtatar';

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
            $searchQuery = " (NTATAR like '%" . $searchValue . "%' or TEMPAT like '%" . $searchValue . "%' or  PAN like '%" . $searchValue . "%' or  TMULAI like '%" . $searchValue . "%'  or  TAKHIR like '%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->where('r.nip', $nip);
        $this->db->join('pejabat p', 'r.KPEJ = p.KPEJ', 'left');
        $records = $this->db->get('rtatar r')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->where('r.nip', $nip);
        $this->db->join('pejabat p', 'r.KPEJ = p.KPEJ', 'left');
        $records = $this->db->get('rtatar r')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('
        NTATAR,
        TEMPAT,
        PAN,
        TMULAI ,
        TAKHIR ,
        NPIAGAM ,
        TPIAGAM,
        p.NPEJ,
        cont_id');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->join('pejabat p', 'r.KPEJ = p.KPEJ', 'left');
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('rtatar r')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "ntatar" => $record->NTATAR,
                "tempat" => $record->TEMPAT,
                "pan" => $record->PAN,
                "tmulai" => $record->TMULAI,
                "takhir" => $record->TAKHIR,
                "npiagam" => $record->NPIAGAM,
                "tpiagam" => $record->TPIAGAM,
                "npej" => $record->NPEJ,
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
        $query = $this->db->where('cont_id=', $id)->get('rtatar r');
        return $query;
    }

    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'NTATAR' => $post['rtatar_ntatar'],
            'TEMPAT' => $post['rtatar_tempat'],
            'PAN' => $post['rtatar_pan'],
            // 'ANGKATAN' => $post['rtatar_angkatan'],
            'TMULAI' => (!$post['rtatar_tmulai']) ? $post['rtatar_tmulai'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rtatar_tmulai']))),
            'TAKHIR' => (!$post['rtatar_takhir']) ? $post['rtatar_takhir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rtatar_takhir']))),
            'JAM' => $post['rtatar_jam'],
            'NPIAGAM' => $post['rtatar_npiagam'],
            'TPIAGAM' => (!$post['rtatar_tpiagam']) ? $post['rtatar_tpiagam'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rtatar_tpiagam']))),
            'KPEJ' => $post['rtatar_npej']
        );


        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'NTATAR' => $post['rtatar_ntatar'],
            'TEMPAT' => $post['rtatar_tempat'],
            'PAN' => $post['rtatar_pan'],
            // 'ANGKATAN' => $post['rtatar_angkatan'],
            'TMULAI' => (!$post['rtatar_tmulai']) ? $post['rtatar_tmulai'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rtatar_tmulai']))),
            'TAKHIR' => (!$post['rtatar_takhir']) ? $post['rtatar_takhir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rtatar_takhir']))),
            'JAM' => $post['rtatar_jam'],
            'NPIAGAM' => $post['rtatar_npiagam'],
            'TPIAGAM' => (!$post['rtatar_tpiagam']) ? $post['rtatar_tpiagam'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rtatar_tpiagam']))),
            'KPEJ' => $post['rtatar_npej']
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
