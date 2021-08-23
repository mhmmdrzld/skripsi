<h2>
    <center>Data Siswa</center>
</h2>
<link rel="stylesheet" href="<?= base_url() ?>/dist/css/adminlte.min.css">
<hr />
<table width="100%" style="text-align:center;" class="table table-bordered">
    <tr>
        <th>No</th>
        <th>NISN</th>
        <th>Nama</th>
        <th>Tempat/Tgl Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Kelas</th>
        <th>Jurusan</th>
    </tr>
    <?php
    $no = 1;
    foreach ($dt as $row) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->nisn; ?></td>
            <td><?php echo $row->namasiswa; ?></td>
            <td><?php echo $row->tempatlahir . "/" . $row->tanggallahir; ?></td>
            <td><?php echo $row->jeniskelamin; ?></td>
            <td><?php echo $row->namakelas; ?></td>
            <td><?php echo $row->namajurusan; ?></td>
        </tr>
    <?php
    }
    ?>
</table>