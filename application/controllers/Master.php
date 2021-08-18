<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_master', 'master');
    }

    //data induk ====================================================
    public function get_lemari()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_lemari($id)->result();
        echo json_encode($data);
    }

    public function get_lantai()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_lantai($id)->result();
        echo json_encode($data);
    }

    public function get_mapel()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_mapel($id)->result();
        echo json_encode($data);
    }

    public function get_agama()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_agama($id)->result();
        echo json_encode($data);
    }

    public function get_status_pegawai()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_status_pegawai($id)->result();
        echo json_encode($data);
    }

    public function get_jenis_pegawai()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_jenis_pegawai($id)->result();
        echo json_encode($data);
    }

    public function get_kedudukan_pegawai()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_kedudukan_pegawai($id)->result();
        echo json_encode($data);
    }

    //pejabat yang menetapkan
    public function get_pejabat()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_pejabat($id)->result();
        echo json_encode($data);
    }

    public function get_dukpej()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_dukpej($id)->result();
        echo json_encode($data);
    }

    public function get_golongan_ruang()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_golongan_ruang($id)->result();
        echo json_encode($data);
    }

    public function get_instansi_induk()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_instansi_induk($id)->result();
        echo json_encode($data);
    }

    public function get_jenis_jabatan()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_jenis_jabatan($id)->result();
        echo json_encode($data);
    }

    public function get_eselon()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_eselon($id)->result();
        echo json_encode($data);
    }

    public function get_kelompok_jabatan() //jenis jabatan struktural
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_kelompok_jabatan($id)->result();
        echo json_encode($data);
    }

    public function get_jabatan_fungsional() //fungsional tertentu
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_jabatan_fungsional($id)->result();
        echo json_encode($data);
    }

    public function get_jabatan_struktural() //pelaksana
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_jabatan_struktural($id)->result();
        echo json_encode($data);
    }


    public function get_pendidikan_struktural()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_pendidikan_struktural($id)->result();
        echo json_encode($data);
    }

    public function get_pendidikan_fungsional()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_pendidikan_fungsional($id)->result();
        echo json_encode($data);
    }

    public function get_pendidikan_teknis()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_pendidikan_teknis($id)->result();
        echo json_encode($data);
    }

    public function get_kursus()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_kursus($id)->result();
        echo json_encode($data);
    }

    public function get_kedudukan_pegawai1()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_kedudukan_pegawai1($id)->result();
        echo json_encode($data);
    }

    public function get_stlud()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_stlud($id)->result();
        echo json_encode($data);
    }

    public function get_kenaikan_pangkat()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_kenaikan_pangkat($id)->result();
        echo json_encode($data);
    }

    public function get_tpu()
    {
        $get = $this->input->get(NULL, true);
        $data = $this->master->get_tpu($get)->result();
        echo json_encode($data);
    }

    //riwayat ====================================================
    public function get_jenis_pensiun()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_jenis_pensiun($id)->result();
        echo json_encode($data);
    }

    public function get_pekerjaan()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_pekerjaan($id)->result();
        echo json_encode($data);
    }

    public function get_bidang_karya_tulis()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_bidang_karya_tulis($id)->result();
        echo json_encode($data);
    }

    public function get_keterangan() //sekolah
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_keterangan($id)->result();
        echo json_encode($data);
    }

    public function get_tanda_jasa()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_tanda_jasa($id)->result();

        echo json_encode($data);
    }

    public function get_tanda_jasa_img()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_tanda_jasa_img($id)->row();
        $data->ITANDAJASA = base64_encode($data->ITANDAJASA);
        echo json_encode($data);
    }

    public function get_jenis_cuti()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_jenis_cuti($id)->result();
        echo json_encode($data);
    }

    //cari ================================

    public function get_tabel_pegawai()
    {
        // POST data
        $postData = $this->input->post(NULL, true);
        // Get data
        $data = $this->master->get_tabel_pegawai($postData);

        echo json_encode($data);
    }

    public function cari_pegawai()
    {

        $nip = preg_replace('/\s+/', '', $this->input->get('nip_cari', TRUE));
        $nama = $this->input->get('nama_cari', TRUE);

        if (!$nip && !$nama) { //jika nip dan nama kosng
            $this->session->unset_userdata('nip');
            echo json_encode(array('status' => 'nip dan nama kosong'));
        } else {
            if ($nip != '' || $nama != '') { //jika nip atau nama tidak kosong
                if (!$nama) {
                    nip_ada:
                    $this->db->where('nip', $nip);
                    $query = $this->db->get('identpeg');
                    if ($query->num_rows() != 0) {
                        $this->session->unset_userdata('nip');
                        $this->session->set_userdata(array('nip' => $nip));
                        echo json_encode(array('nip' => $nip, 'status' => 'berhasil nip'));
                        // echo "jumlah row :" . $query->num_rows() . " > set session";
                    } else {
                        $this->session->unset_userdata('nip');
                        echo json_encode(array('status' => 'gagal'));
                        $this->session->set_flashdata('alert', ['type' => 'error', 'message' => 'Nip Tidak Ditemukan']);
                        // echo "jumlah row :" . $query->num_rows() . " > set flash nip tidak ditemukan";
                    }
                } else {
                    if (!$nip) {
                        // echo "kolom nama ada";
                        $this->db->like('NAMA', $nama);
                        $query = $this->db->get('identpeg');
                        if ($query->num_rows() == 1) {
                            foreach ($query->result() as $row) {
                                $nip = $row->nip;
                            }
                            $this->session->unset_userdata('nip');
                            $this->session->set_userdata(array('nip' => $nip));
                            echo json_encode(array('nip' => $nip, 'nama' => $nama, 'status' => 'berhasil nama'));
                            // echo "jumlah row :" . $query->num_rows() . " > set session";
                        } elseif ($query->num_rows() >= 1) {
                            echo json_encode(array('status' => 'modal', 'data' => $nama));
                            // echo "jumlah row :" . $query->num_rows() . " > muncul modal pegawao";
                        } else {
                            $this->session->unset_userdata('nip');
                            echo json_encode(array('status' => 'gagal'));
                            $this->session->set_flashdata('alert', ['type' => 'error', 'message' => 'Data Tidak Ditemukan']);
                            // echo "jumlah row :" . $query->num_rows() . " > set flash data tidak ditemukan";
                        }
                    } else {
                        goto nip_ada;
                        echo "kolom nama dan nip terisi > berarti goto ke atas pake nip";
                    }
                }
            }
        }
    }

    public function get_cari_pegawai()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_cari_pegawai($id)->row();
        $data->PHOTO = base64_encode($data->PHOTO);
        echo json_encode($data);
    }

    //end cari ===============================

    public function get_provinsi()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_provinsi($id)->result();
        echo json_encode($data);
    }

    public function get_kabupaten()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_kabupaten($id)->result();
        echo json_encode($data);
    }

    public function get_kecamatan()
    {
        $get = $this->input->get(NULL, true);
        $data = $this->master->get_kecamatan($get)->result();
        echo json_encode($data);
    }

    public function get_desa()
    {
        $get = $this->input->get(NULL, true);
        $data = $this->master->get_desa($get)->result();
        echo json_encode($data);
    }

    public function get_unit_organisasi()
    {
        $data = $this->master->get_unit_organisasi()->result();
        echo json_encode($data);
    }

    public function get_unit_kerja()
    {
        $get = $this->input->get(null, true);
        $data = $this->master->get_unit_kerja($get)->result();
        echo json_encode($data);
    }

    public function get_bag_unit_kerja()
    {
        $get = $this->input->get(null, true);
        $data = $this->master->get_bag_unit_kerja($get)->result();
        echo json_encode($data);
    }

    public function get_subbag_unit_kerja()
    {
        $get = $this->input->get(null, true);
        $data = $this->master->get_subbag_unit_kerja($get)->result();
        echo json_encode($data);
    }

    public function get_kel_pendum()
    {
        $data = $this->master->get_kel_pendum()->result();
        echo json_encode($data);
    }

    public function get_fak_pendum()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->master->get_fak_pendum($id)->result();
        echo json_encode($data);
    }

    public function get_det_pendum()
    {
        $get = $this->input->get(NULL, true);
        $data = $this->master->get_det_pendum($get)->result();
        echo json_encode($data);
    }

    public function unset_nip()
    {
        $this->session->unset_userdata('nip');
        echo json_encode(array('status' => 'berhasil'));
    }
}
