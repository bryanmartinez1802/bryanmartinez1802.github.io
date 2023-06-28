


<?php if ($this->session->flashdata("confirmacion")): ?>
  <script type="text/javascript">
    toastr.success("<?php echo $this->session->flashdata("confirmacion"); ?>");
  </script>
  <?php  $this->session->set_flashdata("confirmacion","") ?>
<?php endif; ?>
<?php if ($this->session->flashdata("error")): ?>
  <script type="text/javascript">
    toastr.error("<?php echo $this->session->flashdata("error"); ?>");
  </script>
  <?php  $this->session->set_flashdata("error","") ?>
<?php endif; ?>


<footer class="main-footer">
  <div class="footer-left">
    Copyright &copy; 2023 <div class="bullet"></div> Design By <a href="https://www.fedex.com/">FEDEX</a>
  </div>
  <div class="footer-right">

  </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="<?php echo base_url(); ?>plantilla/assets/modules/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>plantilla/assets/modules/popper.js"></script>
<script src="<?php echo base_url(); ?>plantilla/assets/modules/tooltip.js"></script>
<script src="<?php echo base_url(); ?>plantilla/assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>plantilla/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?php echo base_url(); ?>plantilla/assets/modules/moment.min.js"></script>
<script src="<?php echo base_url(); ?>plantilla/assets/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="<?php echo base_url(); ?>plantilla/assets/modules/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url(); ?>plantilla/assets/modules/chart.min.js"></script>
<script src="<?php echo base_url(); ?>plantilla/assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>plantilla/assets/modules/summernote/summernote-bs4.js"></script>
<script src="<?php echo base_url(); ?>plantilla/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

<!-- Page Specific JS File -->
<script src="<?php echo base_url(); ?>plantilla/assets/js/page/index.js"></script>

<!-- Template JS File -->
<script src="<?php echo base_url(); ?>plantilla/assets/js/scripts.js"></script>
<script src="<?php echo base_url(); ?>plantilla/assets/js/custom.js"></script>
</body>
</html>
