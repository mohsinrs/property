<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    Widget settings form goes here
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn blue">Save changes</button>
                    <button type="button" class="btn default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!-- BEGIN STYLE CUSTOMIZER -->
    <div class="theme-panel hidden-xs hidden-sm">
        <div class="toggler">
        </div>
        <div class="toggler-close">
        </div>
        <div class="theme-options">
            <div class="theme-option theme-colors clearfix">
                <span>
                    THEME COLOR </span>
                <ul>
                    <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
                    </li>
                    <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue">
                    </li>
                    <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
                    </li>
                    <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
                    </li>
                    <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
                    </li>
                    <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2">
                    </li>
                </ul>
            </div>
            <div class="theme-option">
                <span>
                    Theme Style </span>
                <select class="layout-style-option form-control input-sm">
                    <option value="square" selected="selected">Square corners</option>
                    <option value="rounded">Rounded corners</option>
                </select>
            </div>
            <div class="theme-option">
                <span>
                    Layout </span>
                <select class="layout-option form-control input-sm">
                    <option value="fluid" selected="selected">Fluid</option>
                    <option value="boxed">Boxed</option>
                </select>
            </div>
            <div class="theme-option">
                <span>
                    Header </span>
                <select class="page-header-option form-control input-sm">
                    <option value="fixed" selected="selected">Fixed</option>
                    <option value="default">Default</option>
                </select>
            </div>
            <div class="theme-option">
                <span>
                    Top Menu Dropdown</span>
                <select class="page-header-top-dropdown-style-option form-control input-sm">
                    <option value="light" selected="selected">Light</option>
                    <option value="dark">Dark</option>
                </select>
            </div>
            <div class="theme-option">
                <span>
                    Sidebar Mode</span>
                <select class="sidebar-option form-control input-sm">
                    <option value="fixed">Fixed</option>
                    <option value="default" selected="selected">Default</option>
                </select>
            </div>
            <div class="theme-option">
                <span>
                    Sidebar Menu </span>
                <select class="sidebar-menu-option form-control input-sm">
                    <option value="accordion" selected="selected">Accordion</option>
                    <option value="hover">Hover</option>
                </select>
            </div>
            <div class="theme-option">
                <span>
                    Sidebar Style </span>
                <select class="sidebar-style-option form-control input-sm">
                    <option value="default" selected="selected">Default</option>
                    <option value="light">Light</option>
                </select>
            </div>
            <div class="theme-option">
                <span>
                    Sidebar Position </span>
                <select class="sidebar-pos-option form-control input-sm">
                    <option value="left" selected="selected">Left</option>
                    <option value="right">Right</option>
                </select>
            </div>
            <div class="theme-option">
                <span>
                    Footer </span>
                <select class="page-footer-option form-control input-sm">
                    <option value="fixed">Fixed</option>
                    <option value="default" selected="selected">Default</option>
                </select>
            </div>
        </div>
    </div>
    <!-- END STYLE CUSTOMIZER -->
    <!-- BEGIN PAGE HEADER-->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Dashboard</a>
            </li>
        </ul>
        <div class="page-toolbar">
            <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm btn-default" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
            </div>
        </div>
    </div>
    <h3 class="page-title">
        Inventory Search</h3>
    <!-- END PAGE HEADER-->
  <div class="row">
        <div class="col-md-12 col-sm-12">
            <!-- BEGIN Form-->
           <div class="portlet box blue">
        <div class="portlet-title">
                    <div class="caption">
                            <i class="fa fa-gift"></i>Search
                    </div>

            </div>
            <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form class="horizontal-form" action="#">
                            <div class="form-body">
                                <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                            <label>Property Type</label>
                                                            <select class="form-control">
                                                            </select>
                                                    </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                            <label>Purpose</label>
                                                            <select class="form-control">
                                                            </select>
                                                    </div>
                                            </div>
                                            <!--/span-->
                                    </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                            <label>Area</label>
                                                            <input type="text" class="form-control">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                            <label>Area Type</label>
                                                            <select class="form-control">
                                                            </select>
                                                    </div>
                                            </div>
                                            <!--/span-->
                                    </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                            <label>Price Range</label>
                                                            <select class="form-control">
                                                            </select>
                                                    </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                            <label>User</label>
                                                            <select class="form-control">
                                                            </select>
                                                    </div>
                                            </div>
                                            <!--/span-->
                                    </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                            <label>City</label>
                                                            <select class="form-control">
                                                            </select>
                                                    </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                            <label>Location</label>
                                                            <select class="form-control">
                                                            </select>
                                                    </div>
                                            </div>
                                            <!--/span-->
                                    </div>
                                <div class="row">
                                     <div class="col-md-6">
                                                    <div class="form-group">
                                                            <label>Construction Status</label>
                                                            <select class="form-control">
                                                            </select>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                            <label>ID / Ref</label>
                                                            <input type="text" class="form-control">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                    </div>
                                <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                            <label>From Date</label>
                                                           <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
												<input type="text" class="form-control" readonly name="datepicker">
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
                                                    </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                            <label>To Date</label>
                                                            <select class="form-control">
                                                            </select>
                                                    </div>
                                            </div>
                                            <!--/span-->
                                    </div>
                            </div>
                            <div class="form-actions right">
                                    <button class="btn blue" type="submit"><i class="fa fa-search"></i> Search</button>
                            </div>
                    </form>
                    <!-- END FORM-->
            </div>
    </div>
            <!-- END Form-->
        </div>

    </div>
</div>