    
<style>
   .services-block-five .inner .services-text{height:55px;}
</style>

<!--Page Title-->
    <section class="page-title" style= "background-image: url(<?php echo
    base_url('public/images/background/6.jpg'); ?>);">
    	<div class="auto-container">
        	<h1>How It Works</h1>
            <ul class="page-breadcrumb">
            	<li><a href="<?php echo base_url('') ?>">Home</a></li>
                <li>About Us</li>
                <li>How It Works</li>
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
                            	<img src="<?php echo base_url('public/images/diagram1.png') ?>" style="height: 250px;" />
                            </div><br />
                        <ul class="blog-cat">
                                <li><a   href="<?php echo base_url('Maincontroller/About') ?>">Who We Are</a></li>
                            <li style="display: none;"><a href="<?php echo
base_url('Maincontroller/Overview') ?>">Crane Overview</a></li>
                            <li class="active" ><a href="<?php echo base_url('Maincontroller/HowItWorks') ?>">How It Works</a></li>
                            <li><a href="<?php echo base_url('Maincontroller/TermsAndCondition') ?>">Terms and Condition</a></li>
                            <li><a href="<?php echo base_url('Maincontroller/PrivacyPolicy') ?>">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
                
                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                	<div class="company-single">
						<div class="inner-box">
                            <h3>How It Works</h3>
                            	
                            <div class="text">
                                  <?php if ($result): ?> 
                                           <?php foreach ($result as $row): ?>
                                           <?php echo $row->content_page; ?>
                                                         <?php endforeach; ?>
                             <?php endif; ?>
                                
                            </div>
                            <div class="row clearfix">
                            
                            
                            <div class="services-block-five col-md-6 col-sm-6 col-xs-12">
                                	<div class="inner">
                                    	<div class="icon-box">
                                        	<span class="fa fa-laptop"></span>
                                        </div>
                                        <h4><a href="#">CRANE</a></h4>
                                        <div class="services-text">The program that manage the whole process and reserve the rights for all parties.</div>
                                    </div>
                                </div>
                                
                                
                                <!--Services Block Five-->
                                <div class="services-block-five col-md-6 col-sm-6 col-xs-12">
                                	<div class="inner">
                                    	<div class="icon-box">
                                        	<span class="fa fa-lightbulb-o"></span>
                                        </div>
                                        <h4><a href="#">INVENTOR</a></h4>
                                        <div class="services-text">Who creates the initial idea of the project.</div>
                                    </div>
                                </div>
                                
                                <!--Services Block Five-->
                                <div class="services-block-five col-md-6 col-sm-6 col-xs-12">
                                	<div class="inner">
                                    	<div class="icon-box">
                                        	<span class="fa fa-magic"></span>
                                        </div>
                                        <h4><a href="#">MANAGER</a></h4>
                                        <div class="services-text">Who has the sufficient experience to run out the project.</div>
                                    </div>
                                </div>
                                
                                <!--Services Block Five-->
                                <div class="services-block-five col-md-6 col-sm-6 col-xs-12">
                                	<div class="inner">
                                    	<div class="icon-box">
                                        	<span class="fa fa-line-chart"></span>
                                        </div>
                                        <h4><a href="#">BUSINESS DEVELOPER</a></h4>
                                        <div class="services-text">Who is responsible to do marketing for the project.</div>
                                    </div>
                                </div>
                                
                                <!--Services Block Five-->
                                <div class="services-block-five col-md-6 col-sm-6 col-xs-12">
                                	<div class="inner">
                                    	<div class="icon-box">
                                        	<span class="icon flaticon-money-bag-1"></span>
                                        </div>
                                        <h4><a href="#">BANK</a></h4>
                                        <div class="services-text">Who supports the project financially.</div>
                                    </div>
                                </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group" style="    text-align: center;">
                                 <a href="<?php echo base_url('Maincontroller/login'); ?>" class="theme-btn btn-style-two btnhow"> Start With Us </a>
                                        </div> 
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    