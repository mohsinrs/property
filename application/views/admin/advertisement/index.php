<div class="page-content">
      <!-- BEGIN PAGE HEADER-->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="#">Tools</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="<?php echo base_url('admin/advertisement') ?>">Advertisement</a>
            </li>
        </ul>
        <div class="page-toolbar">
            <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm btn-default" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
            </div>
        </div>
    </div>
    <h3 class="page-title">All Advertisement</h3>
    <?php renderNotification() ?>

    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box grey-cascade">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>All Advertisement
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Listed Date</th>
                            <th>Expiry Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $advertisment): ?>
                        <tr class="odd gradeX">
                            <td><?php echo $advertisment->advertisement_id ?></td>
                            <td><?php echo $advertisment->name ?></td>
                            <td><?php echo $advertisment->email ?></td>
                            <td><?php echo $advertisment->phone_no ?></td>
                            <td>11/11/2015</td>
                            <td>07/12/2015</td>
                            <td>
                                <a href="<?php echo base_url('admin/advertisement/view/'.$advertisment->advertisement_id) ?>" class="btn btn-default">Edit</a>
                                <a href="<?php echo base_url('admin/advertisement/delete/'.$advertisment->advertisement_id) ?>" class="btn btn-default btn-danger">Delete</a>
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