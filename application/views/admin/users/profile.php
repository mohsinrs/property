<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="#">My Account</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="<?php echo base_url('admin/users/profile/'.$result->user_id) ?>"><?php echo $title ?></a>
            </li>
        </ul>
        <div class="page-toolbar">
            <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm btn-default" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
            </div>
        </div>
    </div>
    <h3 class="page-title"><?php echo $title; ?></h3>
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <!-- BEGIN Form-->
            <div class="portlet box grey-cascade">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Personal info
                    </div>

                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form class="horizontal-form" method="post" action="" enctype="multipart/form-data">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" value="<?php echo $result->name ?>">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" value="<?php echo $result->email ?>">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cell No.</label>
                                        <input type="text" class="form-control" name="cell_no" value="<?php echo $result->cell_no ?>">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" name="phone_no" value="<?php echo $result->phone_no ?>">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city_id" class="control-label"> City </label>
                                        <select class="form-control" id="city_id" name="city_id">
                                            <option> -- Select -- </option>
                                            <?php foreach ($cities as $city): ?>
                                                <option value="<?php echo $city->city_id ?>" selected="<?php echo ($city->city_id == $result->city_id) ? 'selected' : '' ?> "><?php echo $city->name ?></option>
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
                                            <?php foreach ($locations as $location): ?>
                                                <option value="<?php echo $location->location_id ?>" selected="<?php echo ($location->location_id == $result->location_id) ? 'selected' : '' ?> "><?php echo $location->name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="listing_quota_id" class="control-label"> Listing Quota </label>
                                        <select class="form-control" id="listing_quota_id" name="listing_quota_id">
                                            <option> -- Select -- </option>
                                            <?php foreach ($listing_quota as $quota): ?>
                                                <option value="<?php echo $quota->listing_quota_id ?>" <?php echo ($quota->listing_quota_id == $result->listing_quota_id) ? 'selected="selected"' : '' ?>><?php echo $quota->name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Zip Code</label>
                                        <input type="text" class="form-control" name="zipcode" value="<?php echo $result->zipcode ?>">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea name="address" rows="3" class="form-control"><?php echo $result->address ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>About Yourself</label>
                                        <textarea name="about" rows="3" class="form-control"><?php echo $result->about ?></textarea>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="<?php echo $image_path ?>" alt=""/>
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                            <div>
                                                <span class="btn default btn-file">
                                                    <span class="fileinput-new">Select image </span>
                                                    <span class="fileinput-exists"> Change </span>
                                                    <input type="file" name="profile_pic">
                                                </span>
                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <!--/span-->

                        </div>
                        <div class="form-actions right">
                            <button class="btn blue" type="submit" name="submit" value="submit"><i class="fa fa-check"></i> Update</button>
                        </div>

                    </form>
                </div>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END Form-->
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box grey-cascade">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>All Listing
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Type</th>
                                <th>Location</th>
                                <th>Price</th>
                                <th>Area</th>
                                <th>Purpose</th>
                                <th>Listed Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($properties as $property): ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $property->property_id ?></td>
                                    <td><?php echo $property->property_type_name ?></td>
                                    <td><?php echo $property->location_name ?></td>
                                    <td><?php echo $property->price ?></td>
                                    <td><?php echo $property->area ?></td>
                                    <td><?php echo $property->property_purpose_name ?></td>
                                    <td>
                                        <a href="#" class="btn btn-default btn-primary">View</a>
                                        <a href="<?php echo base_url('admin/users/updatestatus/' . $property->user_id . '/1') ?>" class="btn btn-default btn-danger">Reject</a>
                                        <a href="<?php echo base_url('admin/users/delete/' . $property->user_id) ?>" class="btn btn-default btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
</div>