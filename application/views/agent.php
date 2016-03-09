<div class="main">
    <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-9 col-sm-7">
                <div class="product-page">
                    <div class="row">
                        <div class="col-md-5 col-sm-5">
                            <div class="image">
                                <img src="<?php echo base_url('/public/frontend/pages/img/people/img8-large.jpg') ?>" alt="Cool green dress with red bell" class="img-responsive" data-BigImgsrc="<?php echo base_url('/public/frontend/pages/img/people/img8-large.jpg') ?>">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <h1> <?php echo $result->name; ?> </h1>
                            <div class="price-availability-block clearfix">
                                <div class="price">
                                    <strong><span> </span> <?php echo $result->city_name; ?> </strong>
                                </div>
                                <div class="availability">
                                    <a href="javascript:;" class="favorite-agent" data-agent-id="<?php echo $result->user_id; ?>"><i class="fa fa-heart"></i> Save Listing</a>
                                </div>
                            </div>
                            <div class="description">
                                <p><?php echo $result->about; ?></p>
                            </div>
                            <div class="product-page-cart contact-details">
                                <button class="btn btn-primary fa fa-envelope-o btnShowEmail" type="button"> View Email</button>
                                <span id="agent_email" class="display-none"><?php echo $result->email; ?></span>
                                <button class="btn btn-primary fa fa-phone btnShowPhone" type="button"> View Number</button>
                                <span id="agent_phone_no" class="display-none"><?php echo $result->phone_no; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <link href="../../public/global/css/components-md.css" rel="stylesheet" type="text/css"/>
            <!-- END CONTENT -->
            <!-- BEGIN SIDEBAR -->
            <div class="sidebar col-md-3 col-sm-5">
                <h2>Search Property</h2>
                <!-- BEGIN FORM-->
                <form action="<?php echo base_url('search'); ?>" name="frmSearch" role="form">
                    <div class="form-group">
                        <label>Property Purpose</label>
                        <select class="form-control" name="property_purpose_id" id="property_purpose_id">
                            <option> -- Select -- </option>
                            <?php foreach($purpose_list as $purpose): ?>
                            <option value="<?php echo $purpose->property_purpose_id ?>"><?php echo $purpose->name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Property Price</label>
                        <select class="form-control" name="price_range" id="price_range">
                            <option>-- Select --</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Property Type</label>
                        <select class="form-control" name="property_type_id">
                            <option> -- Select -- </option>
                            <?php foreach($type_list as $type): ?>
                                <?php if($type->parent_property_type_id == NULL) { ?>
                                <optgroup label="<?php echo $type->name; ?>">
                                    <?php foreach($type_list as $sub_type): ?>
                                        <?php if($sub_type->parent_property_type_id == $type->property_type_id) { ?>
                                        <option value="<?php echo $sub_type->property_type_id ?>"><?php echo $sub_type->name ?></option>
                                        <?php } ?>
                                    <?php endforeach; ?>
                                </optgroup>
                                <?php } ?>
                            <?php endforeach; ?>
                        </select>                   
                    </div>
                    <div class="form-group">
                        <label class="control-label">City</label>
                        <select class="form-control select2me" id="city_id" name="city_id" data-placeholder="Select...">
                            <option> -- Select -- </option>
                            <?php foreach ($cities as $key => $city): ?>
                                <option value="<?php echo $city->city_id ?>"><?php echo $city->name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Location</label>
                        <select class="form-control" id="location_id" name="location_id" data-placeholder="Select...">
                            <option> -- Select -- </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label> &nbsp;</label>
                        <button type="submit" class="btn btn-primary"><i class="icon-search"></i>Search</button>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
            <!-- END SIDEBAR -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
        <!-- BEGIN SIMILAR PRODUCTS -->
        <div class="row margin-bottom-40">
            <div class="col-md-12 col-sm-12">
                <h2> Properties </h2>
                <div class="owl-carousel owl-carousel4">
                    <?php foreach ($properties as $property): ?>
                    <div>
                        <div class="product-item">
                            <div class="pi-img-wrapper">
                                <img src="<?php echo base_url('/public/frontend/pages/img/advert/1.jpg') ?>" class="img-responsive">
                                <div></div>
                            </div>
                            <h3><a href="<?php echo base_url('property/detail/'.$property->property_id) ?>"><?php echo $property->title; ?></a></h3>
                            <div class="pi-price">Rs <?php echo $property->price; ?></div>
                            <a href="<?php echo base_url('property/detail/'.$property->property_id) ?>" class="btn btn-default add2cart">View Detail</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- END SIMILAR PRODUCTS -->
    </div>
</div>