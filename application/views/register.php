<div class="main">
    <div class="container">
        <?php $this->load->view('layout/search.php'); ?> 
        <?php renderNotification() ?>
        <!-- BEGIN BLOCKQUOTE BLOCK -->   
        <div class="row position200 margin-bottom-40">
            <div class="col-md-12">
                <h2>Create an account</h2>
                <?php renderNotification() ?>
                <div class="content-form-page">
                    <div class="row">
                        <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="col-lg-4 control-label"> Name <span class="require">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="col-lg-4 control-label"> Email <span class="require">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="email" name="email">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password" class="col-lg-4 control-label"> Password <span class="require">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="password" class="form-control" id="password" name="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="confirm_password" class="col-lg-4 control-label"> Confirm Password <span class="require">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cell_no" class="col-lg-4 control-label"> Cell No <span class="require">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="cell_no" name="cell_no">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone_no" class="col-lg-4 control-label"> Phone No <span class="require">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="phone_no" name="phone_no">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city_id" class="col-lg-4 control-label"> City <span class="require">*</span></label>
                                        <div class="col-lg-8">
                                            <select class="form-control" id="city_id" name="city_id">
                                                <option> -- Select -- </option>
                                                <?php foreach ($cities as $key => $city): ?>
                                                    <option value="<?php echo $city->city_id ?>"><?php echo $city->name ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="location_id" class="col-lg-4 control-label"> Location <span class="require">*</span></label>
                                        <div class="col-lg-8">
                                            <select class="form-control" id="location_id" name="location_id">
                                                <option> -- Select -- </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="zipcode" class="col-lg-4 control-label"> Zip Code </label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="zipcode" name="zipcode">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="profile_pic" class="col-lg-4 control-label"> Profile Image </label>
                                        <div class="col-lg-8">
                                            <input type="file" id="profile_pic" name="profile_pic">                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address" class="col-lg-4 control-label"> Address <span class="require">*</span></label>
                                        <div class="col-lg-8">
                                            <textarea class="form-control" rows="3" id="address" name="address"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="about" class="col-lg-4 control-label"> About Yourself </label>
                                        <div class="col-lg-8">
                                            <textarea class="form-control" rows="3" id="about" name="about"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-8 col-md-offset-2 padding-left-0 padding-top-20">
                                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Create Account</button>
                                    <button type="button" class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CLIENTS -->
    </div>
</div>