<h2>
    <center>Data Kelas</center>
</h2>
<link rel="stylesheet" href="<?= base_url() ?>/dist/css/adminlte.min.css">
<hr />
<table width="100%" style="text-align:center;" class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Kelas</th>
    </tr>
    <?php
    $no = 1;
    foreach ($dt as $row) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->namakelas; ?></td>
        </tr>
    <?php
    }
    ?>
</table>