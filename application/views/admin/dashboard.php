<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a>
            </li>
        </ul>
    </div>
    <h3 class="page-title">
        Dashboard <small>reports & statistics</small>
    </h3>
    <?php renderNotification() ?>
    <!-- END PAGE HEADER-->
    
    <div class="clearfix">
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box grey-cascade">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>Pending Properties
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="DashboardTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Type</th>
                                <th>Location</th>
                                <th>Price</th>
                                <th>Area</th>
                                <th>Purpose</th>
                                <th>Listed Date</th>
                                <th>User</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($result as $property): ?>
                            <tr class="odd gradeX">
                                <td><?php echo $property->property_id; ?></td>
                                <td><?php echo $property->property_type_name; ?></td>
                                <td><?php echo $property->location_name; ?></td>
                                <td><?php echo $property->price; ?></td>
                                <td><?php echo $property->area.' '.$property->area_unit_name; ?></td>
                                <td><?php echo $property->property_purpose_name; ?></td>
                                <td><?php echo date("D, d M Y", strtotime($property->created_on)); ?></td>
                                <td><a href="#"><?php echo $property->user_name; ?></a></td>
                                <td>
                                    <a href="<?php echo base_url('/property/detail/'.$property->property_id); ?>" target="_blank" class="btn btn-default btn-primary">View</a>
                                    <a href="<?php echo base_url('admin/property/approve/'.$property->property_id); ?>" class="btn btn-default btn-success">Approve</a>
                                    <a href="<?php echo base_url('admin/property/reject/'.$property->property_id); ?>" class="btn btn-default btn-danger">Reject</a>
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