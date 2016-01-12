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
                            <h1>Home For Sale On Ideal Location</h1>
                            <div class="price-availability-block clearfix">
                                <div class="price">
                                    <strong><span>Rs. </span>63,50,000</strong>
                                </div>
                                <div class="availability">
                                    Purpose: <strong>For Sale</strong><br><br>
                                    <i class="fa fa-heart"></i> Save Listing
                                </div>
                            </div>
                            <div class="description">
                                <p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed nonumy nibh sed euismod laoreet dolore magna aliquarm erat volutpat 
                                    Nostrud duis molestie at dolore.</p>
                            </div>
                            <div class="product-page-cart">
                                <button class="btn btn-primary fa fa-envelope-o" type="submit"> View Email</button>
                                <button class="btn btn-primary fa fa-phone" type="submit"> View Number</button>
                            </div>
                        </div>
                        <div class="product-page-content">
                            <ul id="myTab" class="nav nav-tabs">
                                <li><a class="active" href="#summary" data-toggle="tab">Summary</a></li>
                                <li><a href="#Description" data-toggle="tab">Description</a></li>
                                <li><a href="#Information" data-toggle="tab">Property Features</a></li>
                                <li><a href="#Information" data-toggle="tab">Attachments</a></li>
                                <li><a href="#Information" data-toggle="tab">Google Maps</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade" id="Description">
                                    <p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed sit nonumy nibh sed euismod laoreet dolore magna aliquarm erat sit volutpat Nostrud duis molestie at dolore. Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed sit nonumy nibh sed euismod laoreet dolore magna aliquarm erat sit volutpat Nostrud duis molestie at dolore. Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed sit nonumy nibh sed euismod laoreet dolore magna aliquarm erat sit volutpat Nostrud duis molestie at dolore. </p>
                                </div>
                                <div class="tab-pane fade in active" id="summary">
                                    <table class="datasheet">
                                        <tr>
                                            <th colspan="2">Summary</th>
                                        </tr>
                                        <tr>
                                            <td class="datasheet-features-type"> Property ID </td>
                                            <td>1359449</td>
                                        </tr>
                                        <tr>
                                            <td class="datasheet-features-type">Type</td>
                                            <td>House</td>
                                        </tr>
                                        <tr>
                                            <td class="datasheet-features-type">Status</td>
                                            <td>For Sale</td>
                                        </tr>
                                        <tr>
                                            <td class="datasheet-features-type">Bedrooms</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td class="datasheet-features-type">Bathrooms</td>
                                            <td>6</td>
                                        </tr>
                                        <tr>
                                            <td class="datasheet-features-type">Area</td>
                                            <td>1 Kanal</td>                          
                                        </tr>
                                    </table>
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
                <form action="#" role="form">
                    <div class="form-group">
                        <label>Property Purpose</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Property Price</label>
                        <select class="form-control">
                            <option>Any</option>
                            <option>Rs. 1,00,000-5,00,000</option>
                            <option>Rs. 5,00,000-10,00,000</option>
                        </select>                    
                    </div>
                    <div class="form-group">
                        <label>Property Type</label>
                        <select class="form-control">
                            <option>Any</option>
                            <option>Residential</option>
                            <option>Commercial</option>
                        </select>                    
                    </div>
                    <div class="form-group">
                        <label>Property Location</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> &nbsp;</label>
                        <button type="submit" class="btn btn-primary"><i class="icon-search"></i>Search</button>
                    </div>
                </form>
                <!-- END FORM-->
                <div class="sidebar-products clearfix">
                    <h2>Featured Property</h2>
                    <div class="item">
                        <a href="shop-item.html"><img src="<?php echo base_url('/public/frontend/pages/img/products/6.jpg') ?>" alt="Some Shoes in Animal with Cut Out"></a>
                        <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
                        <div class="price">$31.00</div>
                    </div>
                    <div class="item">
                        <a href="shop-item.html"><img src="<?php echo base_url('/public/frontend/pages/img/products/5.jpg') ?>" alt="Some Shoes in Animal with Cut Out"></a>
                        <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
                        <div class="price">$23.00</div>
                    </div>
                    <div class="item">
                        <a href="shop-item.html"><img src="<?php echo base_url('/public/frontend/pages/img/products/5.jpg') ?>" alt="Some Shoes in Animal with Cut Out"></a>
                        <h3><a href="shop-item.html">House in Islamabad</a></h3>
                        <div class="price">Sector E-7</div>
                    </div>
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