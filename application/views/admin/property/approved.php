<div class="page-content">
    <!-- Modal Starts -->
    <div class="modal fade" id="mdlFeaturedProperties" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <form name="frmFeatureProperty" id="frmFeatureProperty" action="#">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Add Property to Featured</h4>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                    <input type="hidden" name="property_id" id="property_id" value="" />
                    <button type="button" class="btn default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn blue" id="btnFeaturedProperty">Save</button>
                </div>
            </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- BEGIN PAGE HEADER-->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="#">Property Management</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="<?php echo base_url('admin/property/approved') ?>"><?php echo $title ?></a>
            </li>
        </ul>
    </div>
    <h3 class="page-title">Property Management</h3>
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box grey-cascade">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i><?php echo $title ?>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="ApprovedProperties">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Type</th>
                                <th>Location</th>
                                <th>Price</th>
                                <th>Area</th>
                                <th>Purpose</th>
                                <th>Listed Date</th>
                                <th>Views</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($result as $property): ?>
                            <tr class="odd gradeX">
                                <td><?php echo $property->property_id ?></td>
                                <td><?php echo $property->property_type_name ?></td>
                                <td><?php echo $property->location_name ?></td>
                                <td><?php echo $property->price ?></td>
                                <td><?php echo $property->area ?></td>
                                <td><?php echo $property->property_purpose_name ?></td>
                                <td><?php echo date("D, d M Y", strtotime($property->created_on)); ?></td>
                                <td><a href="#"><?php echo $property->property_id ?></a></td>
                                <td>
                                    <a href="<?php echo base_url('property/detail/'.$property->property_id); ?>" target="_blank" class="btn btn-default btn-primary">View</a>
                                    <?php if(getLoginUserType() == 1): ?>
                                    <a href="<?php echo base_url('admin/property/reject/'.$property->property_id); ?>" class="btn btn-default btn-danger">Reject</a>
                                    <a class="btn default mdlFeaturedPropertiesBtn" data-toggle="modal" href="#mdlFeaturedProperties" data-prop-id="<?php echo $property->property_id ?>">Add to Featured</a>
                                    <?php endif; ?>
                                    <?php if(getLoginUserType() == 2): ?>
                                    <a href="<?php echo base_url('admin/property/edit/'.$property->property_id); ?>" class="btn btn-default">Edit</a>
                                    <a href="<?php echo base_url('admin/property/delete/'.$property->property_id); ?>" class="btn btn-default btn-danger">Delete</a>
                                    <?php endif; ?>
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