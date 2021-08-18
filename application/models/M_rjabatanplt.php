<?php

class M_rjabatanplt extends CI_Model
{

    private $_table = 'rjabatan_plt';
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
            $searchQuery = " (NJAB like '%" . $searchValue . "%' 
            or NJENJAB like '%" . $searchValue . "%' 
            or  TMTJABAT like '%" . $searchValue . "%' 
            or  NSKJABAT like '%" . $searchValue . "%'  
            or  NESELON like '%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->where('r.nip', $nip);
        $this->db->join('eselon d', 'r.KESELON = d.KESELON', 'left');
        $this->db->join('jenjab p', 'r.JNSJAB =p.KJENJAB', 'left');
        $records = $this->db->get('rjabatan_plt r')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->where('r.nip', $nip);
        $this->db->join('eselon d', 'r.KESELON = d.KESELON', 'left');
        $this->db->join('jenjab p', 'r.JNSJAB =p.KJENJAB', 'left');
        $records = $this->db->get('rjabatan_plt r')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('
        NJAB ,
        NJENJAB,
        TMTJABAT,
        NSKJABAT,
        TSKJABAT,
        NESELON ,
        TSKESELON,
        cont_id ');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->join('jenjab p', 'r.JNSJAB =p.KJENJAB', 'left');
        $this->db->join('eselon d', 'r.KESELON = d.KESELON', 'left');
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('rjabatan_plt r')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "NJAB" => $record->NJAB,
                "NJENJAB" => $record->NJENJAB,
                "TMTJABAT" => $record->TMTJABAT,
                "NSKJABAT" => $record->NSKJABAT,
                "TSKJABAT" => $record->TSKJABAT,
                "NESELON" => $record->NESELON,
                "TSKESELON" => $record->TSKESELON,
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
        $query = $this->db->where('cont_id=', $id)->get('rjabatan_plt r');
        return $query;
    }

    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'NSKJABAT' => $post['rjabatanplt_nskjabat'],
            'TSKJABAT' => (!$post['rjabatanplt_tskjabat']) ? $post['rjabatanplt_tskjabat'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatanplt_tskjabat']))),
            'KPEJ' => $post['rjabatanplt_kpej'],
            'JNSJAB' => $post['rjabatanplt_jnsjablist'],
            'KESELON' => $post['rjabatanplt_keselon'],
            'KELJAB' => $post['rjabatanplt_keljablist'],
            'NJAB' => $post['rjabatanplt_njab'],
            'KUNKER2' => $post['rjabatanplt_kunker2list'],
            'KUNKER3' => $post['rjabatanplt_kunker3list'],
            'KUNKER4' => $post['rjabatanplt_kunker4list'],
            'KUNKER5' => $post['rjabatanplt_kunker5list'],
            'KET' => $post['rjabatanplt_ket'],
            'NSKESELON' => $post['rjabatanplt_nskeselon'],
            'TSKESELON' => (!$post['rjabatanplt_tskeselon']) ? $post['rjabatanplt_tskeselon'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatanplt_tskeselon']))),
            'TMTJABAT' => (!$post['rjabatanplt_tmtjabat']) ? $post['rjabatanplt_tmtjabat'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatanplt_tmtjabat']))),
            'TMTESELON' => (!$post['rjabatanplt_tmteselon']) ? $post['rjabatanplt_tmteselon'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatanplt_tmteselon']))),
            'TLANTIK' => (!$post['rjabatanplt_tlantik']) ? $post['rjabatanplt_tlantik'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatanplt_tlantik']))),
            'NLANTIK' => $post['rjabatanplt_nlantik'],
            'TMTJAB' => (!$post['rjabatanplt_tmtjab']) ? $post['rjabatanplt_tmtjab'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatanplt_tmtjab']))),
            'SJAB' => $post['rjabatanplt_sjab'],
            'RINCUNIT1' => $post['rjabatanplt_rcunit'],
            'RINCUNIT2' => $post['rjabatanplt_rcunit2list'],
            // 'NDIKFUNG' => $post['npelajaran']
        );


        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'NSKJABAT' => $post['rjabatanplt_nskjabat'],
            'TSKJABAT' => (!$post['rjabatanplt_tskjabat']) ? $post['rjabatanplt_tskjabat'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatanplt_tskjabat']))),
            'KPEJ' => $post['rjabatanplt_kpej'],
            'JNSJAB' => $post['rjabatanplt_jnsjablist'],
            'KESELON' => $post['rjabatanplt_keselon'],
            'KELJAB' => $post['rjabatanplt_keljablist'],
            'NJAB' => $post['rjabatanplt_njab'],
            'KUNKER2' => $post['rjabatanplt_kunker2list'],
            'KUNKER3' => $post['rjabatanplt_kunker3list'],
            'KUNKER4' => $post['rjabatanplt_kunker4list'],
            'KUNKER5' => $post['rjabatanplt_kunker5list'],
            'KET' => $post['rjabatanplt_ket'],
            'NSKESELON' => $post['rjabatanplt_nskeselon'],
            'TSKESELON' => (!$post['rjabatanplt_tskeselon']) ? $post['rjabatanplt_tskeselon'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatanplt_tskeselon']))),
            'TMTJABAT' => (!$post['rjabatanplt_tmtjabat']) ? $post['rjabatanplt_tmtjabat'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatanplt_tmtjabat']))),
            'TMTESELON' => (!$post['rjabatanplt_tmteselon']) ? $post['rjabatanplt_tmteselon'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatanplt_tmteselon']))),
            'TLANTIK' => (!$post['rjabatanplt_tlantik']) ? $post['rjabatanplt_tlantik'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatanplt_tlantik']))),
            'NLANTIK' => $post['rjabatanplt_nlantik'],
            'TMTJAB' => (!$post['rjabatanplt_tmtjab']) ? $post['rjabatanplt_tmtjab'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatanplt_tmtjab']))),
            'SJAB' => $post['rjabatanplt_sjab'],
            'RINCUNIT1' => $post['rjabatanplt_rcunit'],
            'RINCUNIT2' => $post['rjabatanplt_rcunit2list'],
            // 'NDIKFUNG' => $post['npelajaran']
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
