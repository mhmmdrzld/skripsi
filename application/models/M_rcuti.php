<?php

class M_rcuti extends CI_Model
{
    private $_table = 'rcuti';
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
            $searchQuery = " (NSK like '%" . $searchValue . "%' 
            or TSK like '%" . $searchValue . "%'
             or  TMULAI like '%" . $searchValue . "%' 
             or  NCUTI like '%" . $searchValue . "%' 
              or  NPEJ like '%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->where('r.nip', $nip);
        $this->db->join('jcuti d', 'r.JCUTI = d.KCUTI', 'left');
        $this->db->join('pejabat p', 'r.PTETAP = p.KPEJ', 'left');
        $records = $this->db->get('rcuti r')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->where('r.nip', $nip);
        $this->db->join('jcuti d', 'r.JCUTI = d.KCUTI', 'left');
        $this->db->join('pejabat p', 'r.PTETAP = p.KPEJ', 'left');
        $records = $this->db->get('rcuti r')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('
        NSK,
        TSK,
        TMULAI,
        TAKHIR,
        NCUTI,
        NPEJ,
        cont_id');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->join('pejabat p', 'r.PTETAP = p.KPEJ', 'left');
        $this->db->join('jcuti d', 'r.JCUTI = d.KCUTI', 'left');
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('rcuti r')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "NSK" => $record->NSK,
                "TSK" => $record->TSK,
                "TMULAI" => $record->TMULAI,
                "TAKHIR" => $record->TAKHIR,
                "NCUTI" => $record->NCUTI,
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
        $query = $this->db->where('cont_id=', $id)->get('rcuti r');
        return $query;
    }

    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'JCUTI' => $post['rcuti_jcuti'],
            'NSK' => $post['rcuti_nsk'],
            'TSK' => (!$post['rcuti_tsk']) ? $post['rcuti_tsk'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rcuti_tsk']))),
            'TMULAI' => (!$post['rcuti_tmulai']) ? $post['rcuti_tmulai'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rcuti_tmulai']))),
            'TAKHIR' => (!$post['rcuti_takhir']) ? $post['rcuti_takhir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rcuti_takhir']))),
            'PTETAP' => $post['rcuti_kpej'],
            'ALAMAT' => $post['rcuti_alamat']
        );


        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'JCUTI' => $post['rcuti_jcuti'],
            'NSK' => $post['rcuti_nsk'],
            'TSK' => (!$post['rcuti_tsk']) ? $post['rcuti_tsk'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rcuti_tsk']))),
            'TMULAI' => (!$post['rcuti_tmulai']) ? $post['rcuti_tmulai'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rcuti_tmulai']))),
            'TAKHIR' => (!$post['rcuti_takhir']) ? $post['rcuti_takhir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rcuti_takhir']))),
            'PTETAP' => $post['rcuti_kpej'],
            'ALAMAT' => $post['rcuti_alamat']
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
