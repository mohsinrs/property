<div class="main">
    <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-9 col-sm-7">
                <div class="product-page">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="product-main-image">
                                <img src="<?php echo base_url('/public/frontend/pages/img/products/1.jpg') ?>" alt="Cool green dress with red bell" class="img-responsive" data-BigImgsrc="<?php echo base_url('/public/frontend/pages/img/products/1.jpg') ?>">
                            </div>
                            <div class="product-other-images">
                                <a href="<?php echo base_url('/public/frontend/pages/img/products/2.jpg') ?>" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="<?php echo base_url('/public/frontend/pages/img/products/2.jpg') ?>"></a>
                                <a href="<?php echo base_url('/public/frontend/pages/img/products/3.jpg') ?>" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="<?php echo base_url('/public/frontend/pages/img/products/3.jpg') ?>"></a>
                                <a href="<?php echo base_url('/public/frontend/pages/img/products/4.jpg') ?>" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="<?php echo base_url('/public/frontend/pages/img/products/4.jpg') ?>"></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h1><?php echo $result->title; ?></h1>
                            <div class="price-availability-block clearfix">
                                <div class="price">
                                    <strong><span>Rs. </span><?php echo $result->price; ?></strong>
                                </div>
                                <div class="availability">
                                    Purpose: <strong><?php echo $result->property_purpose_name; ?></strong><br><br>
                                    <a href="javascript:;" class="favorite-property" data-property-id="<?php echo $result->property_id; ?>"><i class="fa fa-heart"></i> Save Listing</a>
                                </div>
                            </div>
                            <div class="description">
                                <p><?php echo $result->description; ?></p>
                            </div>
                            <div class="product-page-cart contact-details">
                                <button class="btn btn-primary fa fa-envelope-o btnShowEmail" type="button"> View Email</button>
                                <span id="property_email" class="display-none"><?php echo $result->email; ?></span>
                                <button class="btn btn-primary fa fa-phone btnShowPhone" type="button"> View Number</button>
                                <span id="property_phone_no" class="display-none"><?php echo $result->phone_no; ?></span>
                            </div>
                        </div>
                        <div class="product-page-content">
                            <ul id="myTab" class="nav nav-tabs">
                                <li class="active"><a href="#Summary" data-toggle="tab">Summary</a></li>
                                <li><a href="#Description" data-toggle="tab">Description</a></li>
                                <li><a href="#Information" data-toggle="tab">Property Features</a></li>
                                <li><a href="#Information" data-toggle="tab">Attachments</a></li>
                                <li><a href="#Information" data-toggle="tab">Google Maps</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade in active" id="Summary">
                                    <table class="datasheet">
                                        <tr>
                                            <td class="datasheet-features-type"> Property ID </td>
                                            <td><?php echo $result->property_id; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="datasheet-features-type">Type</td>
                                            <td><?php echo $result->property_type_name; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="datasheet-features-type">Status</td>
                                            <td><?php echo $result->property_purpose_name; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="datasheet-features-type">Bedrooms</td>
                                            <td><?php echo $result->property_id; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="datasheet-features-type">Bathrooms</td>
                                            <td><?php echo $result->property_id; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="datasheet-features-type">Area</td>
                                            <td><?php echo $result->area; ?> <?php echo $result->area_unit_name; ?></td>                          
                                        </tr>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="Description">
                                    <p><?php echo $result->description; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN SIDEBAR -->
            <div class="sidebar col-md-3 col-sm-5">
                <h2>Search Property</h2>
                <!-- BEGIN FORM-->
                <form action="<?php echo base_url('search'); ?>" name="frmSearch" role="form">
                    <div class="form-group">
                        <label>Property Purpose</label>
                        <select class="form-control" name="property_purpose_id" id="property_purpose_id">
                            <option>-- select --</option>
                            <?php foreach($purpose_list as $purpose): ?>
                            <option value="<?php echo $purpose->property_purpose_id ?>"><?php echo $purpose->name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Property Price</label>
                        <select class="form-control" name="price_range" id="price_range">
                            <option>-- select --</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Property Type</label>
                        <select class="form-control" name="property_type_id">
                            <option>-- select --</option>
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
                <div class="sidebar-products clearfix">
                    <h2>Featured Property</h2>
                    <?php foreach($featured_properties as $fp): ?>
                    <div class="item">
                        <a href="<?php echo base_url('property/detail/'.$fp->property_id); ?>"><img src="<?php echo base_url('/public/frontend/pages/img/products/6.jpg') ?>" alt="<?php echo $fp->title; ?>"></a>
                        <h3><a href="<?php echo base_url('property/detail/'.$fp->property_id); ?>"><?php echo $fp->title; ?></a></h3>
                        <div class="price">Rs <?php echo $fp->price; ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- END SIDEBAR -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN SIMILAR PRODUCTS -->
        <div class="row margin-bottom-40">
            <div class="col-md-12 col-sm-12">
                <h2>Related Property</h2>
                <div class="owl-carousel owl-carousel4">
                    <div>
                        <div class="product-item">
                            <div class="pi-img-wrapper">
                                <img src="<?php echo base_url('/public/frontend/pages/img/advert/1.jpg') ?>" class="img-responsive">
                                <div></div>
                            </div>
                            <h3><a href="shop-item.html">Home For Sale On Ideal Location</a></h3>
                            <div class="pi-price">Rs 63,50,000</div>
                            <a href="javascript:;" class="btn btn-default add2cart">View Detail</a>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="pi-img-wrapper">
                                <img src="<?php echo base_url('/public/frontend/pages/img/advert/2.jpg') ?>" class="img-responsive">
                                <div></div>
                            </div>
                            <h3><a href="shop-item.html">Home For Sale On Ideal Location</a></h3>
                            <div class="pi-price">Rs 63,50,000</div>
                            <a href="javascript:;" class="btn btn-default add2cart">View Detail</a>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="pi-img-wrapper">
                                <img src="<?php echo base_url('/public/frontend/pages/img/advert/3.jpg') ?>" class="img-responsive">
                                <div></div>
                            </div>
                            <h3><a href="shop-item.html">Home For Sale On Ideal Location</a></h3>
                            <div class="pi-price">Rs 63,50,000</div>
                            <a href="javascript:;" class="btn btn-default add2cart">View Detail</a>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="pi-img-wrapper">
                                <img src="<?php echo base_url('/public/frontend/pages/img/advert/2.jpg') ?>" class="img-responsive">
                                <div></div>
                            </div>
                            <h3><a href="shop-item.html">Home For Sale On Ideal Location</a></h3>
                            <div class="pi-price">Rs 63,50,000</div>
                            <a href="javascript:;" class="btn btn-default add2cart">View Detail</a>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="pi-img-wrapper">
                                <img src="<?php echo base_url('/public/frontend/pages/img/advert/1.jpg') ?>" class="img-responsive">
                                <div></div>
                            </div>
                            <h3><a href="shop-item.html">Home For Sale On Ideal Location</a></h3>
                            <div class="pi-price">Rs 63,50,000</div>
                            <a href="javascript:;" class="btn btn-default add2cart">View Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SIMILAR PRODUCTS -->
    </div>
</div>