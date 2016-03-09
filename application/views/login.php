<div class="main">
    <div class="container">
        <?php $this->load->view('layout/search.php'); ?>
        <?php renderNotification() ?>
        <!-- BEGIN BLOCKQUOTE BLOCK -->
        <div class="row position200 margin-bottom-40">
            <div class="col-md-12">
                <h2> Log In </h2>
                <div class="content-form-page">
                    <div class="row">
                        <form class="form-horizontal" role="form" method="post">

                            <div class="col-md-6">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="email" class="col-lg-4 control-label"> Email <span class="require">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="email" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-lg-4 control-label"> Password <span class="require">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="password" class="form-control" id="password" name="password">
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="row">
                                    <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">                        
                                        <button type="submit" name="submit" value="login" class="btn btn-primary"> Log In</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END CLIENTS -->
        </div>
    </div>
</div>