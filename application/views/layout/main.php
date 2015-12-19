<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest (the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->

    <!-- Head BEGIN -->
    <head>
        <meta charset="utf-8">
        <title>Welcome to Al-Wasey Properties</title>

        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta content="Metronic Shop UI description" name="description">
        <meta content="Metronic Shop UI keywords" name="keywords">
        <meta content="keenthemes" name="author">

        <meta property="og:site_name" content="-CUSTOMER VALUE-">
        <meta property="og:title" content="-CUSTOMER VALUE-">
        <meta property="og:description" content="-CUSTOMER VALUE-">
        <meta property="og:type" content="website">
        <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
        <meta property="og:url" content="-CUSTOMER VALUE-">

        <link rel="shortcut icon" href="favicon.ico">

        <!-- Fonts START -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
        <!-- Fonts END -->

        <!-- Global styles START -->          
        <link href="<?php echo base_url('/public/global/plugins/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('/public/global/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
        <!-- Global styles END --> 

        <!-- Page level plugin styles START -->
        <link href="<?php echo base_url('/public/global/plugins/fancybox/source/jquery.fancybox.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('/public/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('/public/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css') ?>" rel="stylesheet">
        <!-- Page level plugin styles END -->

        <!-- Theme styles START -->
        <link href="<?php echo base_url('/public/global/css/components.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('/public/frontend/layout/css/style.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('/public/frontend/pages/css/style-shop.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('/public/frontend/pages/css/style-revolution-slider.css') ?>" rel="stylesheet"><!-- metronic revo slider styles -->
        <link href="<?php echo base_url('/public/frontend/layout/css/style-responsive.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('/public/frontend/layout/css/themes/red.css') ?>" rel="stylesheet" id="style-color">
        <link href="<?php echo base_url('/public/frontend/layout/css/custom.css') ?>" rel="stylesheet">

        <!-- Theme styles END -->
    </head>
    <!-- Head END -->

    <!-- Body BEGIN -->
    <body class="corporate">
        <div class="pre-header">
            <div class="container">
                <div class="row">
                    <!-- BEGIN TOP BAR LEFT PART -->
                    <div class="col-md-6 col-sm-6">
                        <ul class="list-unstyled list-inline">
                            <li><a href="#" target="_blank">Homes</a></li>
                            <li><a href="#" target="_blank">Plots</a></li>
                            <li><a href="#" target="_blank">Commercial</a></li>
                            <li><a href="#" target="_blank">About us</a></li>
                            <li><a href="#" target="_blank">Contact us</a></li>
                            <li><a href="#" target="_blank">Add property</a></li>

                        </ul>
                    </div>
                    <!-- END TOP BAR LEFT PART -->
                    <!-- BEGIN TOP BAR MENU -->
                    <div class="col-md-6 col-sm-6 additional-nav">
                        <ul class="list-unstyled list-inline pull-right">
                            <li><a href="page-login.html">Log In</a></li>
                            <li><a href="page-reg-page.html">Registration</a></li>
                        </ul>
                    </div>
                    <!-- END TOP BAR MENU -->
                </div>
            </div>        
        </div>
        <!-- END TOP BAR -->
        <!-- BEGIN HEADER -->
        <div class="header">
            <div class="container">
                <a class="site-logo" href="index.html"><img src="<?php echo base_url('/public/frontend/layout/img/logo.png') ?>" alt="Metronic FrontEnd"></a>
                <div class="additional-shop-info pull-right">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>+1 456 6717</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>info@alwaseyproperty.com</span></li>
                    </ul>
                </div>
                <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

                <!-- BEGIN NAVIGATION -->
                <div class="header-navigation pull-right font-transform-inherit">
                    <ul>
                        <li><a href="#" target="_blank">Homes</a></li>
                        <li><a href="#" target="_blank">Plots</a></li>
                        <li><a href="#" target="_blank">Commercial</a></li>
                        <li><a href="#" target="_blank">About us</a></li>
                        <li><a href="#" target="_blank">Contact us</a></li>
                        <li><a href="#" target="_blank">Add property</a></li>
                    </ul>
                </div>
                <!-- END NAVIGATION -->
            </div>
        </div>
        <!-- Header END -->

        <!-- BEGIN SLIDER -->
        <div class="page-slider margin-bottom-40">
            <div class="fullwidthbanner-container revolution-slider">
                <div class="fullwidthabnner">
                    <ul id="revolutionul">
                        <!-- THE NEW SLIDE -->
                        <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="<?php echo base_url('/public/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg') ?>">
                            <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                            <img src="<?php echo base_url('/public/frontend/pages/img/revolutionslider/bg1.jpg') ?>" alt="">
                        </li>    

                        <!-- THE FIRST SLIDE -->
                        <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="<?php echo base_url('/public/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg') ?>">
                            <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                            <img src="<?php echo base_url('/public/frontend/pages/img/revolutionslider/bg2.jpg') ?>" alt="">
                        </li>

                        <!-- THE SECOND SLIDE -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-delay="9400" data-thumb="<?php echo base_url('/public/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg') ?>">                        
                            <img src="<?php echo base_url('/public/frontend/pages/img/revolutionslider/bg3.jpg') ?>" alt="">
                        </li>

                        <!-- THE THIRD SLIDE -->
                        <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="<?php echo base_url('/public/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg') ?>">
                            <img src="<?php echo base_url('/public/frontend/pages/img/revolutionslider/bg4.jpg') ?>" alt="">
                        </li>               

                        <!-- THE FORTH SLIDE -->
                        <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="<?php echo base_url('/public/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg') ?>">
                            <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                            <img src="<?php echo base_url('/public/frontend/pages/img/revolutionslider/bg5.jpg') ?>" alt="">
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom"></div>
                </div>
            </div>
        </div>
        <!-- END SLIDER -->

        <div class=" top-banner">
            <div class="container">
                <div class="content-page ">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <h2>Search Property</h2>
                            <!-- BEGIN FORM-->
                            <form action="#" role="form">
                                <div class = "col-md-4">
                                    <div class = "form-group">
                                        <label>Property Purpose</label>
                                        <input type = "text" class = "form-control">
                                    </div>
                                    <div class = "form-group">
                                        <label>Property Price</label>
                                        <select class = "form-control">
                                            <option>Any</option>
                                            <option>Rs. 1, 00, 000-5, 00, 000</option>
                                            <option>Rs. 5, 00, 000-10, 00, 000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class = "col-md-4">
                                    <div class = "form-group">
                                        <label>Property Type</label>
                                        <select class = "form-control">
                                            <option>Any</option>
                                            <option>Residential</option>
                                            <option>Commercial</option>
                                        </select>
                                    </div>
                                    <div class = "form-group">
                                        <label>Property Location</label>
                                        <input type = "text" class = "form-control">
                                    </div>
                                </div>
                                <div class = "col-md-4">
                                    <div class = "form-group">
                                        <label for = "contacts-name">Property Area</label>
                                        <input type = "text" class = "form-control" id = "contacts-name">
                                    </div>
                                    <div class = "form-group">
                                        <label>Beds</label>
                                        <select class = "form-control">
                                            <option>Any</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class = "form-group">
                                    <label> &nbsp;
                                    </label><br>
                                    <button type = "submit" class = "btn btn-primary"><i class = "icon-search"></i>Search</button>
                                </div>

                            </form>
                            <!--END FORM-->
                        </div>

                        <div class = "col-md-4 col-sm-4 sidebar2">
                            <!--BEGIN RECENT NEWS -->
                            <h2>Recent News</h2>
                            <div class = "recent-news margin-bottom-10">
                                <div class = "row margin-bottom-10">
                                    <div class = "col-md-3">
                                        <img class = "img-responsive" alt = "" src = "<?php echo base_url('/public/frontend/pages/img/people/img2-large.jpg') ?>">
                                    </div>
                                    <div class = "col-md-9 recent-news-inner">
                                        <h3><a href = "javascript:;
                                               ">Letiusto gnissimos</a></h3>
                                        <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                                    </div>
                                </div>
                                <div class = "row margin-bottom-10">
                                    <div class = "col-md-3">
                                        <img class = "img-responsive" alt = "" src = "<?php echo base_url('/public/frontend/pages/img/people/img1-large.jpg') ?>">
                                    </div>
                                    <div class = "col-md-9 recent-news-inner">
                                        <h3><a href = "javascript:;">Deiusto anissimos</a></h3>
                                        <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                                    </div>
                                </div>
                                <div class = "form-group">
                                    <button type = "submit" class = "btn btn-primary pull-right"><i class = "icon-search"></i>View All</button>
                                </div>
                            </div>
                            <!--END RECENT NEWS -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class = "main">
            <div class = "container">
                <!--BEGIN BLOCKQUOTE BLOCK -->
                <div class = "row quote-v1 margin-bottom-30">
                    <div class = "col-md-9">
                        <span>Want to Sale Your Property? Start Now!</span>
                    </div>
                    <div class = "col-md-3 text-right">
                        <a class = "btn-transparent" href = "#" target = "_blank"><i class = "fa fa-rocket margin-right-10"></i>Add Property</a>
                    </div>
                </div>
                <!--END BLOCKQUOTE BLOCK -->

                <!--BEGIN RECENT WORKS -->
                <div class = "row recent-work margin-bottom-40">
                    <div class = "col-md-4">
                        <h2><a href = "#">Featured Properties</a></h2>
                        <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde voluptatem. Sed unde omnis iste natus error sit voluptatem.</p>
                    </div>
                    <div class = "col-md-8">
                        <div class = "owl-carousel owl-carousel3">
                            <div class = "recent-work-item">
                                <em>
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/house/isl.jpg') ?>" alt = "Amazing Project" class = "img-responsive">
                                    <a href = "#"><i class = "fa fa-link"></i></a>
                                    <a href = "<?php echo base_url('/public/frontend/pages/img/house/isl.jpg') ?>" class = "fancybox-button" title = "Project Name #1" data-rel = "fancybox-button"><i class = "fa fa-search"></i></a>
                                </em>
                                <a class = "recent-work-description" href = "javascript:;">
                                    <strong>House in Islamabad</strong>
                                    <b>Sector E-7</b>
                                </a>
                            </div>
                            <div class = "recent-work-item">
                                <em>
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/house/amz.jpg') ?>" alt = "Amazing Project" class = "img-responsive">
                                    <a href = "#"><i class = "fa fa-link"></i></a>
                                    <a href = "<?php echo base_url('/public/frontend/pages/img/house/amz.jpg') ?>" class = "fancybox-button" title = "Project Name #2" data-rel = "fancybox-button"><i class = "fa fa-search"></i></a>
                                </em>
                                <a class = "recent-work-description" href = "javascript:;">
                                    <strong>Amazing Project</strong>
                                    <b>Agenda corp.</b>
                                </a>
                            </div>
                            <div class = "recent-work-item">
                                <em>
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/house/flat.jpg') ?>" alt = "Amazing Project" class = "img-responsive">
                                    <a href = "#"><i class = "fa fa-link"></i></a>
                                    <a href = "<?php echo base_url('/public/frontend/pages/img/house/flat.jpg') ?>" class = "fancybox-button" title = "Project Name #3" data-rel = "fancybox-button"><i class = "fa fa-search"></i></a>
                                </em>
                                <a class = "recent-work-description" href = "javascript:;">
                                    <strong>Flat On Muree Road</strong>
                                    <b>Aries Tower</b>
                                </a>
                            </div>
                            <div class = "recent-work-item">
                                <em>
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/house/isl.jpg') ?>" alt = "Amazing Project" class = "img-responsive">
                                    <a href = "#"><i class = "fa fa-link"></i></a>
                                    <a href = "<?php echo base_url('/public/frontend/pages/img/house/isl.jpg') ?>" class = "fancybox-button" title = "Project Name #1" data-rel = "fancybox-button"><i class = "fa fa-search"></i></a>
                                </em>
                                <a class = "recent-work-description" href = "javascript:;">
                                    <strong>Luxury House</strong>
                                    <b>Bahria Town</b>
                                </a>
                            </div>

                            <div class = "recent-work-item">

                                <em>
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/house/amz.jpg') ?>" alt = "Amazing Project" class = "img-responsive">
                                    <a href = "#"><i class = "fa fa-link"></i></a>
                                    <a href = "<?php echo base_url('/public/frontend/pages/img/house/amz.jpg') ?>" class = "fancybox-button" title = "Project Name #2" data-rel = "fancybox-button"><i class = "fa fa-search"></i></a>
                                </em>
                                <a class = "recent-work-description" href = "javascript:;">
                                    <strong>Amazing Project</strong>
                                    <b>Agenda corp.</b>
                                </a>
                            </div>
                            <div class = "recent-work-item">
                                <em>
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/house/flat.jpg') ?>" alt = "Amazing Project" class = "img-responsive">
                                    <a href = "#"><i class = "fa fa-link"></i></a>
                                    <a href = "<?php echo base_url('/public/frontend/pages/img/house/flat.jpg') ?>" class = "fancybox-button" title = "Project Name #3" data-rel = "fancybox-button"><i class = "fa fa-search"></i></a>
                                </em>
                                <a class = "recent-work-description" href = "javascript:;">
                                    <strong>Flat On Muree Road</strong>
                                    <b>Aries Tower</b>
                                </a>
                            </div>
                            <div class = "recent-work-item">
                                <em>
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/house/isl.jpg') ?>" alt = "Amazing Project" class = "img-responsive">
                                    <a href = "#"><i class = "fa fa-link"></i></a>
                                    <a href = "<?php echo base_url('/public/frontend/pages/img/house/isl.jpg') ?>" class = "fancybox-button" title = "Project Name #1" data-rel = "fancybox-button"><i class = "fa fa-search"></i></a>
                                </em>
                                <a class = "recent-work-description" href = "javascript:;">
                                    <strong>Luxury House</strong>
                                    <b>Bahria Town</b>
                                </a>
                            </div>


                        </div>
                    </div>
                </div>
                <!--END RECENT WORKS -->

                <!--BEGIN SALE PRODUCT & NEW ARRIVALS -->
                <div class = "row margin-bottom-40">
                    <!--BEGIN SALE PRODUCT -->
                    <div class = "col-md-9 sale-product">
                        <h2>Latest Properties</h2>
                        <div class = "owl-carousel owl-carousel3">
                            <div>
                                <div class = "product-item">
                                    <div class = "pi-img-wrapper">
                                        <img src = "<?php echo base_url('/public/frontend/pages/img/advert/6.jpg') ?>" class = "img-responsive" >
                                        <div>
                                        </div>
                                    </div>
                                    <h3><a href = "shop-item.html">Home For Sale On Ideal Location</a></h3>
                                    <div class = "pi-price">Rs 63, 50, 000</div>
                                    <a href = "javascript:;" class = "btn btn-default add2cart">View Detail</a>
                                </div>
                            </div>
                            <div>
                                <div class = "product-item">
                                    <div class = "pi-img-wrapper">
                                        <img src = "<?php echo base_url('/public/frontend/pages/img/advert/5.jpg') ?>" class = "img-responsive" >
                                        <div>
                                        </div>
                                    </div>
                                    <h3><a href = "shop-item.html">Home For Sale On Ideal Location</a></h3>
                                    <div class = "pi-price">Rs 63, 50, 000</div>
                                    <a href = "javascript:;" class = "btn btn-default add2cart">View Detail</a>
                                </div>
                            </div>
                            <div>
                                <div class = "product-item">
                                    <div class = "pi-img-wrapper">
                                        <img src = "<?php echo base_url('/public/frontend/pages/img/advert/4.jpg') ?>" class = "img-responsive" >
                                        <div>
                                        </div>
                                    </div>
                                    <h3><a href = "shop-item.html">Home For Sale On Ideal Location</a></h3>
                                    <div class = "pi-price">Rs 63, 50, 000</div>
                                    <a href = "javascript:;" class = "btn btn-default add2cart">View Detail</a>
                                </div>
                            </div>
                            <div>
                                <div class = "product-item">
                                    <div class = "pi-img-wrapper">
                                        <img src = "<?php echo base_url('/public/frontend/pages/img/advert/3.jpg') ?>" class = "img-responsive" >
                                        <div>
                                        </div>
                                    </div>
                                    <h3><a href = "shop-item.html">Home For Sale On Ideal Location</a></h3>
                                    <div class = "pi-price">Rs 63, 50, 000</div>
                                    <a href = "javascript:;" class = "btn btn-default add2cart"> View Detail</a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class = "col-md-3">
                        <div class = "row margin-bottom-10">
                            <h2 class = "text-center">Advertisement</h2>
                            <div class = "col-md-6 col-sm-6">
                                <img alt = "" src = "<?php echo base_url('/public/frontend/pages/img/advert/1.png') ?>" class = "img-responsive">
                            </div>
                            <div class = "col-md-6 col-sm-6">
                                <img alt = "" src = "<?php echo base_url('/public/frontend/pages/img/advert/2.png') ?>" class = "img-responsive">
                            </div>
                        </div>
                        <div class = "row margin-bottom-10">
                            <div class = "col-md-6 col-sm-6">
                                <img alt = "" src = "<?php echo base_url('/public/frontend/pages/img/advert/3.png') ?>" class = "img-responsive">
                            </div>
                            <div class = "col-md-6 col-sm-6">
                                <img alt = "" src = "<?php echo base_url('/public/frontend/pages/img/advert/4.png') ?>" class = "img-responsive">
                            </div>
                        </div>
                        <div class = "row margin-bottom-40">
                            <div class = "col-md-6 col-sm-6">
                                <img alt = "" src = "<?php echo base_url('/public/frontend/pages/img/advert/5.png') ?>" class = "img-responsive">
                            </div>
                            <div class = "col-md-6 col-sm-6">
                                <img alt = "" src = "<?php echo base_url('/public/frontend/pages/img/advert/6.png') ?>" class = "img-responsive">
                            </div>
                        </div>


                    </div>


                    <!--END SALE PRODUCT -->
                </div>
                <!--END SALE PRODUCT & NEW ARRIVALS -->

                <!--BEGIN CLIENTS -->
                <div class = "row margin-bottom-40 our-clients">
                    <div class = "col-md-3">
                        <h2><a href = "javascript:;">Featured Agents</a></h2>
                        <p>Lorem dipsum folor margade sitede lametep eiusmod psumquis dolore.</p>
                    </div>
                    <div class = "col-md-9">
                        <div class = "owl-carousel owl-carousel6-brands">
                            <div class = "client-item">
                                <a href = "javascript:;">
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/clients/client_1_gray.png') ?>" class = "img-responsive" alt = "">
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/clients/client_1.png') ?>" class = "color-img img-responsive" alt = "">
                                </a>
                            </div>
                            <div class = "client-item">
                                <a href = "javascript:;">
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/clients/client_2_gray.png') ?>" class = "img-responsive" alt = "">
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/clients/client_2.png') ?>" class = "color-img img-responsive" alt = "">
                                </a>
                            </div>
                            <div class = "client-item">
                                <a href = "javascript:;">
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/clients/client_3_gray.png') ?>" class = "img-responsive" alt = "">
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/clients/client_3.png') ?>" class = "color-img img-responsive" alt = "">
                                </a>
                            </div>
                            <div class = "client-item">
                                <a href = "javascript:;">
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/clients/client_4_gray.png') ?>" class = "img-responsive" alt = "">
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/clients/client_4.png') ?>" class = "color-img img-responsive" alt = "">
                                </a>
                            </div>
                            <div class = "client-item">
                                <a href = "javascript:;">
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/clients/client_5_gray.png') ?>" class = "img-responsive" alt = "">
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/clients/client_5.png') ?>" class = "color-img img-responsive" alt = "">
                                </a>
                            </div>
                            <div class = "client-item">
                                <a href = "javascript:;">
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/clients/client_6_gray.png') ?>" class = "img-responsive" alt = "">
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/clients/client_6.png') ?>" class = "color-img img-responsive" alt = "">
                                </a>
                            </div>
                            <div class = "client-item">
                                <a href = "javascript:;">
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/clients/client_7_gray.png') ?>" class = "img-responsive" alt = "">
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/clients/client_7.png') ?>" class = "color-img img-responsive" alt = "">
                                </a>
                            </div>
                            <div class = "client-item">
                                <a href = "javascript:;">
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/clients/client_8_gray.png') ?>" class = "img-responsive" alt = "">
                                    <img src = "<?php echo base_url('/public/frontend/pages/img/clients/client_8.png') ?>" class = "color-img img-responsive" alt = "">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END CLIENTS -->
            </div>
        </div>

        <!--BEGIN PRE-FOOTER -->
        <div class = "pre-footer">
            <div class = "container">
                <div class = "row">
                    <!--BEGIN BOTTOM ABOUT BLOCK -->
                    <div class = "col-md-4 col-sm-6 pre-footer-col">
                        <h2>About us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.</p>

                    </div>
                    <!--END BOTTOM ABOUT BLOCK -->

                    <!--BEGIN BOTTOM CONTACTS -->
                    <div class = "col-md-4 col-sm-6 pre-footer-col">
                        <h2>Our Contacts</h2>
                        <address class = "margin-bottom-40">
                            35, Lorem Lis Street, Park Ave California, US<br>
                            Phone: 300 323 3456<br>
                            Fax: 300 323 1456<br>
                            Email: <a href = "#">info@alwasey.com</a><br>
                            Skype: <a href = "#">alwasey</a>
                        </address>


                    </div>
                    <!--END BOTTOM CONTACTS -->

                    <!--BEGIN TWITTER BLOCK -->
                    <div class = "col-md-4 col-sm-6 pre-footer-col">

                        <h2>Information</h2>
                        <ul class = "list-unstyled">
                            <li><i class = "fa fa-angle-right"></i> <a href = "javascript:;">Delivery Information</a></li>
                            <li><i class = "fa fa-angle-right"></i> <a href = "javascript:;">Customer Service</a></li>
                            <li><i class = "fa fa-angle-right"></i> <a href = "javascript:;">Order Tracking</a></li>
                            <li><i class = "fa fa-angle-right"></i> <a href = "javascript:;">Shipping & Returns</a></li>
                            <li><i class = "fa fa-angle-right"></i> <a href = "contacts.html">Contact Us</a></li>
                            <li><i class = "fa fa-angle-right"></i> <a href = "javascript:;">Careers</a></li>
                            <li><i class = "fa fa-angle-right"></i> <a href = "javascript:;">Payment Methods</a></li>
                        </ul>
                    </div>
                    <!--END TWITTER BLOCK -->
                </div>
            </div>
        </div>
        <!--END PRE-FOOTER -->

        <!--BEGIN FOOTER -->
        <div class = "footer">
            <div class = "container">
                <div class = "row">
                    <!--BEGIN COPYRIGHT -->
                    <div class = "col-md-6 col-sm-6 padding-top-10">
                        © Copyright 2015 Al-Wasey Properties. All rights reserved.
                    </div>
                    <!--END COPYRIGHT -->
                    <!--BEGIN PAYMENTS -->
                    <div class = "col-md-6 col-sm-6">

                    </div>
                    <!--END PAYMENTS -->
                </div>
            </div>
        </div>
        <!--END FOOTER -->

        <!--Load javascripts at bottom, this will reduce page load time -->
        <!--BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
        <!--[if lt IE 9]>
        <script src = "<?php echo base_url('/public/global/plugins/respond.min.js') ?>"></script>
                            <![endif]--> 
        <script src="<?php echo base_url('/public/global/plugins/jquery.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/jquery-migrate.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/public/global/plugins/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>      
        <script src="<?php echo base_url('/public/frontend/layout/scripts/back-to-top.js') ?>" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->

        <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
        <script src="<?php echo base_url('/public/global/plugins/fancybox/source/jquery.fancybox.pack.js') ?>" type="text/javascript"></script><!-- pop up -->
        <script src="<?php echo base_url('/public/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js') ?>" type="text/javascript"></script><!-- slider for products -->

        <!-- BEGIN RevolutionSlider -->  
        <script src="<?php echo base_url('/public/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js') ?>" type="text/javascript"></script> 
        <script src="<?php echo base_url('/public/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js') ?>" type="text/javascript"></script> 
        <script src="<?php echo base_url('/public/frontend/pages/scripts/revo-slider-init.js') ?>" type="text/javascript"></script>
        <!-- END RevolutionSlider -->

        <script src="<?php echo base_url('/public/frontend/layout/scripts/layout.js') ?>" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(document).ready(function () {
                Layout.init();
                Layout.initOWL();
                RevosliderInit.initRevoSlider();
                Layout.initTwitter();
                //Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
                //Layout.initNavScrolling(); 
            });
        </script>
        <!-- END PAGE LEVEL JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>