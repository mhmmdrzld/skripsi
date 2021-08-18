<?php

class M_rpendum extends CI_Model
{
    private $_table = 'rpendum';

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
            $searchQuery = " (TAHUN like '%" . $searchValue . "%' or NSEK like '%" . $searchValue . "%' or  TEMPAT like '%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->where('rpendum.nip', $nip);
        $this->db->join('jurpend j', 'concat(rpendum.KTINGPEND,"00000") = j.KJUR', 'left');
        $this->db->join('jurpend k', 'concat(rpendum.KTINGPEND,rpendum.KKELPEN,"000") = k.KJUR', 'left');
        $this->db->join('jurpend l', 'concat(rpendum.KTINGPEND,rpendum.KKELPEN,rpendum.KTINGPEN) = l.KJUR', 'left');
        $records = $this->db->get('rpendum')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->where('rpendum.nip', $nip);
        $this->db->join('jurpend j', 'concat(rpendum.KTINGPEND,"00000") = j.KJUR', 'left');
        $this->db->join('jurpend k', 'concat(rpendum.KTINGPEND,rpendum.KKELPEN,"000") = k.KJUR', 'left');
        $this->db->join('jurpend l', 'concat(rpendum.KTINGPEND,rpendum.KKELPEN,rpendum.KTINGPEN) = l.KJUR', 'left');
        $records = $this->db->get('rpendum')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('j.NJUR kelpend,
        k.NJUR fakpend,
        l.NJUR detpend,
        NPDUM,
        NSEK ,
        TEMPAT ,
        NKEPSEK,
        NSTTB ,
        TSTTB,
        year(TSTTB) tahun,
        cont_id');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->join('jurpend j', 'concat(rpendum.KTINGPEND,"00000") = j.KJUR', 'left');
        $this->db->join('jurpend k', 'concat(rpendum.KTINGPEND,rpendum.KKELPEN,"000") = k.KJUR', 'left');
        $this->db->join('jurpend l', 'concat(rpendum.KTINGPEND,rpendum.KKELPEN,rpendum.KTINGPEN) = l.KJUR', 'left');
        $this->db->where('rpendum.nip', $nip);
        $records = $this->db->get('rpendum')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "kelpend" => $record->kelpend,
                "fakpend" => $record->fakpend,
                "detpend" => $record->detpend,
                "npdum" => $record->NPDUM,
                "nsek" => $record->NSEK,
                "tempat" => $record->TEMPAT,
                "nkepsek" => $record->NKEPSEK,
                "nsttb" => $record->NSTTB,
                "tsttb" => $record->TSTTB,
                "tahun" => $record->tahun,
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
        $query = $this->db->where('cont_id=', $id)->get('rpendum');
        return $query;
    }

    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'KTINGPEND' => $post['rpendum_ktingpendlist'],
            'KKELPEN' => $post['rpendum_kkelpenlist'],
            'KTINGPEN' => $post['rpendum_ktingpenlist'],
            'NPDUM' => $post['rpendum_npdum'],
            // 'KJUR' => $post['UNTKERPER'],
            'NSEK' => $post['rpendum_nsek'],
            'TEMPAT' => $post['rpendum_tempat'],
            'NKEPSEK' => $post['rpendum_nkepsek'],
            'NSTTB' => $post['rpendum_nsttb'],
            // 'ISAKHIR' => $post['rsistri_kotlah'],
            // 'gld' => $post['rsistri_kotlah'],
            // 'glb' => $post['rsistri_kotlah'],
            'TSTTB' => (!$post['rpendum_tsttb']) ? $post['rpendum_tsttb'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rpendum_tsttb'])))
        );


        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'KTINGPEND' => $post['rpendum_ktingpendlist'],
            'KKELPEN' => $post['rpendum_kkelpenlist'],
            'KTINGPEN' => $post['rpendum_ktingpenlist'],
            'NPDUM' => $post['rpendum_npdum'],
            'NSEK' => $post['rpendum_nsek'],
            'TEMPAT' => $post['rpendum_tempat'],
            'NKEPSEK' => $post['rpendum_nkepsek'],
            'NSTTB' => $post['rpendum_nsttb'],
            'TSTTB' => (!$post['rpendum_tsttb']) ? $post['rpendum_tsttb'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rpendum_tsttb'])))
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
