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
                <a href="<?php echo base_url('admin/search') ?>">Search</a>
            </li>
        </ul>
    </div>
    <h3 class="page-title">Property Management</h3>
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
                    <form class="horizontal-form" action="" method="post">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Property Type</label>
                                        <select name="property_type_id" id="property_type_id" class="form-control">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Purpose</label>
                                        <select name="property_purpose_id" id="property_purpose_id" class="form-control">
                                            <option>-- select --</option>
                                            <?php foreach($purpose_list as $purpose): ?>
                                            <option value="<?php echo $purpose->property_purpose_id ?>"><?php echo $purpose->name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Area</label>
                                        <input name="area" id="area" type="text" class="form-control">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Area Type</label>
                                        <select name="area_unit_id" id="area_unit_id" class="form-control">
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
                                        <label>Price Range</label>
                                        <select name="price_range" id="price_range" class="form-control">
                                            <option> -- Select -- </option>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>User</label>
                                        <select name="user_id" id="user_id" class="form-control">
                                            <option> -- Select -- </option>
                                            <?php foreach ($agents as $agent): ?>
                                            <option value="<?php echo $agent->user_id ?>"><?php echo $agent->name ?></option>
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
                                        <select name="city_id" id="city_id" class="form-control">
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
                                        <select name="location_id" id="location_id" class="form-control">
                                            <option> -- Select -- </option>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Construction Status</label>
                                        <select name="construction_status_id" id="construction_status_id" class="form-control">
                                            <option> -- Select -- </option>
                                            <?php foreach ($construction_status as $status): ?>
                                            <option value="<?php echo $status->construction_status_id ?>"><?php echo $status->name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ID / Ref</label>
                                        <input name="property_id" id="property_id" type="text" class="form-control">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-pull-2 col-md-offset-2">
                                    <div class="form-group">
                                        <label>From Date</label>
                                        <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                            <input type="text" class="form-control" readonly name="from_date" id="from_date">
                                            <span class="input-group-btn">
                                                <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>To Date</label>
                                        <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                            <input type="text" class="form-control" readonly name="to_date" id="to_date">
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