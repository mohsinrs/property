<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="<?php echo base_url('admin/dashboard'); ?>">Dashboard</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="<?php echo base_url('user/profile'); ?>">Profile</a>
            </li>
        </ul>
    </div>
    <h3 class="page-title"><?php echo $title; ?></h3>
    <?php renderNotification(); ?>
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PROFILE SIDEBAR -->
            <div class="profile-sidebar">
                <!-- PORTLET MAIN -->
                <div class="portlet light profile-sidebar-portlet">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <!--<img src="<?php echo base_url('/public/admin/pages/media/profile/profile_user.jpg') ?>" class="img-responsive" alt="">-->
                        <img src="<?php echo $image_path; ?>" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            <?php echo $user->name; ?>
                        </div>
                        <br>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                </div>
                <!-- END PORTLET MAIN -->
            </div>
            <!-- END BEGIN PROFILE SIDEBAR -->
            <!-- BEGIN PROFILE CONTENT -->
            <div class="profile-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light">
                            <div class="portlet-title tabbable-line">
                                <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_profile" data-toggle="tab">Personal Info</a>
                                    </li>
                                    <li>
                                        <a href="#tab_user_avatar" data-toggle="tab">Change Avatar</a>
                                    </li>
                                    <li>
                                        <a href="#tab_user_pass" data-toggle="tab">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="#tab_user_roles" data-toggle="tab">User Roles</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <!-- PERSONAL INFO TAB -->
                                    <div class="tab-pane active" id="tab_profile">
                                        <form class="horizontal-form" name="submit_profile" action="" method="post">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" name="name" value="<?php echo $user->name; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="text" class="form-control" name="email" value="<?php echo $user->email; ?>" readonly="readonly">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Cell No.</label>
                                                            <input type="text" class="form-control" name="cell_no" value="<?php echo $user->cell_no; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Phone</label>
                                                            <input type="text" class="form-control" name="phone_no" value="<?php echo $user->phone_no; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <input type="text" class="form-control" name="address" value="<?php echo $user->address; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Zip Code</label>
                                                            <input type="text" class="form-control" name="zipcode" value="<?php echo $user->zipcode; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">City</label>
                                                            <select class="form-control select2me" id="city_id" name="city_id" data-placeholder="Select...">
                                                                <option> -- Select -- </option>
                                                                <?php foreach ($cities as $key => $city): ?>
                                                                    <option value="<?php echo $city->city_id ?>" <?php echo ($user->city_id == $city->city_id) ? 'selected="selected"' : '' ?>><?php echo $city->name ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Location</label>
                                                            <select class="form-control select2me" id="location_id" name="location_id" data-placeholder="Select...">
                                                                <option> -- Select -- </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>About Yourself</label>
                                                            <textarea name="about" rows="3" class="form-control"><?php echo $user->about; ?></textarea>                                    
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="margiv-top-10">
                                                    <button class="btn green-haze" type="submit" name="submit" value="submit_profile"> Save Changes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- END PERSONAL INFO TAB -->
                                    <!-- CHANGE AVATAR TAB -->
                                    <div class="tab-pane" id="tab_user_avatar">
                                        <form class="horizontal-form" name="submit_profile_pic" action="" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                        <img src="<?php echo $image_path; ?>" alt=""/>
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                    <div>
                                                        <span class="btn default btn-file">
                                                            <span class="fileinput-new"> Select image </span>
                                                            <span class="fileinput-exists"> Change </span>
                                                            <input type="file" name="profile_pic">
                                                        </span>
                                                        <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="margin-top-10">
                                                <button class="btn green-haze" type="submit" name="submit" value="submit_profile_pic"> Change Avatar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- END CHANGE AVATAR TAB -->
                                    <!-- CHANGE PASSWORD TAB -->
                                    <div class="tab-pane" id="tab_user_pass">
                                        <form class="horizontal-form" name="submit_change_password" action="" method="post">
                                            <div class="form-group">
                                                <label class="control-label">Current Password</label>
                                                <input type="password" name="current_password" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">New Password</label>
                                                <input type="password" name="password" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Re-type New Password</label>
                                                <input type="password" name="confirm_password" class="form-control" />
                                            </div>
                                            <div class="margin-top-10">
                                                <button class="btn green-haze" type="submit" name="submit" value="submit_change_password"> Change Password</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- END CHANGE PASSWORD TAB -->
                                    <!-- PRIVACY SETTINGS TAB -->
                                    <div class="tab-pane" id="tab_user_roles">
                                        <form class="horizontal-form" name="submit_user_roles" action="" method="post">
                                            <div class="form-body">
                                                <!--/span-->
                                                <div class="row">
                                                    <?php foreach($role_list as $type): ?>
                                                        <?php if($type->parent_role_id == NULL) { ?>
                                                            <div class="col-md-12">
                                                                <h3 class="form-section"><?php echo $type->name; ?></h3>
                                                                <?php foreach($role_list as $sub_type): ?>
                                                                    <?php if($sub_type->parent_role_id == $type->role_id) { ?>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <div class="input-group">
                                                                                <div class="icheck-list">
                                                                                    <label><input type="checkbox" name="user_roles[]" value="<?php echo $sub_type->role_id; ?>" class="icheck"> <?php echo $sub_type->name ?> </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php } ?>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        <?php } ?>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <div class="form-actions right">
                                                <button class="btn green-haze" type="submit" name="submit" value="submit_user_roles"><i class="fa fa-check"></i> Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- END PRIVACY SETTINGS TAB -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PROFILE CONTENT -->
        </div>
    </div>

</div>