<?php

class M_rdikstr extends CI_Model
{
    private $_table = 'rdikstr';

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
            $searchQuery = " (r.NDIKSTR like '%" . $searchValue . "%' or TEMPAT like '%" . $searchValue . "%' or  PAN like '%" . $searchValue . "%' or  TMULAI like '%" . $searchValue . "%'  or  TAKHIR like '%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->where('r.nip', $nip);
        $this->db->join('dikstr d', 'r.KDIKSTR = d.KDIKSTR', 'left');
        $this->db->join('pejabat p', 'r.NPEJ = p.KPEJ', 'left');
        $records = $this->db->get('rdikstr r')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->where('r.nip', $nip);
        $this->db->join('dikstr d', 'r.KDIKSTR = d.KDIKSTR', 'left');
        $this->db->join('pejabat p', 'r.NPEJ = p.KPEJ', 'left');
        $records = $this->db->get('rdikstr r')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('r.NDIKSTR,
        TEMPAT,
        PAN,
        ANGKATAN ,
        TMULAI ,
        TAKHIR ,
        NSTTPP ,
        p.NPEJ pej,
        d.NDIKSTR ndik,
        cont_id');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->join('dikstr d', 'r.KDIKSTR = d.KDIKSTR', 'left');
        $this->db->join('pejabat p', 'r.NPEJ = p.KPEJ', 'left');
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('rdikstr r')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "ndikstr" => $record->NDIKSTR,
                "ndik" => $record->ndik,
                "tempat" => $record->TEMPAT,
                "pan" => $record->PAN,
                "angkatan" => $record->ANGKATAN,
                "tmulai" => $record->TMULAI,
                "takhir" => $record->TAKHIR,
                "nsttpp" => $record->NSTTPP,
                "pej" => $record->pej,
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
        $query = $this->db->where('cont_id=', $id)->get('rdikstr r');
        return $query;
    }

    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'KDIKSTR' => $post['rdikstr_kdikstrlist'],
            'TEMPAT' => $post['rdikstr_tempat'],
            'PAN' => $post['rdikstr_pan'],
            'ANGKATAN' => $post['rdikstr_angkatan'],
            'TMULAI' => (!$post['rdikstr_tmulai']) ? $post['rdikstr_tmulai'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rdikstr_tmulai']))),
            'TAKHIR' => (!$post['rdikstr_takhir']) ? $post['rdikstr_takhir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rdikstr_takhir']))),
            'JAM' => $post['rdikstr_jam'],
            'NSTTPP' => $post['rdikstr_nsttpp'],
            'TSTTPP' => (!$post['rdikstr_tsttpp']) ? $post['rdikstr_tsttpp'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rdikstr_tsttpp']))),
            'NDIKSTR' => $post['rdikstr_ndikstr'],
            'NPEJ' => $post['rdikstr_npej']
        );


        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'KDIKSTR' => $post['rdikstr_kdikstrlist'],
            'TEMPAT' => $post['rdikstr_tempat'],
            'PAN' => $post['rdikstr_pan'],
            'ANGKATAN' => $post['rdikstr_angkatan'],
            'TMULAI' => (!$post['rdikstr_tmulai']) ? $post['rdikstr_tmulai'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rdikstr_tmulai']))),
            'TAKHIR' => (!$post['rdikstr_takhir']) ? $post['rdikstr_takhir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rdikstr_takhir']))),
            'JAM' => $post['rdikstr_jam'],
            'NSTTPP' => $post['rdikstr_nsttpp'],
            'TSTTPP' => (!$post['rdikstr_tsttpp']) ? $post['rdikstr_tsttpp'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rdikstr_tsttpp']))),
            'NDIKSTR' => $post['rdikstr_ndikstr'],
            'NPEJ' => $post['rdikstr_npej']
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
