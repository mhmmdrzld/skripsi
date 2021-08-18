<?php

class M_master extends CI_Model
{
    //data induk ====================================================

    //identitas pegawai
    function get_lemari($id)
    {
        ($id != NULL ? $this->db->where('klemari=', $id) : '');
        $this->db->order_by('nlemari');
        $query = $this->db->get('lemari');
        return $query;
    }

    function get_lantai($id)
    {
        ($id != NULL ? $this->db->where('klantai=', $id) : '');
        $this->db->order_by('nlantai');
        $query = $this->db->get('lantai');
        return $query;
    }

    function get_mapel($id)
    {
        ($id != NULL ? $this->db->where('kpelajaran=', $id) : '');
        $this->db->order_by('npelajaran');
        $query = $this->db->get('mata_pelajaran');
        return $query;
    }

    function get_agama($id)
    {
        ($id != NULL ? $this->db->where('KAGAMA=', $id) : '');
        $this->db->order_by('NAGAMA');
        $query = $this->db->get('agama');
        return $query;
    }

    function get_status_pegawai($id)
    {
        ($id != NULL ? $this->db->where('KSTATUS=', $id) : '');
        $this->db->order_by('NSTATUS');
        $query = $this->db->get('statpeg');
        return $query;
    }

    function get_jenis_pegawai($id)
    {
        ($id != NULL ? $this->db->where('KJPEG=', $id) : '');
        $this->db->order_by('NJPEG');
        $query = $this->db->get('jenpeg');
        return $query;
    }

    function get_kedudukan_pegawai($id)
    {
        ($id != NULL ? $this->db->where('KDUDUK=', $id) : '');
        $this->db->order_by('NDUDUK');
        $query = $this->db->get('dukpns');
        return $query;
    }

    //acpns
    function get_dukpej($id)
    {
        ($id != NULL ? $this->db->where('KDUKJAB=', $id) : '');
        $this->db->order_by('NDUKJAB');
        $query = $this->db->get('dukpej');
        return $query;
    }

    function get_tpu($id)
    {
        ($id != NULL ? $this->db->where('KJUR=', $id) : '');
        $this->db->select('SUBSTR(KJUR,1,2) KJUR,NJUR');
        $this->db->order_by('KJUR');
        $query = $this->db->get('tpu');
        return $query;
    }

    //pejabat yang menetapkan
    function get_pejabat($id)
    {
        ($id != NULL ? $this->db->where('KPEJ=', $id) : '');
        $this->db->order_by('KPEJ'); //NPEJ
        $query = $this->db->get('pejabat');
        return $query;
    }

    function get_golongan_ruang($id)
    {
        ($id != NULL ? $this->db->where('KGOLRU=', $id) : '');
        $this->db->order_by('NPANGKAT');
        $query = $this->db->get('golruang');
        return $query;
    }

    //tempat kerja
    function get_instansi_induk($id)
    {
        ($id != NULL ? $this->db->where('KINSIND=', $id) : '');
        $this->db->order_by('KINSIND', 'DESC'); //NINSIND
        $query = $this->db->get('insinduk');
        return $query;
    }

    //masuk keluar
    function get_kedudukan_pegawai1($id)
    {
        ($id != NULL ? $this->db->where('KDUDUK=', $id) : '');
        $this->db->order_by('NDUDUK');
        $query = $this->db->get('dukpns1');
        return $query;
    }

    //jabatan terakhir
    function get_jenis_jabatan($id)
    {
        ($id != NULL ? $this->db->where('KJENJAB=', $id) : '');
        $this->db->order_by('KJENJAB'); //NJENJAB
        $query = $this->db->get('jenjab');
        return $query;
    }

    function get_eselon($id)
    {
        $this->db->order_by('NESELON');
        ($id != NULL ? $this->db->where('KESELON=', $id) : '');
        $query = $this->db->get('eselon');
        return $query;
    }

    function get_kelompok_jabatan($id) //jenis jabatan struktural
    {
        ($id != NULL ? $this->db->where('KJAB=', $id) : '');
        $this->db->order_by('KJAB'); //NJAB
        $query = $this->db->get('klmpjab');
        return $query;
    }

    function get_jabatan_fungsional($id) //fungsional tetetutu
    {
        ($id != NULL ? $this->db->where('KJAB=', $id) : '');
        $this->db->order_by('KJAB'); //NJAB
        $query = $this->db->get('jabfung');
        return $query;
    }

    function get_jabatan_struktural($id) //pelaksana
    {
        ($id != NULL ? $this->db->where('KJAB=', $id) : '');
        $this->db->order_by('KJAB'); //NJAB
        $query = $this->db->get('jabstr');
        return $query;
    }

    //pangkat akhir
    function get_stlud($id)
    {
        ($id != NULL ? $this->db->where('KSTLUD=', $id) : '');
        $this->db->order_by('NSTLUD');
        $query = $this->db->get('stlud');
        return $query;
    }

