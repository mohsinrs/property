<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    Widget settings form goes here
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn blue">Save changes</button>
                    <button type="button" class="btn default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!-- BEGIN PAGE HEADER-->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Dashboard</a>
            </li>
        </ul>

    </div>
    <h3 class="page-title">
        Dashboard <small>reports & statistics</small>
    </h3>
    <!-- END PAGE HEADER-->
    <!-- BEGIN DASHBOARD STATS -->
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat blue-madison">
                <div class="visual">
                    <i class="fa fa-comments"></i>
                </div>
                <div class="details">
                    <div class="number">
                        1349
                    </div>
                    <div class="desc">
                        New Feedbacks
                    </div>
                </div>
                <a class="more" href="javascript:;">
                    View more <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat red-intense">
                <div class="visual">
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="details">
                    <div class="number">
                        12,5M$
                    </div>
                    <div class="desc">
                        Total Profit
                    </div>
                </div>
                <a class="more" href="javascript:;">
                    View more <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green-haze">
                <div class="visual">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="details">
                    <div class="number">
                        549
                    </div>
                    <div class="desc">
                        New Orders
                    </div>
                </div>
                <a class="more" href="javascript:;">
                    View more <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat purple-plum">
                <div class="visual">
                    <i class="fa fa-globe"></i>
                </div>
                <div class="details">
                    <div class="number">
                        +89%
                    </div>
                    <div class="desc">
                        Brand Popularity
                    </div>
                </div>
                <a class="more" href="javascript:;">
                    View more <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- END DASHBOARD STATS -->
    <div class="clearfix">
    </div>
    <div>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab"> Property View </a></li>
            <li><a href="#tab2" data-toggle="tab"> Property Visit</a></li>
            <li><a href="#tab3" data-toggle="tab">CTR</a></li>
            <li><a href="#tab4" data-toggle="tab">Email Views</a></li>
            <li><a href="#tab5" data-toggle="tab">Phone Views</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active in" id="tab1">
                <!-- BEGIN PORTLET-->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-share font-red-sunglo hide"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Property Views</span>
                        <span class="caption-helper">monthly stats...</span>
                    </div>

                </div>
                <div class="portlet-body">
                    <div id="site_activities_loading">
                        <img src="<?php echo base_url('/public/admin/layout/img/loading.gif') ?>" alt="loading"/>
                    </div>
                    <div id="site_activities_content" class="display-none">
                        <div id="site_activities" style="min-height: 300px;">
                        </div>
                    </div>

                </div>
            </div>
            <!-- END PORTLET-->
            </div>
            <div class="tab-pane fade" id="tab2">
              
                <!-- BEGIN PORTLET-->
                <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bar-chart font-green-sharp hide"></i>
                        <span class="caption-subject font-green-sharp bold uppercase">Property Visits</span>
                        <span class="caption-helper">monthly stats...</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="site_statistics_loading">
                        <img src="<?php echo base_url('/public/admin/layout/img/loading.gif') ?>" alt="loading"/>
                    </div>
                    <div id="site_statistics_content" class="display-none">
                        <div id="site_statistics" class="chart">
                        </div>
                    </div>
                </div>
            </div>
                <!-- END PORTLET-->
            </div>
            <div class="tab-pane fade" id="tab3">
                
                <!-- BEGIN PORTLET-->
                <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bar-chart font-green-sharp hide"></i>
                        <span class="caption-subject font-green-sharp bold uppercase">Property Visits</span>
                        <span class="caption-helper">monthly stats...</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="site_statistics2_loading">
                        <img src="<?php echo base_url('/public/admin/layout/img/loading.gif') ?>" alt="loading"/>
                    </div>
                    <div id="site_statistics2_content" class="display-none">
                        <div id="site_statistics2" class="chart">
                        </div>
                    </div>
                </div>
            </div>
                <!-- END PORTLET-->
                
                
                <table class="table table-striped table-bordered table-hover" id="sample_3">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Average CTR</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td>18 Nov 2015</td>
                                <td>50%</td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>18 Nov 2015</td>
                                <td>50%</td>
                            </tr>
                        </tbody>
                    </table>
            </div>
            <div class="tab-pane fade" id="tab4">
                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
                </p>
            </div>
            <div class="tab-pane fade" id="tab5">
                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
                </p>
            </div>
        </div>


    </div>


    
    <div class="clearfix">
    </div>

</div>