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
        	<h1>Projects</h1>
            <ul class="page-breadcrumb">
            	<li><a href="<?php echo base_url('') ?>">Home</a></li>
                <li>Projects</li>
                <li>My Profile</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
             <?php if ($this->session->userdata('type_account') == "Person") { ?>
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12" style="float: right!important;">
                <div class="sidebar-title"><h2> Your Profile Info</h2></div><br />
                <!--//`account_id`, `type_account`, `fname`, `lname`, `dateOfBirth`, `register_as`, 
//`register_date`, `email`, `phone`, `organization`, `activity`, `country`, `country`, `looking`, `profile_url`,
 //`password`, `original_password`, `approve`, `confirm`, `block`, `approved_by` -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 contact-info-widget">
                    <div class="inner-box">
                    	<ul>
                        	<li><span class="icon fa fa-info-circle"></span>You have registered as:<br/> <?php echo
$type_account ?></li>
                            <li><span class="icon fa fa-user"></span>First Name:<br/> <?php echo
$fname ?></li>
                            <li><span class="icon fa fa-envelope"></span>Email:<br/> <?php echo
$email ?></li>
                            <li><span class="icon fa fa-calendar"></span>Date Of Birth:<br/> <?php echo
$dateOfBirth ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 contact-info-widget">
                    <div class="inner-box">
                    	<ul>
                            <li><span class="icon fa fa-check-square-o"></span>You Are:<br/> <?php echo
$register_as ?></li>
                        	<li><span class="icon fa fa-user"></span>Last Name:<br/> <?php echo
$lname ?></li>
                            <li ><span class="icon fa fa-linkedin"></span>LinkedIn:<br/> <a href="<?php echo
$profile_url ?>" target="_blank"><?php if ($profile_url == null) {
        echo "  " . '<br />';
    } else {
        echo $profile_url;
    } ?></a></li>
                            <li><span class="icon fa fa-phone"></span>Mobile Number:<br/>  <?php echo
$phone ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><br /><br /><br />
                    <a style="width:100%;text-align: center; " href="<?php echo base_url('Accounts/update_profile/'.$this->session->userdata('account_id')) ?>" class="theme-btn btn-style-three">Edit My Profile</a>
                </div>
                </div>
                <?php } else { ?>
                    <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="sidebar-title"><h2> Your Profile Info</h2></div><br />

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 contact-info-widget">
                    <div class="inner-box">
                    	<ul>
                        	<li><span class="icon fa fa-info-circle"></span>You have registered as:<br/> <?php echo  $type_account ?></li>
                            <li><span class="icon fa fa-user"></span>Name of organization:<br/> <?php echo $organization ?></li>
                            <li><span class="icon fa fa-envelope"></span>Email:<br/> <?php echo $email ?></li>
                            <li><span class="icon fa fa-cog"></span>Activity :<br/> <?php echo $activity ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 contact-info-widget">
                    <div class="inner-box">
                    	<ul>
                            <li><span class="icon fa fa-check-square-o"></span>Are you looking for:<br/> <?php echo
$looking ?></li>
                        	<li><span class="icon fa fa-globe"></span>Country:<br/> <?php echo $country ?></li>
                            <li ><span class="icon fa fa-linkedin"></span>LinkedIn:<br/> <a href="<?php echo
$profile_url ?>" target="_blank"><?php if ($profile_url == null) {
        echo "  " . '<br />';
    } else {
        echo $profile_url;
    } ?></a></li>
                            <li><span class="icon fa fa-phone"></span>Contact number:<br/>  <?php echo
$contact_number ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><br /><br /><br />
                    <a style="width:100%;text-align: center;" href="<?php echo
base_url('Accounts/Update_profile/'.$this->session->userdata('account_id')) ?>" class="theme-btn btn-style-three">Edit My Profile</a>
                </div>
                </div>
                  <?php } ?>
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
                             <h2>Welcome,<?php if ($this->session->userdata('type_account') == "Person") {echo $fname;  } else { echo $organization;  }?></h2>
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