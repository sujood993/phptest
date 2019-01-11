<?php

/**
 * @author gencyolcu
 * @copyright 2018
 */



?> <section class="page-title" style="background-image:url(images/background/6.jpg)">
    	<div class="auto-container">
        	<h1>Establish New Project</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>Establish New Project</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side / Our Blog-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="sidebar-title"><h2>Establish New Project</h2></div>
                
                        <!--Comments Area-->
                        <div class="comments-area">
                            <!-- Comment Form -->
                        <div class="comment-form">
                            <div class="form-inner">
                                <!--Comment Form-->
                                <form method="post" action="#">
                                    <div class="row clearfix">
                                    
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>Project name:</label><br />
                                            <input type="text" value="" name="" required="" />
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>Location of the project:</label><br />
                                            <input type="text" value="" name="" required="" />
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <label>Brief description about the project:</label><br />
                                            <textarea name="message" placeholder="" maxlength="200" style="height: 75px;"></textarea>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <label>Project description in details:</label><br />
                                            <textarea name="message" placeholder="" maxlength="200" style="height: 230px;"></textarea>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <label>Attach supporting documents: (charts/ drawings/ sketches/ Photos/ drafts)</label><br />
                                            <input type="file" value="" name="" />
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <h3>Proposed staff for the project:</h3>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>Staff Name:</label><br />
                                            <input type="text" value="" name="" required="" />
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>Staff Position:</label><br />
                                            <input type="text" value="" name="" required="" />
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>Expected budget:</label><br />
                                            <input type="text" value="" name="" required="" />
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>Personal documents:</label><br />
                                            <input type="file" value="" name="" required="" />
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <label>Appreciation letters/ published works/ recommendations:</label><br />
                                            <textarea name="message" placeholder="" maxlength="200" style="height: 75px;"></textarea>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <label>Academic Qualifications:</label><br />
                                            <textarea name="message" placeholder="" maxlength="200" style="height: 75px;"></textarea>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <button class="theme-btn btn-style-two" type="submit" name="submit-form">Publish Project</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
					</div>
                    
                </div>
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                	<aside class="sidebar">
						
                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                        	<form method="post" action="#">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Enter Search Keywords" required=""/>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>
                        
                        
                        <div class="upper-column info-box">
                            <a href="#" class="theme-btn btn-style-two establish">Establish New Project</a>
                        </div>
                    
                    
                        <!-- Popular Tags -->
                        <div class="sidebar-widget hvr-bounce-to-bottom sidebar-border">
                            <h3 style="color: #fff;">Participate in the upcoming projects.</h3>
                            <br />
                            <a href="#" class="theme-btn btn-style-five">Participate</a>
                        </div>
                        
                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h2>Welcome Sujood,</h2>
                            </div>
                            <ul class="cat-list">
                                <li><a href="<?php echo base_url('Projects/My_Projects') ?>"><i class="fa fa-folder"></i>My Projects</a></li> 
                                 <li><a href="#"><i class="fa fa-edit"></i>Establish New Project</a></li>
                                
                                
                                <li><a href="#"><i class="fa fa-send"></i>Participate Upcoming Projects</a></li>
                                <li><a href="<?php echo base_url('Accounts/Notifications')  ?>"><i class="fa fa-bell"></i>Notifications</a></li>
                                <li><a href="<?php echo base_url('Accounts/Messages')  ?>"><i class="fa fa-envelope"></i>Messages</a></li>
                                <li><a href="<?php echo base_url('Accounts/My_profile')  ?>"><i class="fa fa-user"></i>My Profile</a></li>
                                <li><a href="<?php echo base_url('') ?>"><i class="fa fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>