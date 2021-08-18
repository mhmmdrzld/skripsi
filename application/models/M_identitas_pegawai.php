<?php

class M_identitas_pegawai extends CI_Model
{
    private $_table = 'identpeg';

    function get_data($nip)
    {
        $query = $this->db->where('nip=', $nip)->get($this->_table);
        return $query;
    }


    function insert($post = NULL)
    {
        $data = array(
            'nip' => $post['nip'],
            'NAMA' => $post['nama'],
            'GLDEPAN' => $post['gelar_depan'],
            'GLBELAKANG' => $post['gelar_belakang'],
            'KTLAHIR' => $post['tempat_lahir'],
            'TLAHIR' => (!$post['tangggal_lahir']) ? $post['tangggal_lahir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['tangggal_lahir']))),
            'KJKEL' => $post['jk'],
            'KAGAMA' => $post['select_agama'],
            'KSTATUS' => $post['select_status'],
            'KJPEG' => $post['select_jenis'],
            'KDUDUK' => $post['select_kedudukan'],
            'KSKAWIN' => $post['status_kawin'],
            'SUKU' => $post['sukubangsa'],
            'KGOLDAR' => $post['goldar'],
            'ALJALAN' => $post['alamat'],
            'ALRT' => $post['rt'],
            'ALRW' => $post['rw'],
            'ALTELP' => $post['altelp'],
            'ALKOPROP' => $post['select_prov'],
            'ALKOKAB' => $post['select_kab_kota'],
            'ALKOKEC' => $post['select_kec'],
            'ALKODES' => $post['select_desa'],
            'KPOS' => $post['kode_pos'],
            'EMAIL' => $post['email'],
            // 'KAPARPOL' => $post['nama'],
            // 'NPAP_G' => $post['nama'],
            'NKARPEG' => $post['no_karpeg'],
            'NASKES' => $post['no_askes'],
            'NTASPEN' => $post['no_askes'],
            'NKARIS_SU' => $post['no_kartu_suami_istri'],
            'NPWP' => $post['npwp'],
            'NOPEN' => $post['ktp'],
            // 'FILE_BMP' => $post['nama'],
            // 'AKTIF' => $post['nama'],
            // 'JJIWA' => $post['nama'],
            'ALKOPROP2' => $post['select_prov_lhr'],
            'ALKOKAB2' => $post['select_kab_kota_lhr'],
            'ALKOKEC2' => $post['select_kec_lhr'],
            'ALKODES2' => $post['select_desa_lhr'],
            'SUKU_BANGSA' => $post['sukubangsa'],
            'MARGA' => $post['marga'],
            'BAPERTARUM' => $post['bapertarum'],
            'TGL_BAPERTARUM' => (!$post['tgl_bapertarum']) ? $post['tgl_bapertarum'] : date("Y-m-d", strtotime(str_replace('/', '-', $post['tgl_bapertarum']))),
            'JUMLAH_YANG_DITERIMA_DR_BAPERTARUM' => $post['jumlah_bapertarum'],
            // 'PHOTO' => $post['nama'],
            'NAKTE' => $post['no_akte'],
            // 'PPK' => $post['nama'],
            // 'LAPKEKAYAAN' => $post['nama'],
            'nourut' => $post['no_urut'],
            'klantai' => $post['select_lantai'],
            'klemari' => $post['select_lemari'],
            'kpotret' => $post['sidik_jari_kpe'],
            'iden' => $post['iden'],
            'npelajaran' => $post['select_mapel'],
            'kpupns' => $post['pendataan_pupns'],
            'register' => $post['kode_register']
        );

        $result = $this->db->insert($this->_table, $data);
        return $result;
    }

    function update($post = NULL)
    {
        $data = array(
            'NAMA' => $post['nama'],
            'GLDEPAN' => $post['gelar_depan'],
            'GLBELAKANG' => $post['gelar_belakang'],
            'KTLAHIR' => $post['tempat_lahir'],
            'TLAHIR' => (!$post['tangggal_lahir']) ? $post['tangggal_lahir'] :  date("Y-m-d", strtotime(str_replace('/', '-', $post['tangggal_lahir']))),
            'KJKEL' => $post['jk'],
            'KAGAMA' => $post['select_agama'],
            'KSTATUS' => $post['select_status'],
            'KJPEG' => $post['select_jenis'],
            'KDUDUK' => $post['select_kedudukan'],
            'KSKAWIN' => $post['status_kawin'],
            'SUKU' => $post['sukubangsa'],
            'KGOLDAR' => $post['goldar'],
            'ALJALAN' => $post['alamat'],
            'ALRT' => $post['rt'],
            'ALRW' => $post['rw'],
            'ALTELP' => $post['altelp'],
            'ALKOPROP' => $post['select_prov'],
            'ALKOKAB' => $post['select_kab_kota'],
            'ALKOKEC' => $post['select_kec'],
            'ALKODES' => $post['select_desa'],
            'KPOS' => $post['kode_pos'],
            'EMAIL' => $post['email'],
            // 'KAPARPOL' => $post['nama'],
            // 'NPAP_G' => $post['nama'],
            'NKARPEG' => $post['no_karpeg'],
            'NASKES' => $post['no_askes'],
            'NTASPEN' => $post['no_askes'],
            'NKARIS_SU' => $post['no_kartu_suami_istri'],
            'NPWP' => $post['npwp'],
            'NOPEN' => $post['ktp'],
            // 'FILE_BMP' => $post['nama'],
            // 'AKTIF' => $post['nama'],
            // 'JJIWA' => $post['nama'],
            'ALKOPROP2' => $post['select_prov_lhr'],
            'ALKOKAB2' => $post['select_kab_kota_lhr'],
            'ALKOKEC2' => $post['select_kec_lhr'],
            'ALKODES2' => $post['select_desa_lhr'],
            'SUKU_BANGSA' => $post['sukubangsa'],
            'MARGA' => $post['marga'],
            'BAPERTARUM' => $post['bapertarum'],
            'TGL_BAPERTARUM' => (!$post['tgl_bapertarum']) ? $post['tgl_bapertarum'] : date("Y-m-d", strtotime(str_replace('/', '-', $post['tgl_bapertarum']))),
            'JUMLAH_YANG_DITERIMA_DR_BAPERTARUM' => $post['jumlah_bapertarum'],
            // 'PHOTO' => $post['nama'],
            'NAKTE' => $post['no_akte'],
            // 'PPK' => $post['nama'],
            // 'LAPKEKAYAAN' => $post['nama'],
            'nourut' => $post['no_urut'],
            'klantai' => $post['select_lantai'],
            'klemari' => $post['select_lemari'],
            'kpotret' => $post['sidik_jari_kpe'],
            'iden' => $post['iden'],
            'npelajaran' => $post['select_mapel'],
            'kpupns' => $post['pendataan_pupns'],
            'register' => $post['kode_register']
        );


        $this->db->where('nip',  $post['nip']);
        $result = $this->db->update($this->_table, $data);
        return $result;
    }
}
