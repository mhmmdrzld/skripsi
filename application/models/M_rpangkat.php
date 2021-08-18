<?php

class M_rpangkat extends CI_Model
{
    private $_table = 'rpangkat';
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
            $searchQuery = " (NSKPANG like '%" . $searchValue . "%' 
            or TSKPANG like '%" . $searchValue . "%'
             or  TMTPANG like '%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('rpangkat r')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->where('r.nip', $nip);

        $records = $this->db->get('rpangkat r')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('
        NSKPANG ,
        TSKPANG ,
        TMTPANG ,
        cont_id ');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->where('r.nip', $nip);
        $records = $this->db->get('rpangkat r')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "NSKPANG" => $record->NSKPANG,
                "TSKPANG" => $record->TSKPANG,
                "TMTPANG" => $record->TMTPANG,
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
        $query = $this->db->where('cont_id=', $id)->get('rpangkat r');
        return $query;
    }

    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'KSTLUD' => $post['rpangkat_kstlud'],
            'TSTLUD' => (!$post['rpangkat_tstlud']) ? $post['rpangkat_tstlud'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rpangkat_tstlud']))),
            'NSTLUD' => $post['rpangkat_nstlud'],
            'NNTBAKN' => $post['rpangkat_nntbakn'],
            'TNTBAKN' => (!$post['rpangkat_tntbakn']) ? $post['rpangkat_tntbakn'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rpangkat_tntbakn']))),
            'AKREDIT' => $post['rpangkat_akredit'],
            'NSKPANG' => $post['rpangkat_nskpang'],
            'TSKPANG' => (!$post['rpangkat_tskpang']) ? $post['rpangkat_tskpang'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rpangkat_tskpang']))),
            'TMTPANG' => (!$post['rpangkat_tmtpang']) ? $post['rpangkat_tmtpang'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rpangkat_tmtpang']))),
            'PTETAP' => $post['rpangkat_tmtpang'],
            'KGOLRU' => $post['rpangkat_kgolrulist'],
            'KNPANG' => $post['rpangkat_knpang'],
            'MSKERJA' => $post['rpangkat_mskerja'],
            'BLNKERJA' => $post['rpangkat_blnkerja'],
            'PLOKAL' => $post['rrpangkat_plokal']
        );


        $result = $this->db->insert($this->_table, $data);
        return $result;
    }


    function update($post = NULL)
    {
        $data = array(
            'KSTLUD' => $post['rpangkat_kstlud'],
            'TSTLUD' => (!$post['rpangkat_tstlud']) ? $post['rpangkat_tstlud'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rpangkat_tstlud']))),
            'NSTLUD' => $post['rpangkat_nstlud'],
            'NNTBAKN' => $post['rpangkat_nntbakn'],
            'TNTBAKN' => (!$post['rpangkat_tntbakn']) ? $post['rpangkat_tntbakn'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rpangkat_tntbakn']))),
            'AKREDIT' => $post['rpangkat_akredit'],
            'NSKPANG' => $post['rpangkat_nskpang'],
            'TSKPANG' => (!$post['rpangkat_tskpang']) ? $post['rpangkat_tskpang'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rpangkat_tskpang']))),
            'TMTPANG' => (!$post['rpangkat_tmtpang']) ? $post['rpangkat_tmtpang'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['rpangkat_tmtpang']))),
            'PTETAP' => $post['rpangkat_tmtpang'],
            'KGOLRU' => $post['rpangkat_kgolrulist'],
            'KNPANG' => $post['rpangkat_knpang'],
            'MSKERJA' => $post['rpangkat_mskerja'],
            'BLNKERJA' => $post['rpangkat_blnkerja'],
            'PLOKAL' => $post['rrpangkat_plokal']
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
