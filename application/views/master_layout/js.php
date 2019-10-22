
    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url().'asset/robust/app-assets/js/core/libraries/jquery.min.js' ?>" type="text/javascript"></script>
   
    <script src="<?php echo base_url().'asset/robust/app-assets/vendors/js/ui/tether.min.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'asset/robust/app-assets/js/core/libraries/bootstrap.min.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'asset/robust/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'asset/robust/app-assets/vendors/js/ui/unison.min.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'asset/robust/app-assets/vendors/js/ui/blockUI.min.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'asset/robust/app-assets/vendors/js/ui/jquery.matchHeight-min.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'asset/robust/app-assets/vendors/js/ui/screenfull.min.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'asset/robust/app-assets/vendors/js/extensions/pace.min.js' ?>" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url().'asset/robust/app-assets/vendors/js/charts/chart.min.js' ?>" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="<?php echo base_url().'asset/robust/app-assets/js/core/app-menu.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'asset/robust/app-assets/js/core/app.js' ?>" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?php echo base_url().'asset/robust/app-assets/js/scripts/pages/dashboard-lite.js' ?>" type="text/javascript"></script>
    
    <script type="text/javascript" src="<?php echo base_url().'asset/plugin/datatable/media/js/jquery.dataTables.js'?> "></script>
    <script type="text/javascript" src="<?php echo base_url().'asset/plugin/datatable/media/js/dataTables.buttons.min.js' ?> "></script>
    <script type="text/javascript" src="<?php echo base_url().'asset/plugin/datatable/media/js/buttons.flash.min.js' ?> "></script>
    <script type="text/javascript" src="<?php echo base_url().'asset/plugin/datatable/media/js/jszip.min.js'?> "></script>
    <script type="text/javascript" src="<?php echo base_url().'asset/plugin/datatable/media/js/pdfmake.min.js' ?> "></script>
    <script type="text/javascript" src="<?php echo base_url().'asset/plugin/datatable/media/js/vfs_fonts.js'?> "></script>
    <script type="text/javascript" src="<?php echo base_url().'asset/plugin/datatable/media/js/buttons.html5.min.js'?> "></script>
    <script type="text/javascript" src="<?php echo base_url().'asset/plugin/datatable/media/js/buttons.print.min.js'?> "></script>


    <!-- END PAGE LEVEL JS-->

<script type="text/javascript">
$(document).ready(function() {
    $('#list_data').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'csv', 'excel', 'pdf'
        ]
    } );
} );
</script>