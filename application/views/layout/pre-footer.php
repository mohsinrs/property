        <div class="pre-footer position200">
            <div class="container">
                <div class="row">
                    <!-- BEGIN BOTTOM ABOUT BLOCK -->
                    <div class="col-md-4 col-sm-6 pre-footer-col">
                        <h2>Al Wasey Properties</h2>
                        <address class="margin-bottom-40">
                            <i class="fa fa-map-marker"></i> DHA Phase 12  EME Sector, Canal Bank <br>Road, Multan Raod, Lahore. Pakistan<br>
                            <i class="fa fa-phone-square"></i> +92-42-35239225<br>
                            <i class="fa fa-envelope"></i><a href="#">info@alwaseyproperties.com</a>
                        </address>
                    </div>
                    <!-- END BOTTOM ABOUT BLOCK -->
                    <!-- BEGIN BOTTOM CONTACTS -->
                    <div class="col-md-2 col-sm-6 pre-footer-col">
                        <h2>Quick Links</h2>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-angle-right"></i><a href="#">About Us</a></li>
                            <li><i class="fa fa-angle-right"></i><a href="#">Contact Us</a></li>
                            <li><i class="fa fa-angle-right"></i><a href="#">Work with Us</a></li>
                            <li><i class="fa fa-angle-right"></i><a href="#">Help & Support</a></li>
                            <li><i class="fa fa-angle-right"></i><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- END BOTTOM CONTACTS -->
                    <!-- BEGIN TWITTER BLOCK --> 
                    <div class="col-md-6 col-sm-12 pre-footer-col">
                        <h2>Advertisement</h2>
                        <div class="row margin-bottom-10">
                            <?php foreach($advertisements as $ad): ?>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <img alt="Advertisement" src="<?php echo base_url('/public/uploads/advertisement/'.$ad->advertisement_id.'/'.$ad->image_name) ?>" class="img-responsive">
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- END TWITTER BLOCK -->
                </div>
            </div>
        </div>