<?php

class M_rtubel extends CI_Model
{
    private $_table = 'rtubel';
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
            $searchQuery = " (NPDUM like '%" . $searchValue . "%' or NMUNIV like '%" . $searchValue . "%' or  tsk like '%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->where('rtubel.nip', $nip);
        $this->db->join('jurpend j', 'concat(rtubel.ktingpend,"00000") = j.KJUR', 'left');
        $this->db->join('jurpend k', 'concat(rtubel.ktingpend,rtubel.kkelpen,"000") = k.KJUR', 'left');
        $this->db->join('jurpend l', 'concat(rtubel.ktingpend,rtubel.kkelpen,rtubel.ktingpen) = l.KJUR', 'left');
        $records = $this->db->get('rtubel')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->where('rtubel.nip', $nip);
        $this->db->join('jurpend j', 'concat(rtubel.ktingpend,"00000") = j.KJUR', 'left');
        $this->db->join('jurpend k', 'concat(rtubel.ktingpend,rtubel.kkelpen,"000") = k.KJUR', 'left');
        $this->db->join('jurpend l', 'concat(rtubel.ktingpend,rtubel.kkelpen,rtubel.ktingpen) = l.KJUR', 'left');
        $records = $this->db->get('rtubel')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('
        j.NJUR kelpend,
        k.NJUR fakpend,
        l.NJUR detpend,
        nosk,
        tsk,
        NPDUM,
        nmuniv,
        YEAR(tsk) tahun,
        cont_id');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->join('jurpend j', 'concat(rtubel.ktingpend,"00000") = j.KJUR', 'left');
        $this->db->join('jurpend k', 'concat(rtubel.ktingpend,rtubel.kkelpen,"000") = k.KJUR', 'left');
        $this->db->join('jurpend l', 'concat(rtubel.ktingpend,rtubel.kkelpen,rtubel.ktingpen) = l.KJUR', 'left');
        $this->db->where('rtubel.nip', $nip);
        $records = $this->db->get('rtubel')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "kelpend" => $record->kelpend,
                "fakpend" => $record->fakpend,
                "detpend" => $record->detpend,
                "nosk" => $record->nosk,
                "tsk" => $record->tsk,
                "npdum" => $record->NPDUM,
                "tahun" => $record->tahun,
                "nmuniv" => $record->nmuniv,
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
        $query = $this->db->where('cont_id=', $id)->get('rtubel');
        return $query;
    }

    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'nosk' => $post['rtubel_nosk'],
            'tsk' => (!$post['rtubel_tsk']) ? $post['rtubel_tsk'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rtubel_tsk']))),
            'ktingpend' => $post['rtubel_ktingpendlist'],
            'kkelpen' => $post['rtubel_kkelpenlist'],
            'ktingpen' => $post['rtubel_ktingpenlist'],
            'npdum' => $post['rtubel_npdum'],
            'nmuniv' => $post['rtubel_nmuniv']
        );


        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'nosk' => $post['rtubel_nosk'],
            'tsk' => (!$post['rtubel_tsk']) ? $post['rtubel_tsk'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rtubel_tsk']))),
            'ktingpend' => $post['rtubel_ktingpendlist'],
            'kkelpen' => $post['rtubel_kkelpenlist'],
            'ktingpen' => $post['rtubel_ktingpenlist'],
            'npdum' => $post['rtubel_npdum'],
            'nmuniv' => $post['rtubel_nmuniv']
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
