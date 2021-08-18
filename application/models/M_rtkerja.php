<?php

class M_rtkerja extends CI_Model
{
    private $_table = 'rtkerja';
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
            $searchQuery = " (NINSIND like '%" . $searchValue . "%' or NUNKER like '%" . $searchValue . "%')";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->where('r.nip', $nip);
        $this->db->join('unkerja d', 'concat(r.KUNKOM,"000000") = d.KUNKER', 'left');
        $this->db->join('insinduk p', 'r.KINSIND = p.KINSIND', 'left');
        $records = $this->db->get('rtkerja r')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->where('r.nip', $nip);
        $this->db->join('unkerja d', 'concat(r.KUNKOM,"000000") = d.KUNKER', 'left');
        $this->db->join('insinduk p', 'r.KINSIND = p.KINSIND', 'left');
        $records = $this->db->get('rtkerja r')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('
        NINSIND,
        NUNKER,
        TSK,
        cont_id');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        // $this->db->order_by('cont_id', 'DESC');
        $this->db->limit($rowperpage, $start);
        $this->db->join('insinduk p', 'r.KINSIND = p.KINSIND', 'left');
        $this->db->join('unkerja d', 'concat(r.KUNKOM,"000000") = d.KUNKER', 'left');
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('rtkerja r')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "NINSIND" => $record->NINSIND,
                "NUNKER" => $record->NUNKER,
                "tsk" => $record->TSK,
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
        $query = $this->db->where('cont_id=', $id)->get('rtkerja r');
        return $query;
    }

    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'NSK' => $post['Rkerja_nsk'],
            'TSK' => (!$post['Rkerja_tsk']) ? $post['Rkerja_tsk'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['Rkerja_tsk']))),
            'KINSIND' => $post['Rkerja_kinsindlist'],
            'KUNTP' => $post['Rkerja_kuntp'],
            'KINSPROP' => $post['Rkerja_kinsproplist'],
            'KINSKAB' => $post['Rkerja_kinskablist'],
            'KINSKEC' => $post['Rkerja_kinskeclist'],
            'KINSDES' => $post['Rkerja_kinsdeslist'],
            'KUNKOM' => $post['Rkerja_kunkomlist'],
            'KUNUNIT' => $post['Rkerja_kununitlist'],
            'KUNSK' => $post['Rkerja_kunsklist'],
            'KUNSSK' => $post['Rkerja_kunssklist'],
            'ALKER' => $post['Rkerja_alker'],
            'KPROP' => $post['Rkerja_kproplist'],
            'KKAB' => $post['Rkerja_kkablist'],
            'KKEC' => $post['Rkerja_kkeclist'],
            'KDES' => $post['Rkerja_kdeslist']
        );


        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'NSK' => $post['Rkerja_nsk'],
            'TSK' => (!$post['Rkerja_tsk']) ? $post['Rkerja_tsk'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['Rkerja_tsk']))),
            'KINSIND' => $post['Rkerja_kinsindlist'],
            'KUNTP' => $post['Rkerja_kuntp'],
            'KINSPROP' => $post['Rkerja_kinsproplist'],
            'KINSKAB' => $post['Rkerja_kinskablist'],
            'KINSKEC' => $post['Rkerja_kinskeclist'],
            'KINSDES' => $post['Rkerja_kinsdeslist'],
            'KUNKOM' => $post['Rkerja_kunkomlist'],
            'KUNUNIT' => $post['Rkerja_kununitlist'],
            'KUNSK' => $post['Rkerja_kunsklist'],
            'KUNSSK' => $post['Rkerja_kunssklist'],
            'ALKER' => $post['Rkerja_alker'],
            'KPROP' => $post['Rkerja_kproplist'],
            'KKAB' => $post['Rkerja_kkablist'],
            'KKEC' => $post['Rkerja_kkeclist'],
            'KDES' => $post['Rkerja_kdeslist']
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
