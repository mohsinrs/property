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
                <a href="<?php echo base_url('admin/users/pending') ?>"><?php echo $title ?></a>
            </li>
        </ul>
        <div class="page-toolbar">
            <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm btn-default" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
            </div>
        </div>
    </div>
    <h3 class="page-title"><?php echo $title ?></h3>
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box grey-cascade">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>Pending Users
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($result as $user): ?>
                            <tr class="odd gradeX">
                                <td><?php echo $user->user_id ?></td>
                                <td><?php echo $user->name ?></td>
                                <td><?php echo $user->email ?></td>
                                <td><?php echo $user->phone_no ?></td>
                                <td>Broker</td>
                                <td><?php echo date("D, d M Y", strtotime($user->created_on)); ?></td>
                                <td>
                                    <a href="#" class="btn btn-default btn-primary">View</a>
                                    <a href="<?php echo base_url('admin/users/profile/'.$user->user_id) ?>" class="btn btn-default">Edit</a>
                                    <a href="<?php echo base_url('admin/users/update_status/'.$user->user_id.'/1') ?>" class="btn btn-default btn-success">Approve</a>
                                    <a href="<?php echo base_url('admin/users/update_status/'.$user->user_id.'/2') ?>" class="btn btn-default btn-danger">Reject</a>
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