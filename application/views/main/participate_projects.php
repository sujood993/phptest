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

 <section class="page-title" style=  "background-image: url(<?php echo base_url('public/images/background/6.jpg'); ?>);">
    	<div class="auto-container">
        	<h1>Participate Upcoming Projects</h1>
            <ul class="page-breadcrumb">
            	<li><a href="<?php echo base_url('') ?>">Home</a></li>
                <li>Participate Upcoming Projects</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side / Our Blog-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12" style="float: right!important;">
                <div class="sidebar-title"><h2>Participate Upcoming Projects</h2></div>
                
                        <!--Comments Area-->
                        <div class="comments-area">
                            <!-- Comment Form -->
                        <div class="comment-form">
                            <div class="form-inner">
                                <!--Comment Form-->
                                <form method="post" action="<?php echo base_url('Projects/Participate'); ?>" enctype="multipart/form-data" method="post">
                                    <div class="row clearfix">
                                    
                                        
                                           <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label><span style="color:red">*</span>Participate as:</label><br />
                                            <select name="participate">
                                                <option value="Manger">Manger</option>
                                                <option value="Business Developer">Business Developer</option>
                                                <option value="Bank">Bank</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label><span style="color:red">*</span>Attach your CV:</label><br />
                                            <input type="file"  name="cv_name" required="" />
                                        </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label><span style="color:red">*</span>Preferred field to work :</label><br />
                                            <select name="workin">
                                                <option value="Technology">Technology</option>
                                                <option value="Construction">Construction</option>
                                                <option value="Trading">Trading</option>
                                                <option value="Research">Research</option>
                                                 <option value="Others">Others</option>
                                            </select>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label><span style="color:red">*</span>Participate as:</label><br />
                                            <select name="participate">
                                                <option value="Manger">Manger</option>
                                                <option value="Business Developer">Business Developer</option>
                                                <option value="Bank">Bank</option>
                                            </select>
                                        </div>
                                        <br />
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <h3><span style="color:red">*</span>Rate you capabilities:</h3>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <label>Managerial skills:</label>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">
                                            <input type="radio" checked="" name="skills" value="Excellent" /> Excellent
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">
                                            <input type="radio" name="skills" value="Good"  /> Good
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">
                                            <input type="radio" name="skills" value="Fair"  /> Fair
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">
                                            <input type="radio" name="skills" value="No Experience"  /> No Experience
                                        </div>
                                  
                                        
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <label>Public relations:</label>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">
                                            <input type="radio" name="relations" value="Excellent" checked=""  /> Excellent
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">
                                            <input type="radio" name="relations" value="Good" /> Good
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">
                                            <input type="radio" name="relations" value="Fair" /> Fair
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">
                                            <input type="radio" name="relations" value="No Experience" /> No Experience
                                        </div>
                                      
                                        
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <label>Investor:</label>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">
                                            <input type="radio" name="investor" value="Excellent" checked="" /> Excellent
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">
                                            <input type="radio" name="investor" value="Good"  /> Good
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">
                                            <input type="radio" name="investor" value="Fair"  /> Fair
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">
                                            <input type="radio" name="investor" value="No Experience"  /> No Experience
                                        </div>
                                       
                             
                                        
                                        
                                
                                        
                                       
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                 <input class="theme-btn btn-style-two" type="submit" name="save" value="Participate"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
					</div>
                    
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