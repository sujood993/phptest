<?Php
$this->db->select('*');
$this->db->from('accounts');
$this->db->order_by("account_id", "desc");
$this->db->where('account_id', $this->session->userdata('account_id'));
$query = $this->db->get();
$result = $query->result();
foreach ($result as $row):
    $type_account = $row->type_account;
    $fname = $row->fname;
    $lname = $row->lname;
    $dateOfBirth = $row->dateOfBirth;
    $register_as = $row->register_as;
    $email = $row->email;
    $phone = $row->phone;
    $organization = $row->organization;
    $activity = $row->activity;
    $country = $row->country;
    $looking = $row->looking;
    $profile_url = $row->profile_url;
    $contact_number = $row->contact_number;
endforeach;
?>
      <section class="page-title" style=  "background-image: url(<?php echo
base_url('public/images/background/6.jpg'); ?>);">
    	<div class="auto-container">
        	<h1>Update My Profile</h1>
            <ul class="page-breadcrumb">
            	<li><a href="<?php echo base_url('') ?>">Home</a></li>
                <li>Update My Profile</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side / Our Blog-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12" style="float: right!important;">
                <div class="sidebar-title"><h2>Update My Profile</h2></div>
                
                         <?php if ($this->session->userdata('type_account') == "Person") { ?>
                        <div class="comments-area">
                            <!-- Comment Form -->
                        <div class="comment-form">
                            <div class="form-inner">
                                <!--Comment Form-->
                                <form method="post" action="<?php echo base_url('Accounts/update_profile/'.$this->session->userdata('account_id')) ?>">
                                    <div class="row clearfix">
                                    
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>You have registered as:</label><br />
                                            <input type="text" value="Person" name="type_account" required="" class="read-only" readonly="" />
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>You Are:</label><br />
                                            <select name="register_as">
                                            <option value="<?php echo $register_as ?>"><?php echo $register_as ?></option>
                                                <option value="Student">Student</option>
                                                <option value="Professional">Professional</option>
                                                <option value="job seeker">Job Seeker</option>
                                                <option value="freelancer">Freelancer</option>
                                            </select>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>First Name:</label><br />
                                            <input type="text" value="<?php echo $fname ?>" name="fname" required="" />
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>Last Name:</label><br />
                                            <input type="text"  value="<?php echo $lname ?>" name="lname"required="" />
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>E-mail:</label><br />
                                            <input type="email"  value="<?php echo $email ?>" name="email" required="" />
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>LinkedIn URL:</label><br />
                                            <input type="url"  value="<?php echo $profile_url ?>" name="profile_url" />
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>Date of Birth:</label><br />
                                            <input type="date" value="<?php echo $dateOfBirth ?>" name="dateOfBirth" required="" />
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>Mobile Number:</label><br />
                                            <input type="text" value="<?php echo $phone ?>" name="phone" required="" />
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <input class="theme-btn btn-style-two" type="submit" name="update" value="Save Update"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
					</div>
                    <?php } else {?>
                    
                    <div class="comments-area">
                            <!-- Comment Form -->
                        <div class="comment-form">
                            <div class="form-inner">
                                <!--Comment Form-->
                                <form method="post" action="<?php echo base_url('Accounts/update_profile/'.$this->session->userdata('account_id')) ?>">
                                    <div class="row clearfix">
                                    
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>You have registered as:</label><br />
                                            <input type="text" value="Organization" name="type_account" required="" class="read-only" readonly="" />
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>Are you looking for:</label><br />
                                      <select  name="looking">
                                        <option value="<?php echo $looking ?>"><?php echo $looking ?></option>
                            <option value="New investments">New investments</option>
                            <option value="Participate in new projects">Participate in new projects</option>
                            <option value="Innovate new ideas and looking for support">Innovate new ideas and looking for support</option>
                            <option value="Interested to do marketing">Interested to do marketing</option>
                            </select>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>Name of organization:</label><br />
                                            <input type="text" value="<?php echo $organization ?>" name="organization" required="" />
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>Activity :</label><br />
                                            <input type="text"  value="<?php echo $activity ?>" name="activity"required="" />
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>E-mail:</label><br />
                                            <input type="email"  value="<?php echo $email ?>" name="email" required="" />
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>LinkedIn URL:</label><br />
                                            <input type="url"  value="<?php echo $profile_url ?>" name="profile_url" />
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>Country:</label><br />
                                            <input type="text" value="<?php echo $country ?>" name="country" required="" />
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>Contact number:</label><br />
                                            <input type="text" value="<?php echo $contact_number ?>" name="contact_number" required="" />
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <input class="theme-btn btn-style-two" type="submit" name="update" value="Save Update"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
					</div>
                    
                    <?php }?>
                </div>
                
                
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                	<aside class="sidebar">
                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                        	<form method="post" action="<?php echo base_url('Projects/Search') ?>">
                                <div class="form-group">
                                    <input type="search" name="search" value="" placeholder="Enter Search Keywords" required=""/>
                                    <button type="submit" name="save" ><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>
                        <div class="upper-column info-box">
                            <a href="<?php echo base_url('Projects/New_Project') ?>" class="theme-btn btn-style-two establish">Establish New Project</a>
                        </div>
                        <!-- Popular Tags -->
                        <div class="sidebar-widget hvr-bounce-to-bottom sidebar-border">
                            <h3 style="color: #fff;">Participate in the upcoming projects.</h3>
                            <br />
                            <a href="<?php echo base_url('Projects/Participate') ?>" class="theme-btn btn-style-five">Participate</a>
                        </div>
                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h2>Welcome,   <?php if ($this->session->userdata('type_account') == "Person") {echo $fname;  } else { echo $organization;  }?></h2>
                            </div>
                            <ul class="cat-list">
                                <li><a href="<?php echo base_url('Projects/My_Projects') ?>"><i class="fa fa-folder"></i>My Projects</a></li> 
                                 <li><a href="<?php echo base_url('Projects/New_Project') ?>"><i class="fa fa-edit"></i>Establish New Project</a></li>
                                <li><a href="<?php echo base_url('Projects/Participate') ?>"><i class="fa fa-send"></i>Participate Upcoming Projects</a></li>
                                                                <li><a href="<?php echo base_url('Accounts/Notifications') ?>"><i class="fa fa-bell"></i>Notifications<span class="badge badge-success float-right" style="float: right;background: #da7928;;"><?php if($Notifrows){ echo $Notifrows;} ?></span></a></li>
                                <li><a href="<?php echo base_url('Accounts/Messages') ?>"><i class="fa fa-envelope"></i>Messages<span class="badge badge-success float-right" style="float: right;background: #27456b;"><?php if($msgread){ echo $msgread;} ?></span></a></li>
                                
                                <li><a href="<?php echo base_url('Accounts/My_profile') ?>"><i class="fa fa-user"></i>My Profile</a></li>
                                <li><a href="<?php echo base_url('Accounts/logout') ?>"><i class="fa fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
                
            </div>
        </div>
    </div>
    