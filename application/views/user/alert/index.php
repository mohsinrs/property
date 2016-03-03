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
                <a href="<?php echo base_url('user/alert'); ?>"><?php echo $title; ?></a>
            </li>
        </ul>
    </div>
    <h3 class="page-title">Tools</h3>
    <?php renderNotification() ?>
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <!-- BEGIN Form-->
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i><?php echo $title; ?>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form class="horizontal-form" action="" method="post">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Receive Alert on</label>
                                        <select class="form-control" name="alert_type">
                                            <option>-- select --</option>
                                            <option value="1">Daily</option>
                                            <option value="2">Monthly</option>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Property Type</label>
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
                                        <label>Purpose</label>
                                        <select class="form-control" name="property_purpose_id" id="property_purpose_id">
                                            <option>-- select --</option>
                                            <?php foreach($purpose_list as $purpose): ?>
                                            <option value="<?php echo $purpose->property_purpose_id ?>"><?php echo $purpose->name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                                <!-- Prices being populated from common.js -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price Range</label>
                                        <select class="form-control" name="price_range" id="price_range">
                                            <option>-- select --</option>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Beds</label>
                                        <select class="form-control" name="beds">
                                            <option>-- select --</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="5">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Baths</label>
                                        <select class="form-control" name="baths">
                                            <option>-- select --</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="5">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">City</label>
                                        <select class="form-control select2me" id="city_id" name="city_id" data-placeholder="Select...">
                                            <option> -- Select -- </option>
                                            <?php foreach ($cities as $key => $city): ?>
                                                <option value="<?php echo $city->city_id ?>"><?php echo $city->name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Location</label>
                                        <select class="form-control select2me" id="location_id" name="location_id" data-placeholder="Select...">
                                            <option> -- Select -- </option>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Keywords</label>
                                        <input type="text" class="form-control" name="keyword">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Covered Area</label>
                                        <select class="form-control" name="covered_area">
                                            <option>Any Covered Area</option>
                                            <option value="b-1-2">Below 1 Marla</option>
                                            <option value="1-5-2">1 to 5 Marla</option>
                                            <option value="5-10-2">5 to 10 Marla</option>
                                            <option value="10-15-2">10 to 15 Marla</option>
                                            <option value="15-20-2">15 to 20 Marla</option>
                                            <option value="1-2-3">1 to 2 Kanal</option>
                                            <option value="2-3-3">2 to 3 Kanal</option>
                                            <option value="3-4-3">3 to 4 Kanal</option>
                                            <option value="4-5-3">4 to 5 Kanal</option>
                                            <option value="a-5-3">Over 5 Kanal</option>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Agent</label>
                                        <select class="form-control" name="agent_id" data-placeholder="Select...">
                                            <option>-- select --</option>
                                            <?php foreach ($agents as $key => $agent): ?>
                                            <option value="<?php echo $agent->user_id ?>" <?php echo (isset($result) && $result->agent_id == $agent->user_id) ? 'selected="selected"' : ''; ?>><?php echo $agent->name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/span-->
                        </div>
                        <div class="form-actions right">
                            <button class="btn blue" type="submit" name="submit" value="add_alert"><i class="fa fa-check"></i> Add Alert</button>
                        </div>
                    </form>
                </div>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END Form-->
    </div>
</div>