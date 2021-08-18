<?php

class M_rtugas extends CI_Model
{
    private $_table = 'rtugas';
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
            $searchQuery = " (DAERAH like '%" . $searchValue . "%' or PTETAP like '%" . $searchValue . "%' or  NSK like '%" . $searchValue . "%' or  TMULAI like '%" . $searchValue . "%'  or  KEDUDUKAN like '%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('rtugas r')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('rtugas r')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('
        DAERAH,
        TUJUAN,
        PTETAP ,
        NSK ,
        TSK ,
        TMULAI ,
        TAKHIR ,
        KEDUDUKAN ,
        KET ,
        cont_id');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('rtugas r')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "daerah" => $record->DAERAH,
                "tujuan" => $record->TUJUAN,
                "ptetap" => $record->PTETAP,
                "NSK" => $record->NSK,
                "tsk" => $record->TSK,
                "tmulai" => $record->TMULAI,
                "takhir" => $record->TAKHIR,
                "kedudukan" => $record->KEDUDUKAN,
                "ket" => $record->KET,
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
        $query = $this->db->where('cont_id=', $id)->get('rtugas r');
        return $query;
    }

    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'JENIS' => $post['rtugas_jenis'],
            'TUJUAN' => $post['rtugas_tujuan'],
            'DAERAH' => $post['rtugas_daerah'],
            'PTETAP' => $post['rtugas_ptetap'],
            'NSK' => $post['rtugas_nsk'],
            'TSK' => (!$post['rtugas_tsk']) ? $post['rtugas_tsk'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rtugas_tsk']))),
            'TMULAI' => (!$post['rtugas_tmulai']) ? $post['rtugas_tmulai'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rtugas_tmulai']))),
            'TAKHIR' => (!$post['rtugas_takhir']) ? $post['rtugas_takhir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rtugas_takhir']))),
            'KEDUDUKAN' => $post['rtugas_kedudukan'],
            'KET' => $post['rtugas_ket']
        );


        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'JENIS' => $post['rtugas_jenis'],
            'TUJUAN' => $post['rtugas_tujuan'],
            'DAERAH' => $post['rtugas_daerah'],
            'PTETAP' => $post['rtugas_ptetap'],
            'NSK' => $post['rtugas_nsk'],
            'TSK' => (!$post['rtugas_tsk']) ? $post['rtugas_tsk'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rtugas_tsk']))),
            'TMULAI' => (!$post['rtugas_tmulai']) ? $post['rtugas_tmulai'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rtugas_tmulai']))),
            'TAKHIR' => (!$post['rtugas_takhir']) ? $post['rtugas_takhir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rtugas_takhir']))),
            'KEDUDUKAN' => $post['rtugas_kedudukan'],
            'KET' => $post['rtugas_ket']
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
