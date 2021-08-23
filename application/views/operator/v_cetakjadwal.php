<h2>
    <center>Data Jadwal</center>
</h2>
<link rel="stylesheet" href="<?= base_url() ?>/dist/css/adminlte.min.css">
<hr />
<table width="100%" style="text-align:center;" class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Hari/Waktu</th>
        <th>Nama Ekstrakurikuler</th>
    </tr>
    <?php
    $no = 1;
    foreach ($dt as $row) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->hari . "/" . $row->jammulai . " - " . $row->jamselesai; ?></td>
            <td><?php echo $row->namaeskul; ?></td>
        </tr>
    <?php
    }
    ?>
</table>