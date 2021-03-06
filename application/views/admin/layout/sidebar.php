<div class="page-sidebar-wrapper">
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                <form class="sidebar-search " action="extra_search.html" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
                        </span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            
            <?php if($user_type == 1): ?>
            
            <li class="start active">
                <a href="<?php echo base_url('admin/dashboard'); ?>">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-basket"></i>
                    <span class="title">Property Management</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo base_url('admin/search'); ?>">Inventory Search</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/property/approved'); ?>">Approved Listing</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/property/pending'); ?>">Pending Listing</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/property/rejected'); ?>">Rejected Listing</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-rocket"></i>
                    <span class="title">My Account</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo base_url('admin/profile'); ?>">My Profile</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/profile/change_password'); ?>">Change Password</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/users/roles'); ?>">User Role Approval</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/users/approved'); ?>">Approved Users</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/users/pending'); ?>">Pending Users</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/users/rejected'); ?>">Rejected Users</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-diamond"></i>
                    <span class="title">Tools</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo base_url('admin/advertisement/view'); ?>">Add Advertisement</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/advertisement'); ?>">All Advertisement</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/alerts'); ?>">All Alert</a>
                    </li>
                </ul>
            </li>
            
            <?php else: ?>

            <li class="start active">
                <a href="<?php echo base_url('user/dashboard'); ?>">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-basket"></i>
                    <span class="title">Property Management</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo base_url('user/search'); ?>">Inventory Search</a>
                    </li>
                    <li>
                        <a href="javascript:;">
                        Add New Property <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo base_url('admin/property/advance'); ?>">Advance</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/property/quick'); ?>">Quick</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/property/active'); ?>">Active Listing</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/property/pending'); ?>">Pending Listing</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/property/rejected'); ?>">Rejected Listing</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/property/expired'); ?>">Expired Listing</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url('user/profile'); ?>">
                    <i class="icon-rocket"></i>
                    <span class="title">My Account</span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-diamond"></i>
                    <span class="title">Reports</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo base_url('user/traffic'); ?>">Traffic Summary</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-diamond"></i>
                    <span class="title">Tools</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo base_url('user/favorite'); ?>">Favorites</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('user/alert'); ?>">Create Alert</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('user/alert/manage'); ?>">Manage Alert</a>
                    </li>
                </ul>
            </li>
          <?php endif; ?>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>