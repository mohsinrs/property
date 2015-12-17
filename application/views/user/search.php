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
     <!-- BEGIN PAGE HEADER-->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="#">Property Management</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Search</a>
            </li>
        </ul>
        <div class="page-toolbar">
            <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm btn-default" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
            </div>
        </div>
    </div>
    <h3 class="page-title">
        Property Management</h3>
    <!-- END PAGE HEADER-->
  <div class="row">
        <div class="col-md-12 col-sm-12">
            <!-- BEGIN Form-->
           <div class="portlet box blue">
        <div class="portlet-title">
                    <div class="caption">
                            <i class="fa fa-gift"></i>Inventory Search
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
                                                            <label>Price Range</label>
                                                            <select class="form-control">
                                                            </select>
                                                    </div>
                                            </div>
                                            <!--/span-->
                                    </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                            <label>Location</label>
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
                                            <div class="col-md-4 col-md-pull-2 col-md-offset-2">
                                                    <div class="form-group">
                                                            <label>Listing Date From</label>
                                                      <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
							<input type="text" class="form-control" readonly name="datepicker">
							<span class="input-group-btn">
							<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
							</span>
						</div>
                                                    </div>
                                            </div>
                          
                                            <!--/span-->
                                            <div class="col-md-4">
                                                    <div class="form-group">
                                                            <label>Listing Date To</label>
                                                            <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
							<input type="text" class="form-control" readonly name="datepicker">
							<span class="input-group-btn">
							<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
							</span>
						</div>
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