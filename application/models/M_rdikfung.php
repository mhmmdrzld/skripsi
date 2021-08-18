<?php

class M_rdikfung extends CI_Model
{
    private $_table = 'rdikfung';

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
            $searchQuery = " (r.NDIKFUNG like '%" . $searchValue . "%' 
            or TEMPAT like '%" . $searchValue . "%'
             or  PAN like '%" . $searchValue . "%' 
             or  TMULAI like '%" . $searchValue . "%' 
              or  TAKHIR like '%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->where('r.nip', $nip);
        $this->db->join('dikfung d', 'r.KDIKFUNG = d.KDIKFUNG', 'left');
        $this->db->join('pejabat p', 'r.NPEJ = p.KPEJ', 'left');
        $records = $this->db->get('rdikfung r')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->where('r.nip', $nip);
        $this->db->join('dikfung d', 'r.KDIKFUNG = d.KDIKFUNG', 'left');
        $this->db->join('pejabat p', 'r.NPEJ = p.KPEJ', 'left');
        $records = $this->db->get('rdikfung r')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('
        r.NDIKFUNG,
        TEMPAT,
        PAN,
        ANGKATAN ,
        TMULAI ,
        TAKHIR ,
        NSTTPP ,
        p.NPEJ pej,
        d.NDIKFUNG ndik,
        cont_id');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->join('pejabat p', 'r.NPEJ = p.KPEJ', 'left');
        $this->db->join('dikfung d', 'r.KDIKFUNG = d.KDIKFUNG', 'left');
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('rdikfung r')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "dikfung" => $record->NDIKFUNG,
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
        $query = $this->db->where('cont_id=', $id)->get('rdikfung r');
        return $query;
    }

    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'KDIKFUNG' => $post['rdikfung_kdikfunglist'],
            'TEMPAT' => $post['rdikfung_tempat'],
            'PAN' => $post['rdikfung_pan'],
            'ANGKATAN' => $post['rdikfung_angkatan'],
            'TMULAI' => (!$post['rdikfung_tmulai']) ? $post['rdikfung_tmulai'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rdikfung_tmulai']))),
            'TAKHIR' => (!$post['rdikfung_takhir']) ? $post['rdikfung_takhir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rdikfung_takhir']))),
            'JAM' => $post['rdikfung_jam'],
            'NSTTPP' => $post['rdikfung_nsttpp'],
            'TSTTPP' => (!$post['rdikfung_tsttpp']) ? $post['rdikfung_tsttpp'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rdikfung_tsttpp']))),
            'NDIKFUNG' => $post['rdikfung_npdum'],
            'NPEJ' => $post['rdikfung_npej']
        );


        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'KDIKFUNG' => $post['rdikfung_kdikfunglist'],
            'TEMPAT' => $post['rdikfung_tempat'],
            'PAN' => $post['rdikfung_pan'],
            'ANGKATAN' => $post['rdikfung_angkatan'],
            'TMULAI' => (!$post['rdikfung_tmulai']) ? $post['rdikfung_tmulai'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rdikfung_tmulai']))),
            'TAKHIR' => (!$post['rdikfung_takhir']) ? $post['rdikfung_takhir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rdikfung_takhir']))),
            'JAM' => $post['rdikfung_jam'],
            'NSTTPP' => $post['rdikfung_nsttpp'],
            'TSTTPP' => (!$post['rdikfung_tsttpp']) ? $post['rdikfung_tsttpp'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rdikfung_tsttpp']))),
            'NDIKFUNG' => $post['rdikfung_npdum'],
            'NPEJ' => $post['rdikfung_npej']
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
