            <!-- LOGO -->
            <div class="topbar-left"><a href="index.html" class="logo"><span><img src=" <?php echo base_url('public/assets/images/logo.png')?>" alt="" style="      height: 62px;
    width: 89px;"/> </span><i></a></div>
            <nav class="navbar-custom">
                <ul class="navbar-right d-flex list-inline float-right mb-0">
                
                
        <li class="dropdown notification-list">
            <div class="dropdown notification-list nav-pro-img"><a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="<?php echo base_url('public/assets/images/users/user.png') ?>" alt="user" class="rounded-circle"></a>
                <div
                    class="dropdown-menu dropdown-menu-right profile-dropdown">
                    <!-- item--><a class="dropdown-item" href="<?php echo base_url('Users/Profile/'.$this->session->userdata('admin_id')) ?>"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>                   
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="<?php echo base_url('Maincontroller/logout') ?>"><i class="mdi mdi-power text-danger"></i> Logout</a></div>
    </div>
    </li>
    </ul>
    </nav>