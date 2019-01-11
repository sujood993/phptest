
        <div class="slimscroll-menu" id="remove-scroll">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu" id="side-menu">
                 
                    <li><a href="<?php echo base_url(' ')?>" class="waves-effect"><i class="mdi mdi-home"></i> <span>Home</span></a></li>
                    <li style="display: none;"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Website Pages <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="#">Home page</a></li>
                            <li><a href="#">About page</a></li>
                            <li><a href="#">FAQS page</a></li>
                        </ul>
                    </li>
                    
                     <li><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-folder-multiple"></i><span> Projects<span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="<?php echo base_url('Projects/All')?>">Published </a></li>
                            <li><a  href="<?php echo base_url('Projects/Pending_Projects')?>">Pending </a></li>
                            <li><a  href="<?php echo base_url('Projects/Participate_Projects')?>">Participate </a></li>
                            <li><a  href="<?php echo base_url('Projects/Join_Projects')?>"> Join </a></li>
                            <li><a  href="<?php echo base_url('Projects/PendingJoin_Projects')?>">Pending Join </a></li>
                               
                        </ul>
                    </li>
               
                       <li><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-group"></i><span> Accounts<span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="<?php echo base_url('Accounts/Persons_Accounts')?>">Persons </a></li>
                            <li><a  href="<?php echo base_url('Accounts/Organizations_Accounts')?>">Organizations </a></li>
                            
                           
                        </ul>
                    </li>
                             
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-message-bulleted"></i><span> Messages<span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="<?php echo base_url('Maincontroller/ALLSent')?>">Sent</a></li>
                            <li><a  href="<?php echo base_url('Projects/ALLreceived')?>">Received <?php if($msgrow){?> <span class="badge badge-success " style="    background-color: #da7928;    margin-left: 59px;"><?php  echo $msgrow?></span> <?php } ?> </a></li>
                       
                               
                        </ul>
                    </li>
                    
                    
                    <li><a href="<?php echo base_url('Notices/All')?>" class="waves-effect"><i class="mdi mdi-bell"></i><span> Notification <?php if($rows){?> <span class="badge badge-success float-right" style="    background-color: #27456b;"><?php  echo $rows?></span> <?php } ?> </span></a></li>
                    
                    <li><a href="<?php echo base_url('Users/All')?>" class="waves-effect"><i class="mdi mdi-account-group"></i><span> System Admins </span></a></li>
                    
                    
                </ul>
            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>
        </div>
  