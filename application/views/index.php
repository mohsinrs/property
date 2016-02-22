        <div class="main">
            <div class="container">
                <?php $this->load->view('layout/search.php'); ?> 
                <?php renderNotification() ?>
                <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
                <div class="row position200 margin-bottom-40">
                    <!-- BEGIN SALE PRODUCT -->
                    <div class="col-md-12 sale-product">
                        <h2>Featured Property</h2>
                        <div class="owl-carousel owl-carousel4">
                            <?php foreach($featured_properties as $fp): ?>
                            <div>
                                <div class="product-item">
                                    <div class="pi-img-wrapper">
                                        <img src="<?php echo base_url('/public/frontend/pages/img/products/1.jpg') ?>" class="img-responsive" alt="Berry Lace Dress">
                                        <div>
                                            <a href="<?php echo base_url('/public/frontend/pages/img/products/1.jpg') ?>" class="btn btn-default fancybox-button">Zoom</a>
                                            <a href="#" class="btn btn-default fancybox-fast-view">View</a>
                                        </div>
                                    </div>
                                    <h3><a href="#"><?php echo $fp->title; ?></a></h3>
                                    <div class="pi-price">Rs <?php echo $fp->price; ?></div>
                                    <a href="#" class="btn btn-default add2cart pull-right">View Detail</a>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- END SALE PRODUCT -->
                </div>
                <!-- END SALE PRODUCT & NEW ARRIVALS -->
            </div>
        </div>
        <div class="maingray position200 margin-bottom-40">
            <div class="container">
                <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
                <div class="row margin-bottom-40">
                    <!-- BEGIN SALE PRODUCT -->
                    <div class="col-md-9 sale-product">
                        <h2>Latest Properties</h2>
                        <div class="owl-carousel owl-carousel3">
                            <?php foreach($latest_properties as $lp): ?>
                            <div>
                                <div class="product-item">
                                    <div class="pi-img-wrapper">
                                        <img src="<?php echo base_url('/public/frontend/pages/img/advert/6.jpg') ?>" class="img-responsive" >
                                        <div></div>
                                    </div>
                                    <h3><a href="#"><?php echo $fp->title; ?></a></h3>
                                    <div class="pi-price">Rs <?php echo $fp->price; ?></div>
                                    <a href="#" class="btn btn-default add2cart pull-right">View Detail</a>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- BEGIN RECENT NEWS -->                            
                        <h2>Recent News</h2>
                        <div class="recent-news margin-bottom-10">
                            <div class="margin-bottom-20">
                                <div class="recent-news-inner">
                                    <h3><a href="#">Letiusto gnissimos</a></h3>
                                    <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                                </div>                        
                            </div>
                            <div class="margin-bottom-20">
                                <div class="recent-news-inner">
                                    <h3><a href="#">Deiusto anissimos</a></h3>
                                    <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                                </div>                        
                            </div>
                            <div class="margin-bottom-20">
                                <div class="recent-news-inner">
                                    <h3><a href="#">Deiusto anissimos</a></h3>
                                    <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                                </div>                        
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary pull-right"><i class="icon-search"></i>View Detail</button>
                            </div>
                        </div>
                        <!-- END RECENT NEWS -->
                    </div>
                    <!-- END SALE PRODUCT -->
                </div>
                <!-- END SALE PRODUCT & NEW ARRIVALS -->
            </div>
        </div>
        <div class="main position200">
            <div class="container">
                <!-- BEGIN CLIENTS -->
                <div class="row margin-bottom-40 our-clients">
                    <div class="col-md-3">
                        <h2><a href="#">Featured Agents</a></h2>
                        <p>Lorem dipsum folor margade sitede lametep eiusmod psumquis dolore.</p>
                    </div>
                    <div class="col-md-9">
                        <div class="owl-carousel owl-carousel6-brands">
                            <div class="client-item">
                                <a href="#">
                                    <img src="<?php echo base_url('/public/frontend/pages/img/clients/client_1_gray.png') ?>" class="img-responsive" alt="">
                                    <img src="<?php echo base_url('/public/frontend/pages/img/clients/client_1.png') ?>" class="color-img img-responsive" alt="">
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="#">
                                    <img src="<?php echo base_url('/public/frontend/pages/img/clients/client_2_gray.png') ?>" class="img-responsive" alt="">
                                    <img src="<?php echo base_url('/public/frontend/pages/img/clients/client_2.png') ?>" class="color-img img-responsive" alt="">
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="#">
                                    <img src="<?php echo base_url('/public/frontend/pages/img/clients/client_3_gray.png') ?>" class="img-responsive" alt="">
                                    <img src="<?php echo base_url('/public/frontend/pages/img/clients/client_3.png') ?>" class="color-img img-responsive" alt="">
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="#">
                                    <img src="<?php echo base_url('/public/frontend/pages/img/clients/client_4_gray.png') ?>" class="img-responsive" alt="">
                                    <img src="<?php echo base_url('/public/frontend/pages/img/clients/client_4.png') ?>" class="color-img img-responsive" alt="">
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="#">
                                    <img src="<?php echo base_url('/public/frontend/pages/img/clients/client_5_gray.png') ?>" class="img-responsive" alt="">
                                    <img src="<?php echo base_url('/public/frontend/pages/img/clients/client_5.png') ?>" class="color-img img-responsive" alt="">
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="#">
                                    <img src="<?php echo base_url('/public/frontend/pages/img/clients/client_6_gray.png') ?>" class="img-responsive" alt="">
                                    <img src="<?php echo base_url('/public/frontend/pages/img/clients/client_6.png') ?>" class="color-img img-responsive" alt="">
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="#">
                                    <img src="<?php echo base_url('/public/frontend/pages/img/clients/client_7_gray.png') ?>" class="img-responsive" alt="">
                                    <img src="<?php echo base_url('/public/frontend/pages/img/clients/client_7.png') ?>" class="color-img img-responsive" alt="">
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="#">
                                    <img src="<?php echo base_url('/public/frontend/pages/img/clients/client_8_gray.png') ?>" class="img-responsive" alt="">
                                    <img src="<?php echo base_url('/public/frontend/pages/img/clients/client_8.png') ?>" class="color-img img-responsive" alt="">
                                </a>
                            </div>                  
                        </div>
                    </div>          
                </div>
                <!-- END CLIENTS -->
            </div>
        </div>