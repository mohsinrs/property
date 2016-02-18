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
                <a href="<?php echo base_url('admin/property/pending') ?>"><?php echo $title ?></a>
            </li>
        </ul>
    </div>
    <h3 class="page-title">Property Management</h3>
    <?php renderNotification() ?>
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
                    <table class="table table-striped table-bordered table-hover" id="PendingProperties">
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
                                    <a href="<?php echo base_url('/property/detail/'.$property->property_id); ?>" target="_blank" class="btn btn-default btn-primary">View</a>
                                    <a href="<?php echo base_url('/admin/property/edit/'.$property->property_id); ?>" class="btn btn-default btn-primary">Edit</a>
                                    <a href="<?php echo base_url('/admin/property/delete/'.$property->property_id); ?>" class="btn btn-default btn-danger">Delete</a>
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