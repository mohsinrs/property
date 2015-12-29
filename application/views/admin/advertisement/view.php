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
                <a href="#">Add Advertisement</a>
            </li>
        </ul>
        <div class="page-toolbar">
            <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm btn-default" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
            </div>
        </div>
    </div>
    <h3 class="page-title">New Advertisement</h3>
    <?php renderNotification() ?>
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <!-- BEGIN Form-->
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Add Advertisement
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form class="horizontal-form" action="" method="POST" enctype="">
                        <?php echo form_open_multipart('advertisement/do_upload'); ?>
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/>
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                            <div>
                                                <span class="btn default btn-file">
                                                    <span class="fileinput-new"> Select image </span>
                                                    <span class="fileinput-exists"> Change </span>
                                                    <input type="file" name="image_name" id="image_name">
                                                </span>
                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">User Name</label>
                                        <select class="select2_category form-control" name="user_id" id="user_id">
                                            <option value="">Select</option>
                                            <option value="1">User 1</option>
                                            <option value="2">User 2</option>
                                            <option value="3">User 5</option>
                                            <option value="4">User 4</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>From Date</label>
                                        <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                            <input type="text" class="form-control" readonly name="from_date" id="from_date" value="<?php if (isset($result)) echo $result->from_date; ?>">
                                            <span class="input-group-btn">
                                                <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>From Date</label>
                                        <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                            <input type="text" class="form-control" readonly name="to_date" id="to_date" value="<?php if (isset($result)) echo $result->to_date; ?>">
                                            <span class="input-group-btn">
                                                <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/span-->
                        </div>
                        <div class="form-actions right">
                            <button class="btn blue" type="submit" name="submit" value="save"><i class="fa fa-check"></i> Save</button>
                            <button class="btn btn-danger" type="button" name="cancel"><i class="fa fa-remove"></i> Cancel</button>
                        </div>

                    </form>
                </div>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END Form-->
    </div>

</div>