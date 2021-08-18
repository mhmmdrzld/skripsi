<?php

class M_rdiktek extends CI_Model
{
    private $_table = 'rdiktek';

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
            $searchQuery = " (r.NDIKTEK like '%" . $searchValue . "%' or TEMPAT like '%" . $searchValue . "%' or  PAN like '%" . $searchValue . "%' or  TMULAI like '%" . $searchValue . "%'  or  TAKHIR like '%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->where('r.nip', $nip);
        $this->db->join('diktek d', 'r.KDIKTEK = d.KDIKTEK', 'left');
        $this->db->join('pejabat p', 'r.NPEJ = p.KPEJ', 'left');
        $records = $this->db->get('rdiktek r')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->where('r.nip', $nip);
        $this->db->join('diktek d', 'r.KDIKTEK = d.KDIKTEK', 'left');
        $this->db->join('pejabat p', 'r.NPEJ = p.KPEJ', 'left');
        $records = $this->db->get('rdiktek r')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('r.NDIKTEK,
        TEMPAT,
        PAN,
        ANGKATAN ,
        TMULAI ,
        TAKHIR ,
        NSTTPP ,
        p.NPEJ pej,
        d.NDIKTEK ndik,
        cont_id');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->join('pejabat p', 'r.NPEJ = p.KPEJ', 'left');
        $this->db->join('diktek d', 'r.KDIKTEK = d.KDIKTEK', 'left');
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('rdiktek r')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "diktek" => $record->NDIKTEK,
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
        $query = $this->db->where('cont_id=', $id)->get('rdiktek r');
        return $query;
    }

    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'KDIKTEK' => $post['rdiktek_kdikteklist'],
            'TEMPAT' => $post['rdiktek_tempat'],
            'PAN' => $post['rdiktek_pan'],
            'ANGKATAN' => $post['rdiktek_angkatan'],
            'TMULAI' => (!$post['rdiktek_tmulai']) ? $post['rdiktek_tmulai'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rdiktek_tmulai']))),
            'TAKHIR' => (!$post['rdiktek_takhir']) ? $post['rdiktek_takhir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rdiktek_takhir']))),
            'JAM' => $post['rdiktek_jam'],
            'NSTTPP' => $post['rdiktek_nsttpp'],
            'TSTTPP' => (!$post['rdiktek_tsttpp']) ? $post['rdiktek_tsttpp'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rdiktek_tsttpp']))),
            'NDIKTEK' => $post['rdiktek_ndiktek'],
            'NPEJ' => $post['rdiktek_npej']
        );


        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'KDIKTEK' => $post['rdiktek_kdikteklist'],
            'TEMPAT' => $post['rdiktek_tempat'],
            'PAN' => $post['rdiktek_pan'],
            'ANGKATAN' => $post['rdiktek_angkatan'],
            'TMULAI' => (!$post['rdiktek_tmulai']) ? $post['rdiktek_tmulai'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rdiktek_tmulai']))),
            'TAKHIR' => (!$post['rdiktek_takhir']) ? $post['rdiktek_takhir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rdiktek_takhir']))),
            'JAM' => $post['rdiktek_jam'],
            'NSTTPP' => $post['rdiktek_nsttpp'],
            'TSTTPP' => (!$post['rdiktek_tsttpp']) ? $post['rdiktek_tsttpp'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rdiktek_tsttpp']))),
            'NDIKTEK' => $post['rdiktek_ndiktek'],
            'NPEJ' => $post['rdiktek_npej']
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
