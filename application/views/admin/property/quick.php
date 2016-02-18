<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="<?php echo base_url('admin/property/quick') ?>">Add Property</a>
            </li>
        </ul>
    </div>
    <h3 class="page-title">Property Management</h3>
    <?php renderNotification() ?>
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <!-- BEGIN Form-->
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Post New Listing
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form class="horizontal-form" action="" method="post">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="form-section">Property Type and Location</h3>
                                </div>
                                <!--/span-->
                            </div>
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
                                                <?php if($type->parent_property_type_id == NULL) { ?>
                                                <optgroup label="<?php echo $type->name; ?>">
                                                    <?php foreach($type_list as $sub_type): ?>
                                                        <?php if($sub_type->parent_property_type_id == $type->property_type_id) { ?>
                                                        <option value="<?php echo $sub_type->property_type_id ?>"><?php echo $sub_type->name ?></option>
                                                        <?php } ?>
                                                    <?php endforeach; ?>
                                                </optgroup>
                                                <?php } ?>
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
                                            <input type="checkbox" name="is_client_property" id="is_client_property" value="1"> If you are entering this property for a client then please enter client data.
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row display-none" id="client_block">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="radio-list">
                                            <label><input type="radio" name="is_new_client" id="existing_client" value="false" checked> Existing Client</label>
                                            <label><input type="radio" name="is_new_client" id="new_client" value="true"> New Client </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" id="search_client">
                                    <div class="form-group">
                                        <label>Search For my Clients</label>
                                        <!--<input type="text" class="form-control" name="client_id">-->
                                        <select class="form-control" name="client_id">
                                            <option> -- Select -- </option>
                                            <?php foreach ($clients as $client): ?>
                                            <option value="<?php echo $client->client_id; ?>"><?php echo $unit->name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="display-none" id="add_new_client">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="client_name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" name="client_phone">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Cell</label>
                                            <input type="text" class="form-control" name="client_cell">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Fax</label>
                                            <input type="text" class="form-control" name="client_fax">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="client_email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="client_address">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Zip Code</label>
                                            <input type="text" class="form-control" name="client_zipcode">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Client Type</label>
                                            <input type="text" class="form-control" name="client_type">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Client Rating</label>
                                            <input type="text" class="form-control" name="client_rating">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label></label>
                                            <input type="checkbox" class="form-control" name="future_opportunity" value="1"> Future Opportunity
                                            <input type="checkbox" class="form-control" name="int_opportunity" value="1"> International Opportunity
                                            <input type="checkbox" class="form-control" name="local_opportunity" value="1"> Local Opportunity
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
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
                        <div class="form-actions right">
                            <button class="btn blue" type="submit" name="submit" value="save">Submit Property</button>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END Form-->
        </div>

    </div>
</div>