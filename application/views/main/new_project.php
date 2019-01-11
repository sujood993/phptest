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
        	<h1>Establish New Project</h1>
            <ul class="page-breadcrumb">
            <li><a href="<?php echo base_url('') ?>">Home</a></li>
                <li>Establish New Project</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side / Our Blog-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12" style="float: right!important;">
                <div class="sidebar-title"><h2>Establish New Project </h2> </div>
        <div class="comments-area">
                                              <?php if (isset($Sucess)) { ?>
    <p style="text-align: center;    font-size: 22px;
}"><!--The login email is already registered/ Email or password is inccoorect echo your error & success messages here -->
        <span class="error-message" style="color: green;">
        You submitted the form correctly, waiting to be approved from CRANE.
       </span>
    </p>
    <?php } ?>
                
                        <div class="comment-form">
                            <div class="form-inner">
                                <!--`project_id`, `project_name`, `project_location`, `brif_desc`, `details_desc`, `budget`, `academic`-->
                                <form method="post" action="<?php echo base_url('Projects/Add_Project') ?>" enctype="multipart/form-data">
                                    <div class="row clearfix">
                                    
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label><span style="color:red">*</span>Project name:</label><br />
                                            <input type="text"  name="project_name" required="" />
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label><span style="color:red">*</span>Location of the project:</label><br />
                                            <input type="text" name="project_location" required="" />
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <label><span style="color:red">*</span>Brief description about the project:</label><br />
                                            <textarea name="brif_desc" placeholder="" maxlength="200" style="height: 75px;" required=""></textarea>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <label><span style="color:red">*</span>Project description in details:</label><br />
                                            <textarea name="details_desc" placeholder=""  style="height: 230px;" required=""></textarea>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <label>Attach supporting documents: (charts/ drawings/ sketches/ Photos/ drafts)</label><br />
                                            <input type="file" name="userFiles[]"  multiple="" size="20" />
                                        </div>
                                        
                                     
                                        
                                     
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <label><span style="color:red">*</span>Project requirements:</label><br />
                                            <textarea name="req" placeholder=""  style="height: 75px;" required=""></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label><span style="color:red">*</span>Expected budget:</label><br />
                                            <input type="text" value="" name="budget" required="" />
                                        </div>
                                        
                                       <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                                            <label>Personal documents:</label><br />
                                            <input type="file" value="" name="" required="" />
                                        </div>-->
                                        
                                     
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <label>Academic Qualifications:</label><br />
                                            <textarea name="academic" placeholder="" maxlength="200" style="height: 75px;"></textarea>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <input type="submit" name="save" class="theme-btn btn-style-two" value="Publish Project" />
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
  