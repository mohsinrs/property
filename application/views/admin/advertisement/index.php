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
                <a href="<?php echo base_url('admin/advertisement') ?>"><?php echo $title; ?></a>
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
                <table class="table table-striped table-bordered table-hover" id="AllAdevertisements">
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
                            <td><?php echo date("D, d M Y", strtotime($advertisment->from_date)); ?></td>
                            <td><?php echo date("D, d M Y", strtotime($advertisment->to_date)); ?></td>
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