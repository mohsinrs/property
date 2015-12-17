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
            <div class="portlet box blue" id="form_wizard_1">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Post New Listing
                    </div>

                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form class="horizontal-form" action="#">
                        <div class="form-wizard">
                            <div class="form-body">
                                <ul class="nav nav-pills nav-justified steps">
                                    <li><a href="#tab1" data-toggle="tab" class="step">
                                            <span class="number"> 1 </span>
                                            <span class="desc"><i class="fa fa-check"></i> Basic Info / Images </span>
                                        </a></li>
                                    <li><a href="#tab2" data-toggle="tab" class="step">
                                            <span class="number"> 2 </span>
                                            <span class="desc"><i class="fa fa-check"></i> Floor plans </span>
                                        </a></li>
                                    <li><a href="#tab3" data-toggle="tab" class="step">
                                            <span class="number"> 3 </span>
                                            <span class="desc"><i class="fa fa-check"></i> Documents </span>
                                        </a></li>
                                    <li><a href="#tab4" data-toggle="tab" class="step">
                                            <span class="number"> 4 </span>
                                            <span class="desc"><i class="fa fa-check"></i> Videos </span>
                                        </a></li>
                                    <li><a href="#tab5" data-toggle="tab" class="step">
                                            <span class="number"> 5 </span>
                                            <span class="desc"><i class="fa fa-check"></i> Status </span>
                                        </a></li>

                                </ul>
                                <div id="bar" class="progress progress-striped" role="progressbar">
                                    <div class="progress-bar progress-bar-success">
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane" id="tab1">
                                        <h3 class="block">Provide your account details</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Purpose</label>
                                                    <select class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">                                    
                                                <div class="form-group">
                                                    <label>Type</label>
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
                                                    <input type="text" class="form-control">
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
                                            <div class="col-md-12">
                                                <h3 class="form-section">Property Details</h3>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>All Inclusive Price (PKR)</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Area</label>
                                                    <select class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Area Unit</label>
                                                    <select class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Expires After </label>
                                                    <select class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Constructions Status</label>
                                                    <select class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="form-section">Add Images</h3>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Press CTRL key while selecting images to upload multiple images at ones</label>
                                                    <input type="file" id="exampleInputFile1">                                        
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="form-section">Client Detail</h3>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="checkbox-list">
                                                        <input type="checkbox"> If you are entering this property for a client then please enter client data. 
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="radio-list">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Existing Client</label>
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> New Client </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Search For my Clients</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="form-section">Contact Details</h3>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Contact Person   </label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Cell #</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Phone #</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="form-section">Add Floor Plans</h3>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Press CTRL key while selecting images to upload multiple images at ones</label>
                                                    <input type="file" id="exampleInputFile1">                                        
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="form-section">Add Documents</h3>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Press CTRL key while selecting images to upload multiple documents at ones</label>
                                                    <input type="file" id="exampleInputFile1">                                        
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="form-section">Add Videos</h3>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Press CTRL key while selecting images to upload multiple Videos at ones</label>
                                                    <input type="file" id="exampleInputFile1">                                        
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab5">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="form-section">Status</h3>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>Your Property details have been received</p>
                                                <p>Property Type: Free Listing</p>
                                                <p>Property Status: Pending</p>
                                                <p>Your Property details have been received. It will be reviewed by out staff within 24 Hours.</p>
                                                <p>You will receive confirmation by email as soon as it gets approved.</p>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    </div>






                                </div>





                            </div>
                            <div class="form-actions right">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <a href="javascript:;" class="btn default button-previous">
                                            <i class="m-icon-swapleft"></i> Back </a>
                                        <a href="javascript:;" class="btn blue button-next">
                                            Continue <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                        <a href="javascript:;" class="btn green button-submit">
                                            Submit <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END Form-->
        </div>

    </div>
</div>