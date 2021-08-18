<?php

class M_rhukuman extends CI_Model
{
    private $_table = 'rhukuman';
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
            $searchQuery = " (JHUKUM like '%" . $searchValue . "%' 
            or DESHUKUM like '%" . $searchValue . "%'
             or  NSK like '%" . $searchValue . "%' 
             or  TSK like '%" . $searchValue . "%' 
              or  NPEJ like '%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->where('r.nip', $nip);
        $this->db->join('pejabat p', 'r.KPEJ = p.KPEJ', 'left');
        $records = $this->db->get('rhukuman r')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->where('r.nip', $nip);
        $this->db->join('pejabat p', 'r.KPEJ = p.KPEJ', 'left');
        $records = $this->db->get('rhukuman r')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('
        JHUKUM,
        DESHUKUM,
        NSK,
        TSK,
        p.NPEJ,
        TMT,
        cont_id');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->join('pejabat p', 'r.KPEJ = p.KPEJ', 'left');
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('rhukuman r')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "JHUKUM" => $record->JHUKUM,
                "DESHUKUM" => $record->DESHUKUM,
                "NSK" => $record->NSK,
                "TSK" => $record->TSK,
                "NPEJ" => $record->NPEJ,
                "TMT" => $record->TMT,
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
        $query = $this->db->where('cont_id=', $id)->get('rhukuman r');
        return $query;
    }

    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'JHUKUM' => $post['rhukuman_jhukum'],
            'DESHUKUM' => $post['rhukuman_deshukum'],
            'PELANGGARAN' => $post['rhukuman_pelanggaran'],
            'PASAL' => $post['rhukuman_pasal'],
            'MASA' => $post['rhukuman_masa'],
            'NSK' => $post['rhukuman_nsk'],
            'KPEJ' => $post['rhukuman_ketj'],
            'TSK' => (!$post['rhukuman_tsk']) ? $post['rhukuman_tsk'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rhukuman_tsk']))),
            'TMT' => (!$post['rhukuman_tmt']) ? $post['rhukuman_tmt'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rhukuman_tmt']))),
            'TSELESAI' => (!$post['rhukuman_tselesai']) ? $post['rhukuman_tselesai'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rhukuman_tselesai']))),
            'KET' => $post['rhukuman_ket']
        );


        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'JHUKUM' => $post['rhukuman_jhukum'],
            'DESHUKUM' => $post['rhukuman_deshukum'],
            'PELANGGARAN' => $post['rhukuman_pelanggaran'],
            'PASAL' => $post['rhukuman_pasal'],
            'MASA' => $post['rhukuman_masa'],
            'NSK' => $post['rhukuman_nsk'],
            'KPEJ' => $post['rhukuman_ketj'],
            'TSK' => (!$post['rhukuman_tsk']) ? $post['rhukuman_tsk'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rhukuman_tsk']))),
            'TMT' => (!$post['rhukuman_tmt']) ? $post['rhukuman_tmt'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rhukuman_tmt']))),
            'TSELESAI' => (!$post['rhukuman_tselesai']) ? $post['rhukuman_tselesai'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rhukuman_tselesai']))),
            'KET' => $post['rhukuman_ket']
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
