<!-- Header Top -->
<style>
.logincranin{
    display: none;
}

</style>
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="clearfix">
                    
                 <?php if ($contact): ?> 
                                           <?php foreach ($contact as $row): ?>
                         
                                                       
                    <div class="top-left">
                    	<ul class="links clearfix">
                            <li><a href="mailto:<?php echo $row->email; ?>"><span class="icon flaticon-message"></span>   <?php echo $row->email; ?></a></li>
                        </ul>
                    </div>
                    
                    <!--Top Right-->
                    <div class="top-right clearfix">
                    	<!--social-icon-->
                        <div class="social-icon">
                        	<ul class="clearfix">
                                <li><a href="javascript:void(0);" style="cursor: text;">Follow Us :</a></li>
                            	<li><a href=" <?php echo $row->facebook; ?>" title="facebook"><span class="fa fa-facebook"></span></a></li>
                                <li><a href=" <?php echo $row->twitter; ?>" title="twitter"><span class="fa fa-twitter"></span></a></li>
                           
                                <li><a href=" <?php echo $row->linkedin; ?>" title="linkedin"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <!-- Header Top End -->
        
        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div style="margin: auto;" class="logo"><a href="<?php echo base_url('');?>"><img src="<?php echo base_url('public/images/logo.png');?>" alt="Crane Logo"/></a></div>
                    </div>
                    
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                    
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="<?php echo base_url('');?>">Home</a></li>
                                    <li class="dropdown"><a href="#">About Us</a>
                                    	<ul>
                                            <li><a href="<?php echo base_url('Maincontroller/About')?>">Who We Are</a></li>
                                            <li style="display: none;"><a href="<?php echo base_url('Maincontroller/Overview')?>">Crane Overview</a></li>
                                            <li><a href="<?php echo base_url('Maincontroller/HowItWorks')?>">How It Works</a></li>
                                            <li><a href="<?php echo base_url('Maincontroller/TermsAndCondition')?>">Terms and Condition</a></li>
                                            <li><a href="<?php echo base_url('Maincontroller/PrivacyPolicy')?>">Privacy Policy</a></li>
                                        </ul>
                                    </li>
                                    <?php    if ($this->session->userdata('logged_in')) { ?>
                                    <li><a href="<?php echo base_url('Projects/ALL_Projects')?>">Projects</a></li>
                                    <?php }?>
                                    <li><a href="<?php echo base_url('Maincontroller/FAQs')?>">FAQs</a></li>
                                    <li><a href="<?php echo base_url('Contact/Contact')?>">Contact us</a></li>
                                     <?php if ($this->session->userdata('logged_in')) { ?>
                                    <li class="logincranin"><a href="<?php echo base_url('Accounts/logout')?>">Log in</a></li>
                                         <?php }else{ ?>
                                         <li class="logincranin"><a href="<?php echo base_url('Maincontroller/login')?>">Log in</a></li>
                                               <?php }?>
                                 </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                            <?php if ($this->session->userdata('logged_in')) { ?>
                              <a style="width: 70px;" href="<?php echo base_url('Accounts/logout')?>" title="Log out" class="search-box-btn dropdown-toggle">
                                <span class="" style="font-size:18px;">Log out</span></a>
                            <?php }else{ ?>
                                <a style="width: 67px;" href="<?php echo base_url('Maincontroller/login')?>"  class="search-box-btn dropdown-toggle">
                                <span class="" style="font-size: 20px;">Log in</span></a>
                                <?php }?>
                            </div>
                        </div>
                        
                    </div>
                    <!--Nav Outer End-->
                    
            	</div>    
            </div>
        </div>
          <?php endforeach; ?>
                                                            <?php endif; ?>