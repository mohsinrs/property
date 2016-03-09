<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 3.8.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Metronic | <?php echo $title; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('/public/global/plugins/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('/public/global/plugins/simple-line-icons/simple-line-icons.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('/public/global/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('/public/global/plugins/uniform/css/uniform.default.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('/public/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('/public/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') ?>" rel="stylesheet" type="text/css" />

        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
        <link href="<?php echo base_url('/public/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('/public/admin/pages/css/profile.css" rel="stylesheet" type="text/css') ?>"/>
        <link href="<?php echo base_url('/public/global/plugins/bootstrap-select/bootstrap-select.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('/public/global/plugins/select2/select2.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('/public/global/plugins/jquery-multi-select/css/multi-select.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('/public/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo base_url('/public/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('/public/global/plugins/fullcalendar/fullcalendar.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('/public/global/plugins/jqvmap/jqvmap/jqvmap.css') ?>" rel="stylesheet" type="text/css"/>
        <!-- END PAGE LEVEL PLUGIN STYLES -->
        <!-- BEGIN PAGE STYLES -->
        <link href="<?php echo base_url('/public/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('/public/global/plugins/jquery-tags-input/jquery.tagsinput.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('/public/admin/pages/css/tasks.css') ?>" rel="stylesheet" type="text/css') ?>"/>
        <!-- END PAGE STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link href="<?php echo base_url('/public/global/plugins/typeahead/typeahead.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('/public/global/css/components.css') ?>" id="style_components" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('/public/global/css/plugins.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('/public/admin/layout/css/layout.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('/public/admin/layout/css/themes/darkblue.css') ?>" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="<?php echo base_url('/public/admin/layout/css/custom.css') ?>" rel="stylesheet" type="text/css"/>
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico"/>
        
        <script src="<?php echo base_url('/public/global/plugins/jquery.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/jquery-migrate.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/scripts/common.js') ?>" ></script>

    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
    <!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
    <!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
    <!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
    <!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
    <!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
    <!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
    <!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
    <!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
    <body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
        <!-- BEGIN HEADER -->
        <?php $this->load->view('admin/layout/header.php'); ?>
        <!-- END HEADER -->
        <div class="clearfix">
        </div>
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <?php $this->load->view('admin/layout/sidebar.php'); ?>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <?php echo $content; ?>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <?php $this->load->view('admin/layout/footer.php'); ?>
        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        <!--[if lt IE 9]>
        <script src="<?php echo base_url('/public/global/plugins/respond.min.js') ?>"></script>
        <script src="<?php echo base_url('/public/global/plugins/excanvas.min.js') ?>"></script>
        <![endif]-->


        <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
        <script src="<?php echo base_url('/public/global/plugins/jquery-ui/jquery-ui.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/jquery.blockui.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/jquery.cokie.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/uniform/jquery.uniform.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/jquery-validation/js/jquery.validate.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/jquery-validation/js/additional-methods.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') ?>" type="text/javascript" ></script>

        <!-- END CORE PLUGINS -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <!--<script src="<?php //echo base_url('/public/global/plugins/jqvmap/jqvmap/jquery.vmap.js') ?>" type="text/javascript"></script>-->
        <!--<script src="<?php //echo base_url('/public/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') ?>" type="text/javascript"></script>-->
        <!--<script src="<?php //echo base_url('/public/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') ?>" type="text/javascript"></script>-->
        <!--<script src="<?php //echo base_url('/public/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') ?>" type="text/javascript"></script>-->
        <!--<script src="<?php //echo base_url('/public/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') ?>" type="text/javascript"></script>-->
        <!--<script src="<?php //echo base_url('/public/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') ?>" type="text/javascript"></script>-->
        <!--<script src="<?php //echo base_url('/public/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') ?>" type="text/javascript"></script>-->
        <script src="<?php echo base_url('/public/global/plugins/flot/jquery.flot.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/flot/jquery.flot.resize.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/flot/jquery.flot.categories.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/jquery.pulsate.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/bootstrap-daterangepicker/moment.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/bootstrap-daterangepicker/daterangepicker.js') ?>" type="text/javascript"></script>
        <!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
        <script src="<?php echo base_url('/public/global/plugins/typeahead/handlebars.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/typeahead/typeahead.bundle.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/fullcalendar/fullcalendar.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/admin/pages/scripts/profile.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/select2/select2.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/datatables/media/js/jquery.dataTables.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') ?>" type="text/javascript" ></script>
        <script src="<?php echo base_url('/public/global/plugins/jquery-validation/js/jquery.validate.min.js') ?>"></script>
        <script src="<?php echo base_url('/public/global/plugins/jquery-validation/js/additional-methods.min.js') ?>"></script>
        <script src="<?php echo base_url('/public/global/plugins/select2/select2.min.js') ?>"></script>
        <script src="<?php echo base_url('/public/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') ?>"></script>
        <script src="<?php echo base_url('/public/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js') ?>"></script>
        <script src="<?php echo base_url('/public/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js') ?>"></script>
        <script src="<?php echo base_url('/public/global/plugins/ckeditor/ckeditor.js') ?>"></script>
        <script src="<?php echo base_url('/public/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js') ?>"></script>
        <script src="<?php echo base_url('/public/global/plugins/bootstrap-markdown/lib/markdown.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('/public/global/plugins/bootstrap-select/bootstrap-select.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('/public/global/plugins/jquery-multi-select/js/jquery.multi-select.js') ?>"></script>

        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->

        <script src="<?php echo base_url('/public/global/scripts/metronic.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/admin/layout/scripts/layout.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/admin/layout/scripts/quick-sidebar.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/admin/layout/scripts/demo.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/admin/pages/scripts/components-form-tools.js') ?>"></script>
        <script src="<?php echo base_url('/public/admin/pages/scripts/index.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/admin/pages/scripts/tasks.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/admin/pages/scripts/form-validation.js') ?>" type="text/javascript" ></script>

        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <script src="<?php echo base_url('/public/admin/pages/scripts/table-managed.js') ?>"></script>
        <script src="<?php echo base_url('/public/admin/pages/scripts/components-dropdowns.js') ?>"></script>
        <script src="<?php echo base_url('/public/admin/pages/scripts/form-wizard.js') ?>" ></script>

        <!-- END PAGE LEVEL STYLES -->

        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
            jQuery(document).ready(function () {
                Metronic.init(); // init metronic core componets
                Layout.init(); // init layout
                QuickSidebar.init(); // init quick sidebar
                Demo.init(); // init demo features
                Index.init();
                Index.initDashboardDaterange();
                Index.initJQVMAP(); // init index page's custom scripts
                Index.initCalendar(); // init index page's custom scripts
                Index.initCharts(); // init index page's custom scripts
                Index.initChat();
                Index.initMiniCharts();
                Tasks.initDashboardWidget();
                FormValidation.init();
                TableManaged.init();
                Profile.init();
                ComponentsFormTools.init();
                ComponentsDropdowns.init();
                FormWizard.init();

            });
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>