</div>
            </div>
        </div>
    </div>
    
    <!-- Javascripts -->
    <script src="<?php echo BASE_URL . 'Assets/plugins/jquery/jquery-3.5.1.min.js';?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/bootstrap/js/bootstrap.min.js';?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/perfectscroll/perfect-scrollbar.min.js';?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/pace/pace.min.js';?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/apexcharts/apexcharts.min.js';?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/main.min.js';?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/sweetalert@11.js';?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/DataTables/datatables.min.js';?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/chart.min.js';?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/custom.js';?>"></script>
    <script>
            const BASE_URL ="<?php echo BASE_URL; ?>";
    </script>
    <?php if(!empty($data['script'])) { ?>
    <script src="<?php echo BASE_URL . 'Assets/js/pages/'. $data['script'] ;?>"></script>
    <?php }?>
</body>
</html>