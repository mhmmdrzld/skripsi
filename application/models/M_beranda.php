
<?php

class M_beranda extends CI_Model
{


    function GetBerandaSiswa($post)
    {
        $query = $this->db->query('
        select
            (
            select
                count(*)
            from
                eskul
            where
                npsn = "' . $post['npsn'] . '") eskul,
            (
            select
                count(*)
            from
                anggota
            where
                nisn ="' . $post['nisn'] . '"
                and status = "Aktif") eskulsaya')->row();
        return $query;
    }

    function GetBerandaOperator($post)
    {
        $query = $this->db->query('
        select
            (
            select
                count(*)
            from
                siswa
            where
                npsn = "' . $post['npsn'] . '") siswa,
            (
            select
                count(*)
            from
                kelas
            where
                npsn = "' . $post['npsn'] . '") kelas,
            (
            select
                count(*)
            from
                jurusan
            where
                npsn = "' . $post['npsn'] . '") jurusan,
            (
            select
                count(*)
            from
                eskul
            where
                npsn = "' . $post['npsn'] . '") eskul')->row();
        return $query;
    }

    function GetBerandaAdmin()
    {
        $query = $this->db->query('
        select
            (
            select
                count(*)
            from
                sekolah
            where
                status = "Aktif") aktif,
                    (
            select
                count(*)
            from
                sekolah
            where
                status = "Tidak Aktif") taktif,
                    (
            select
                count(*)
            from
                sekolah
            where
                status = "Belum Verifikasi") belum')->row();
        return $query;
    }

    public function GetBerita($id)
    {
        return $this->db->query('
        select
	*
from
	BERITA
where
	IDKEGIATAN in (
	select
		id
	from
		ESKUL E
	where
		npsn = "' . $id . '"
union
	select
    "' . $id . '")
  

order by tanggalberita desc

limit 6

        ')->result();
    }
}
