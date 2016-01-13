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
                <a href="<?php echo base_url('admin/profile/change_password') ?>"><?php echo $title ?></a>
            </li>
        </ul>
        <div class="page-toolbar">
            <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm btn-default" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
            </div>
        </div>
    </div>
    <h3 class="page-title"><?php echo $title ?></h3>
    <?php renderNotification() ?>
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <!-- BEGIN Form-->
            <div class="portlet box grey-cascade">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i><?php echo $title ?>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form class="horizontal-form" method="post" action="">
                        <div class="form-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Current Password</label>
                                        <input type="password" name="current_password" class="form-control">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="confirm_password" class="form-control">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                        </div>
                        <div class="form-actions right">
                            <button class="btn blue" type="submit" name="submit" value="submit"><i class="fa fa-check"></i> Update</button>
                        </div>

                    </form>
                    <!-- END FORM-->
                </div>
            </div>
        </div>
        <!-- END Form-->
    </div>

</div>