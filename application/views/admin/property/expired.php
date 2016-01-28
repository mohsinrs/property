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
                <a href="<?php echo base_url('admin/property/expired') ?>"><?php echo $title ?></a>
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
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box grey-cascade">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i><?php echo $title ?>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_4">
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
                                    <a href="#" class="btn btn-default btn-primary">View</a>
                                    <a href="#" class="btn btn-default btn-primary">Edit</a>
                                    <a href="#" class="btn btn-default btn-danger">Delete</a>
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