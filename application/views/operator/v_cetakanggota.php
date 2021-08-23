<h2>
    <center>Data Anggota</center>
</h2>
<link rel="stylesheet" href="<?= base_url() ?>/dist/css/adminlte.min.css">
<hr />
<table width="100%" style="text-align:center;" class="table table-bordered">
    <tr>
        <th>No</th>
        <th>NISN</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Ekstrakurikuler</th>
        <th>Status</th>
    </tr>
    <?php
    $no = 1;
    foreach ($dt as $row) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->nisn; ?></td>
            <td><?php echo $row->namasiswa; ?></td>
            <td><?php echo $row->jabatan ?></td>
            <td><?php echo $row->namaeskul; ?></td>
            <td><?php echo $row->status; ?></td>
        </tr>
    <?php
    }
    ?>
</table>