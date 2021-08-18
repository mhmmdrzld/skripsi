<?php

class M_rjasa extends CI_Model
{
    private $_table = 'rjasa';
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
            $searchQuery = " (r.NSK like '%" . $searchValue . "%' 
            or r.TSK like '%" . $searchValue . "%'
             or  p.NTANDAJASA  like '%" . $searchValue . "%' 
             or r.AOLEH like '%" . $searchValue . "%' 
              or  d.NPEJ like '%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->where('r.nip', $nip);
        $this->db->join('tandajasa p', 'r.KTANDAJASA = p.KTANDAJASA', 'left');
        $this->db->join('pejabat d', 'r.KPEJ = d.KPEJ', 'left');
        $records = $this->db->get('rjasa r')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->where('r.nip', $nip);
        $this->db->join('tandajasa p', 'r.KTANDAJASA = p.KTANDAJASA', 'left');
        $this->db->join('pejabat d', 'r.KPEJ = d.KPEJ', 'left');
        $records = $this->db->get('rjasa r')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('
        r.NSK,
        r.TSK ,
        p.NTANDAJASA ,
        r.AOLEH ,
        d.NPEJ,
        r.cont_id');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->join('tandajasa p', 'r.KTANDAJASA = p.KTANDAJASA', 'left');
        $this->db->join('pejabat d', 'r.KPEJ = d.KPEJ', 'left');
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('rjasa r')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "NSK" => $record->NSK,
                "TSK" => $record->TSK,
                "NTANDAJASA" => $record->NTANDAJASA,
                "AOLEH" => $record->AOLEH,
                "NPEJ" => $record->NPEJ,
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
        $query = $this->db->where('cont_id=', $id)->get('rjasa r');
        return $query;
    }

    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'KTANDAJASA' => $post['rjasa_ktandajasa'],
            'AOLEH' => $post['rjasa_aoleh'],
            'NSK' => $post['rjasa_nsk'],
            'TSK' => (!$post['rjasa_tsk']) ? $post['rjasa_tsk'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjasa_tsk']))),
            'KPEJ' => $post['rjasa_kpej'],
            'THOLEH' => $post['rjasa_tholeh'],
            'KET' => $post['rjasa_ket']
        );


        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'KTANDAJASA' => $post['rjasa_ktandajasa'],
            'AOLEH' => $post['rjasa_aoleh'],
            'NSK' => $post['rjasa_nsk'],
            'TSK' => (!$post['rjasa_tsk']) ? $post['rjasa_tsk'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjasa_tsk']))),
            'KPEJ' => $post['rjasa_kpej'],
            'THOLEH' => $post['rjasa_tholeh'],
            'KET' => $post['rjasa_ket']
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
