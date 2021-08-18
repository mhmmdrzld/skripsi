<?php

class M_rjabatan extends CI_Model
{
    private $_table = 'rjabatan';
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
            $searchQuery = " (j.NJENJAB like '%" . $searchValue . "%' or NJAB like '%" . $searchValue . "%' or  e.NESELON like '%" . $searchValue . "%' or  TMTJABAT like '%" . $searchValue . "%'  or  TSKJABAT like '%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->where('r.nip', $nip);
        $this->db->join('eselon e', 'r.KESELON = e.KESELON ', 'left');
        $this->db->join('jenjab j', 'r.JNSJAB = j.KJENJAB', 'left');
        $records = $this->db->get('rjabatan r')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->where('r.nip', $nip);
        $this->db->join('eselon e', 'r.KESELON = e.KESELON ', 'left');
        $this->db->join('jenjab j', 'r.JNSJAB = j.KJENJAB', 'left');
        $records = $this->db->get('rjabatan r')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('
        j.NJENJAB ,
        NJAB ,
        TMTJABAT ,
        NSKJABAT ,
        TSKJABAT ,
        e.NESELON ,
        TSKESELON,
        cont_id ');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->join('eselon e', 'r.KESELON = e.KESELON ', 'left');
        $this->db->join('jenjab j', 'r.JNSJAB = j.KJENJAB', 'left');
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('rjabatan r')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "njenjab" => $record->NJENJAB,
                "njab" => $record->NJAB,
                "tmtjabat" => $record->TMTJABAT,
                "nskjabat" => $record->NSKJABAT,
                "tskjabat" => $record->TSKJABAT,
                "neselon" => $record->NESELON,
                "tskeselon" => $record->TSKESELON,
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
        $this->db->join('identpeg i', 'r.nip = i.nip', 'left');
        $this->db->select('r.*,i.npelajaran');
        $query = $this->db->where('cont_id=', $id)->get('rjabatan r');
        return $query;
    }

    function insert($post = NULL)
    {
        $kunker2 = $post['rjabatan_kunker2list'];
        $kunker3 = $post['rjabatan_kunker3list'];
        $kunker4 = $post['rjabatan_kunker4list'];
        $kunker5 = $post['rjabatan_kunker5list'];

        $kunker = (!$kunker2 ? '0000' : $kunker2) . (!$kunker3 ? '00' : $kunker3) . (!$kunker4 ? '00' : $kunker4) . (!$kunker5 ? '00' : $kunker5);

        $data = array(
            'nip' => $post['nip'],
            'NSKJABAT' => $post['rjabatan_nskjabat'],
            'TSKJABAT' => (!$post['rjabatan_tskjabat']) ? $post['rjabatan_tskjabat'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatan_tskjabat']))),
            'KPEJ' => $post['rjabatan_kpej'],
            'JNSJAB' => $post['rjabatan_jnsjablist'],
            'KESELON' => $post['rjabatan_keselon'],
            'KELJAB' => $post['rjabatan_keljablist'],
            'NJAB' => $post['rjabatan_njab'],
            'KUNKER2' =>  $kunker2,
            'KUNKER3' =>  $kunker3,
            'KUNKER4' =>  $kunker4,
            'KUNKER5' =>   $kunker5,
            'NSKESELON' => $post['rjabatan_nskeselon'],
            'TSKESELON' => (!$post['rjabatan_tskeselon']) ? $post['rjabatan_tskeselon'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatan_tskeselon']))),
            'TMTJABAT' => (!$post['rjabatan_tmtjabat']) ? $post['rjabatan_tmtjabat'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatan_tmtjabat']))),
            'TMTESELON' => (!$post['rjabatan_tmteselon']) ? $post['rjabatan_tmteselon'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatan_tmteselon']))),
            'NLANTIK' => $post['rjabatan_nlantik'],
            'TLANTIK' => (!$post['rjabatan_tlantik']) ? $post['rjabatan_tlantik'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatan_tlantik']))),
            'TMTJAB' => (!$post['rjabatan_tmtjab']) ? $post['rjabatan_tmtjab'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatan_tmtjab']))),
            'SJAB' => $post['rjabatan_sjab'],
            'RINCUNIT1' => $post['rjabatan_rcunit1'],
            'RINCUNIT2' => $post['rjabatan_rcunit2'],
            'KET' => $post['rjabatan_ket'],
            // 'kpelajaran' => $post['rdikstr_npej'],
            'kunker' => $kunker,
        );


        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {

        $kunker2 = $post['rjabatan_kunker2list'];
        $kunker3 = $post['rjabatan_kunker3list'];
        $kunker4 = $post['rjabatan_kunker4list'];
        $kunker5 = $post['rjabatan_kunker5list'];

        $kunker = (!$kunker2 ? '0000' : $kunker2) . (!$kunker3 ? '00' : $kunker3) . (!$kunker4 ? '00' : $kunker4) . (!$kunker5 ? '00' : $kunker5);

        $data = array(
            'NSKJABAT' => $post['rjabatan_nskjabat'],
            'TSKJABAT' => (!$post['rjabatan_tskjabat']) ? $post['rjabatan_tskjabat'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatan_tskjabat']))),
            'KPEJ' => $post['rjabatan_kpej'],
            'JNSJAB' => $post['rjabatan_jnsjablist'],
            'KESELON' => $post['rjabatan_keselon'],
            'KELJAB' => $post['rjabatan_keljablist'],
            'NJAB' => $post['rjabatan_njab'],
            'KUNKER2' =>  $kunker2,
            'KUNKER3' =>  $kunker3,
            'KUNKER4' =>  $kunker4,
            'KUNKER5' =>   $kunker5,
            'NSKESELON' => $post['rjabatan_nskeselon'],
            'TSKESELON' => (!$post['rjabatan_tskeselon']) ? $post['rjabatan_tskeselon'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatan_tskeselon']))),
            'TMTJABAT' => (!$post['rjabatan_tmtjabat']) ? $post['rjabatan_tmtjabat'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatan_tmtjabat']))),
            'TMTESELON' => (!$post['rjabatan_tmteselon']) ? $post['rjabatan_tmteselon'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatan_tmteselon']))),
            'NLANTIK' => $post['rjabatan_nlantik'],
            'TLANTIK' => (!$post['rjabatan_tlantik']) ? $post['rjabatan_tlantik'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatan_tlantik']))),
            'TMTJAB' => (!$post['rjabatan_tmtjab']) ? $post['rjabatan_tmtjab'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rjabatan_tmtjab']))),
            'SJAB' => $post['rjabatan_sjab'],
            'RINCUNIT1' => $post['rjabatan_rcunit1'],
            'RINCUNIT2' => $post['rjabatan_rcunit2'],
            'KET' => $post['rjabatan_ket'],
            // 'kpelajaran' => $post['rdikstr_npej'],
            'kunker' => $kunker,
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
