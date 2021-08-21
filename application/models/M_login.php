
<?php

class M_login extends CI_Model
{

    private $_table = 'akun';
    public function proses_login($username, $password, $level)
    {
        $query = $this->db->query("SELECT * from $this->_table where username='$username' and password='$password' and level = '$level'");
        return $query;
    }

    public function proses_daftar($post)
    {

        $this->db->trans_begin();

        $data_akun = array(
            'username' => $post['npsn'],
            'password' => md5($post['password']),
            'level' => 'Operator'
        );

        $query_insert_akun = $this->db->insert($this->_table, $data_akun);
        if ($query_insert_akun) {
            $idakun = $this->db->insert_id();

            $data_sekolah = array(
                'npsn' => $post['npsn'],
                'namasekolah' => $post['namasekolah'],
                'alamatsekolah' => $post['alamatsekolah'],
                'akreditasi' => $post['akreditasi'],
                'email' => $post['email'],
                'status' => 'Belum Verifikasi',
                'idakun' => $idakun
            );

            $this->db->insert('sekolah', $data_sekolah);
        }

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }

        return  $query_insert_akun;
    }

    public function get_data_sekolah($id)
    {
        $this->db->select('npsn,status,namasekolah');
        $this->db->where('idakun', $id);
        $query = $this->db->get('sekolah');
        return $query;
    }
}
