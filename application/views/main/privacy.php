  <section class="page-title" style= "background-image: url(<?php echo base_url('public/images/background/6.jpg'); ?>);">
    	<div class="auto-container">
        	<h1>Privacy Policy</h1>
            <ul class="page-breadcrumb">
            	<li><a href="<?php echo base_url('') ?>">Home</a></li>
                <li>About Us</li>
                <li>Privacy Policy</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                	<aside class="sidebar default-sidebar">
						
                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="image">
                            	<img src="<?php echo base_url('public/images/about/5.jpg') ?>" style="height: 250px;" />
                            </div><br />
                      <ul class="blog-cat">
                                <li><a   href="<?php echo base_url('Maincontroller/About') ?>">Who We Are</a></li>
                            <li style="display: none;"><a href="<?php echo
base_url('Maincontroller/Overview') ?>">Crane Overview</a></li>
                            <li><a href="<?php echo base_url('Maincontroller/HowItWorks') ?>">How It Works</a></li>
                            <li><a   href="<?php echo base_url('Maincontroller/TermsAndCondition') ?>">Terms and Condition</a></li>
                            <li class="active" ><a href="<?php echo base_url('Maincontroller/PrivacyPolicy') ?>">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
                
                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                	<div class="company-single">
						<div class="inner-box">  
                      
                            <h3>Privacy Policy</h3>
                            <div class="text">
                            <?php if ($result): ?> 
                                           <?php foreach ($result as $row): ?>
                                           <?php echo $row->content_page; ?>
                                                         <?php endforeach; ?>
                                                                <?php endif; ?>                                                         
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    