    function get_kenaikan_pangkat($id)
    {
        ($id != NULL ? $this->db->where('KNPANG=', $id) : '');
        $this->db->order_by('NNPANG');
        $query = $this->db->get('naikpang');
        return $query;
    }

    //pendidikan akhir
    function get_pendidikan_struktural($id)
    {
        ($id != NULL ? $this->db->where('KDIKSTR=', $id) : '');
        $this->db->order_by('NDIKSTR');
        $query = $this->db->get('dikstr');
        return $query;
    }

    function get_pendidikan_fungsional($id)
    {
        ($id != NULL ? $this->db->where('KDIKFUNG=', $id) : '');
        $this->db->order_by('NDIKFUNG');
        $query = $this->db->get('dikfung');
        return $query;
    }

    function get_pendidikan_teknis($id)
    {
        ($id != NULL ? $this->db->where('KDIKTEK=', $id) : '');
        $this->db->order_by('NDIKTEK');
        $query = $this->db->get('diktek');
        return $query;
    }

    function get_kursus($id)
    {
        ($id != NULL ? $this->db->where('KKURSUS=', $id) : '');
        $this->db->order_by('NKURSUS');
        $query = $this->db->get('kursus');
        return $query;
    }

    //riwayat ====================================================
    function get_jenis_pensiun($id)
    {
        ($id != NULL ? $this->db->where('KJPENSIUN=', $id) : '');
        $this->db->order_by('NJPENSIUN');
        $query = $this->db->get('jpensiun');
        return $query;
    }

    function get_pekerjaan($id)
    {
        ($id != NULL ? $this->db->where('KKERJA=', $id) : '');
        $this->db->order_by('NKERJA');
        $query = $this->db->get('kerja');
        return $query;
    }

    function get_bidang_karya_tulis($id)
    {
        ($id != NULL ? $this->db->where('KBIDANG=', $id) : '');
        $this->db->order_by('NBIDANG');
        $query = $this->db->get('kartulbid');
        return $query;
    }

    function get_keterangan($id)
    {
        ($id != NULL ? $this->db->where('ket=', $id) : '');
        $this->db->order_by('ket');
        $query = $this->db->get('sekolah');
        return $query;
    }

    function get_tanda_jasa($id)
    {
        ($id != NULL ? $this->db->where('KTANDAJASA=', $id) : '');
        $this->db->select('KTANDAJASA,NTANDAJASA');
        $this->db->order_by('NTANDAJASA');
        $query = $this->db->get('tandajasa');
        return $query;
    }

    function get_jenis_cuti($id)
    {
        ($id != NULL ? $this->db->where('KCUTI=', $id) : '');
        $this->db->order_by('NCUTI');
        $query = $this->db->get('jcuti');
        return $query;
    }

    function get_tanda_jasa_img($id)
    {
        ($id != NULL ? $this->db->where('KTANDAJASA=', $id) : '');
        $this->db->order_by('KTANDAJASA');
        $this->db->select('ITANDAJASA');
        $query = $this->db->get('tandajasa');
        return $query;
    }

