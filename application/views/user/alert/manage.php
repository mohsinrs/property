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
                <a href="<?php echo base_url('user/alert/manage') ?>"><?php echo $title; ?></a>
            </li>
        </ul>
    </div>
    <h3 class="page-title">Tools</h3>
    <?php renderNotification() ?>
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box grey-cascade">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i><?php echo $title; ?>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_3">
                        <thead>
                            <tr>
                                <th>Alert Description</th>
                                <th>Listed Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($result as $alert): ?>
                            <tr class="odd gradeX">
                                <td>House For Sale( Price: Rs.1500000 to 2500000, Area: 3 Marla to 5 Marla, Beds: 2)</td>
                                <td><?php echo date("D, d M Y", strtotime($alert->created_on)); ?></td>
                                <td>
                                    <a href="<?php echo base_url('user/alert/index/'.$alert->alert_id); ?>" class="btn btn-default">Edit</a>
                                    <a href="<?php echo base_url('user/alert/delete/'.$alert->alert_id); ?>" class="btn btn-danger">Delete</a>
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