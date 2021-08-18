<?php

class M_rseminar extends CI_Model
{
    private $_table = 'rseminar';

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
            $searchQuery = " (NSEMINAR like '%" . $searchValue . "%' or NPIAGAM like '%" . $searchValue . "%' or  PAN like '%" . $searchValue . "%' or  TEMPAT like '%" . $searchValue . "%'  or  TAKHIR like '%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->where('r.nip', $nip);

        $records = $this->db->get('rseminar r')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->where('r.nip', $nip);

        $records = $this->db->get('rseminar r')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('NSEMINAR ,
        TEMPAT ,
        PAN,
        TMULAI ,
        TAKHIR ,
        NPIAGAM ,
        TPIAGAM ,
        KEDUDUKAN,
        cont_id');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('rseminar r')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "NSEMINAR" => $record->NSEMINAR,
                "kedudukan" => $record->KEDUDUKAN,
                "tempat" => $record->TEMPAT,
                "pan" => $record->PAN,
                "tmulai" => $record->TMULAI,
                "takhir" => $record->TAKHIR,
                "NPIAGAM" => $record->NPIAGAM,
                "TPIAGAM" => $record->TPIAGAM,
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
        $query = $this->db->where('cont_id=', $id)->get('rseminar r');
        return $query;
    }

    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'NSEMINAR' => $post['rseminar_nseminar'],
            'TEMPAT' => $post['rseminar_tempat'],
            'PAN' => $post['rseminar_pan'],
            'TMULAI' => (!$post['rseminar_tmulai']) ? $post['rseminar_tmulai'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rseminar_tmulai']))),
            'TAKHIR' => (!$post['rseminar_takhir']) ? $post['rseminar_takhir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rseminar_takhir']))),
            'JAM' => $post['rseminar_jam'],
            'NPIAGAM' => $post['rseminar_npiagam'],
            'TPIAGAM' => (!$post['rseminar_tpiagam']) ? $post['rseminar_tpiagam'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rseminar_tpiagam']))),
            'KEDUDUKAN' => $post['rseminar_kedudukan'],
            'NPEJ' => $post['rseminar_npej']
        );


        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'NSEMINAR' => $post['rseminar_nseminar'],
            'TEMPAT' => $post['rseminar_tempat'],
            'PAN' => $post['rseminar_pan'],
            'TMULAI' => (!$post['rseminar_tmulai']) ? $post['rseminar_tmulai'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rseminar_tmulai']))),
            'TAKHIR' => (!$post['rseminar_takhir']) ? $post['rseminar_takhir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rseminar_takhir']))),
            'JAM' => $post['rseminar_jam'],
            'NPIAGAM' => $post['rseminar_npiagam'],
            'TPIAGAM' => (!$post['rseminar_tpiagam']) ? $post['rseminar_tpiagam'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rseminar_tpiagam']))),
            'KEDUDUKAN' => $post['rseminar_kedudukan'],
            'NPEJ' => $post['rseminar_npej']
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
