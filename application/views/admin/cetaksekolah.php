<h2>
    <center>Data Sekolah</center>
</h2>
<link rel="stylesheet" href="<?= base_url() ?>/dist/css/adminlte.min.css">
<hr />
<table width="100%" style="text-align:center;" class="table table-bordered">
    <tr>
        <th>No</th>
        <th>NPSN</th>
        <th>Nama Sekolah</th>
        <th>Akreditasi</th>
        <th>Alamat</th>
        <th>E-mail</th>
        <th>Status</th>
    </tr>
    <?php
    $no = 1;
    foreach ($dt as $row) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->npsn; ?></td>
            <td><?php echo $row->namasekolah; ?></td>
            <td><?php echo $row->akreditasi; ?></td>
            <td><?php echo $row->alamatsekolah; ?></td>
            <td><?php echo $row->email; ?></td>
            <td><?php echo $row->status; ?></td>
        </tr>
    <?php
    }
    ?>
</table>