<div class="page-content">
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
    <h3 class="page-title">Property Management</h3>
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
                                    <li class="active">
                                        <a href="#tab1" data-toggle="tab" class="step">
                                            <span class="number"> 1 </span>
                                            <span class="desc"><i class="fa fa-check"></i> Basic Info / Images </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab2" data-toggle="tab" class="step">
                                            <span class="number"> 2 </span>
                                            <span class="desc"><i class="fa fa-check"></i> Floor plans </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab3" data-toggle="tab" class="step">
                                            <span class="number"> 3 </span>
                                            <span class="desc"><i class="fa fa-check"></i> Documents </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab4" data-toggle="tab" class="step">
                                            <span class="number"> 4 </span>
                                            <span class="desc"><i class="fa fa-check"></i> Videos </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab5" data-toggle="tab" class="step">
                                            <span class="number"> 5 </span>
                                            <span class="desc"><i class="fa fa-check"></i> Status </span>
                                        </a>
                                    </li>
                                </ul>
                                
                                <div id="bar" class="progress progress-striped" role="progressbar">
                                    <div class="progress-bar progress-bar-success">
                                    </div>
                                </div>
                                
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">
                                        <h3 class="block">Property Type and Location</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Purpose</label>
                                                    <select class="form-control" name="property_purpose_id">
                                                        <option>-- select --</option>
                                                        <?php foreach($purpose_list as $purpose): ?>
                                                        <option value="<?php echo $purpose->property_purpose_id ?>"><?php echo $purpose->name ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">                                    
                                                <div class="form-group">
                                                    <label>Type</label>
                                                    <select class="form-control" name="property_type_id">
                                                        <option>-- select --</option>
                                                        <?php foreach($type_list as $type): ?>
                                                        <option value="<?php echo $type->property_type_id ?>"><?php echo $type->name ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <select class="form-control" id="city_id" name="city_id">
                                                        <option> -- Select -- </option>
                                                        <?php foreach ($cities as $key => $city): ?>
                                                        <option value="<?php echo $city->city_id ?>"><?php echo $city->name ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Location</label>
                                                    <select class="form-control" id="location_id" name="location_id">
                                                        <option> -- Select -- </option>
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
                                                    <input type="text" class="form-control" name="title">
                                                </div>
                                                <div class="form-group">
                                                    <label>All Inclusive Price (PKR)</label>
                                                    <input type="text" class="form-control" name="price">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control" rows="4" name="description"></textarea>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Area</label>
                                                    <input type="text" class="form-control" name="area">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Area Unit</label>
                                                    <select class="form-control" name="area_unit_id">
                                                        <option> -- Select -- </option>
                                                        <?php foreach ($area_units as $unit): ?>
                                                        <option value="<?php echo $unit->area_unit_id ?>"><?php echo $unit->name ?></option>
                                                        <?php endforeach; ?>
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
                                                    <select class="form-control" name="construction_status_id">
                                                        <option> -- Select -- </option>
                                                        <?php foreach ($construction_status as $status): ?>
                                                        <option value="<?php echo $status->construction_status_id ?>"><?php echo $status->name ?></option>
                                                        <?php endforeach; ?>
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
                                                    <input type="file" id="property_images" name="property_images[]" multiple="multiple">                                        
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
                                                        <input type="checkbox" name="is_client_property" id="is_client_property"> If you are entering this property for a client then please enter client data.
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row display-none" id="client_block">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="radio-list">
                                                        <label><input type="radio" name="is_new_client" id="new_client" value="true" checked> Existing Client</label>
                                                        <label><input type="radio" name="is_new_client" id="existing_client" value="false"> New Client </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Search For my Clients</label>
                                                    <input type="text" class="form-control" name="client_id">
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
                                                    <label>Contact Person</label>
                                                    <input type="text" class="form-control" name="cp_name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Cell #</label>
                                                    <input type="text" class="form-control" name="cp_cell_no">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Phone #</label>
                                                    <input type="text" class="form-control" name="cp_phone_no">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" name="cp_email">
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