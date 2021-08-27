<h2>
    <center>Data Prestasi Ekstrakurikuler</center>
</h2>
<link rel="stylesheet" href="<?= base_url() ?>/dist/css/adminlte.min.css">
<hr />
<table width="100%" style="text-align:center;" class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Prestasi</th>
        <th>Tanggal</th>
        <th>Tingkat</th>
        <th>Esktrakurikuler</th>
        <th>Keterangan</th>
    </tr>
    <?php
    $no = 1;
    foreach ($dt as $row) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->namaprestasi; ?></td>
            <td><?php echo $row->tanggal; ?></td>
            <td><?php echo $row->tingkat; ?></td>
            <td><?php echo $row->namaeskul; ?></td>
            <td><?php echo $row->keterangan; ?></td>
        </tr>
    <?php
    }
    ?>
</table>