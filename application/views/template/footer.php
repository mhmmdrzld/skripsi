<script>
  $(document).ready(function() {
    console.log("ready!");
  });
</script>
<!-- Main Footer -->
<footer class="main-footer">
  <!-- To the right -->
  <div class="float-right d-none d-sm-inline">
    Sistem Informasi Manajemen Kepegawaian
  </div>
  <!-- Default to the left -->
  <strong>Copyright &copy; <?= date('Y') ?> <a href="<?= base_url() ?>">SIMPEG</a>.</strong> Badan Kepegawaian dan Pengembangan Sumber Daya Manusia .
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- InputMask -->
<script src="<?= base_url() ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>plugins/inputmask/jquery.inputmask.min.js"></script>
<script src="<?= base_url() ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>plugins/jquery-validation/additional-methods.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>dist/js/adminlte.min.js"></script>
<?php $this->view('template/plugins'); ?>
</body>

</html>