    // start cari ==================================
    function get_tabel_pegawai($postData = null)
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
        $ket = $postData['ket'];
        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (identpeg.nip like '%" . $searchValue . "%' or identpeg.NAMA like '%" . $searchValue . "%' or jakhir.NJAB like '%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->like('identpeg.NAMA', $ket);
        $this->db->join('jakhir', 'jakhir.nip = identpeg.nip', 'right');
        $records = $this->db->get('identpeg')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->like('identpeg.NAMA', $ket);
        $this->db->join('jakhir', 'jakhir.nip = identpeg.nip', 'right');
        $records = $this->db->get('identpeg')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('identpeg.nip,NAMA,PHOTO,GLDEPAN,GLBELAKANG,jakhir.NJAB');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->like('identpeg.NAMA', $ket);
        $this->db->join('jakhir', 'jakhir.nip = identpeg.nip', 'right');
        $records = $this->db->get('identpeg')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "nip" => $record->nip,
                "nama" => $record->NAMA,
                "gldepan" => $record->GLDEPAN,
                "glbelakang" => $record->GLBELAKANG,
                "photo" => base64_encode($record->PHOTO),
                "ket" => $record->NJAB
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

    function get_cari_pegawai($id)
    {

        $this->db->where('i.nip=', $id);
        $this->db->select("i.nip,
        CONCAT_WS(' ',GLDEPAN,NAMA,GLBELAKANG) as NAMA,
        date_format(TLAHIR,'%d-%m-%Y') TLAHIR,
        PHOTO,
        s.NSTATUS,
        g.PANGKAT");
        $this->db->join('statpeg s', 's.KSTATUS = i.KSTATUS', 'left');
        $this->db->join('pakhir p', 'p.nip = i.nip', 'left');
        $this->db->join('golruang g', 'p.KGOLRU = g.KGOLRU ', 'left');
        $query = $this->db->get('identpeg i');

        return $query;
    }

    //end cari  =================================

    function get_provinsi($id)
    {
        ($id != NULL ? $this->db->where('KWIL=', $id) : '');
        $this->db->order_by('KWIL');
        $this->db->like('KWIL', '00000000', 'before');
        $this->db->select('SUBSTR(KWIL, 1, 2) KWIL,NWIL');
        $query = $this->db->get('wilayah');
        return $query;
    }

    function get_kabupaten($id)
    {

        $this->db->order_by('KWIL');
        $where = "KWIL != '" . $id . "00000000' and KWIL LIKE '" . $id . "%000000'";
        $this->db->where($where);
        $this->db->select('SUBSTR(KWIL, 3, 2) KWIL,NWIL');
        $query = $this->db->get('wilayah');
        return $query;
    }


    function get_kecamatan($get)
    {
        $this->db->order_by('KWIL');
        $where = "KWIL != '" . $get['id_prov'] . $get['id_kab'] . "000000'  and KWIL LIKE '" .  $get['id_prov'] . $get['id_kab'] . "%0000'";
        $this->db->where($where);
        $this->db->select('SUBSTR(KWIL, 5, 2) KWIL,NWIL');
        $query = $this->db->get('wilayah');
        return $query;
    }

    function get_desa($get)
    {
        $this->db->order_by('KWIL');
        $where = "KWIL != '" . $get['idprov_idkab_idkec'] . "0000' and KWIL LIKE '" .   $get['idprov_idkab_idkec'] . "%'";
        $this->db->where($where);
        $this->db->select('SUBSTR(KWIL, 7, 4) KWIL,NWIL');
        $query = $this->db->get('wilayah');
        return $query;
    }

    function get_unit_organisasi()
    {
        $this->db->order_by('KUNKER');
        $this->db->like('KUNKER', '000000', 'before');
        $this->db->select('SUBSTR(KUNKER, 1, 4) KUNKER,NUNKER');
        $query = $this->db->get('unkerja');
        return $query;
    }

    function get_unit_kerja($get)
    {
        $this->db->order_by('KUNKER');
        $where = "KUNKER != '" . $get['kodeorg'] . "000000' and KUNKER LIKE '" . $get['kodeorg'] . "%0000'";
        $this->db->where($where);
        $this->db->select('SUBSTR(KUNKER, 5, 2) KUNKER,NUNKER');
        $query = $this->db->get('unkerja');
        return $query;
    }

    function get_bag_unit_kerja($get)
    {
        $this->db->order_by('KUNKER');
        $where = "KUNKER != '" . $get['kodeorg'] . $get['kodekerja'] . "0000' and KUNKER LIKE '" . $get['kodeorg'] . $get['kodekerja'] . "%00'";
        $this->db->where($where);
        $this->db->select('SUBSTR(KUNKER, 7, 2) KUNKER,NUNKER');
        $query = $this->db->get('unkerja');
        return $query;
    }

    function get_subbag_unit_kerja($get)
    {
        $this->db->order_by('KUNKER');
        $where = "KUNKER != '" . $get['kodeorg'] . $get['kodekerja'] . $get['kodebag'] . "00' and KUNKER LIKE '" . $get['kodeorg'] . $get['kodekerja'] . $get['kodebag'] . "%'";
        $this->db->where($where);
        $this->db->select('SUBSTR(KUNKER, 9, 2) KUNKER,NUNKER');
        $query = $this->db->get('unkerja');
        return $query;
    }

    function get_kel_pendum()
    {
        $this->db->order_by('KJUR');
        $this->db->like('KJUR', '00000', 'before');
        $this->db->select('SUBSTR(KJUR, 1, 2) KJUR,NJUR');
        $query = $this->db->get('jurpend');
        return $query;
    }

    function get_fak_pendum($id)
    {

        $this->db->order_by('KJUR');
        $where = "KJUR != '" . $id . "00000' and KJUR LIKE '" . $id . "%000'";
        $this->db->where($where);
        $this->db->select('SUBSTR(KJUR, 3, 2) KJUR,NJUR');
        $query = $this->db->get('jurpend');
        return $query;
    }


    function get_det_pendum($get)
    {
        $this->db->order_by('KJUR');
        $where = "KJUR != '" . $get['kel_pendum'] . $get['fak_pendum'] . "000'  and KJUR LIKE '" .  $get['kel_pendum'] . $get['fak_pendum'] . "%'";
        $this->db->where($where);
        $this->db->select('SUBSTR(KJUR, 5, 3) KJUR,NJUR');
        $query = $this->db->get('jurpend');
        return $query;
    }
}
