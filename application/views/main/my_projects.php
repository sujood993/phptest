 <?Php
$this->db->select('*');
$this->db->from('accounts');
$this->db->order_by("account_id", "desc");
$this->db->where('account_id', $this->session->userdata('account_id'));
$query = $this->db->get();
$result2 = $query->result();
foreach ($result2 as $row):
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
        	<h1>Projects</h1>
            <ul class="page-breadcrumb">
            	<li><a href="<?php echo base_url('') ?>">Home</a></li>
                <li>Projects</li>
                <li>My Projects</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side / Our Blog-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12" style="float: right!important;">
                
                <div class="sidebar-title"><h2> Projects Established By You</h2></div>
                
                	<div class="blog-classic padding-right">
						
                                                           <?php if ($result): ?> 
              <?php foreach ($result as $row): ?>
                        <div class="news-block-three style-two">
                            <div class="inner-box">
                                <div class="lower-content">
                                    <div class="upper-box clearfix">
                                        <div class="posted-date pull-left">30 Nov. 2018</div>
                                        <ul class="post-meta pull-right">
                                            <li><a href="#" title="Delete Project" onclick="document.getElementById('delete<?php echo $row->project_id ?>').style.display='block'"><i class="fa fa-trash trash"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="lower-box"><!-- add pending word if admin not approved yet -->
                                        <h3><a href="#"><?php echo $row->
project_name; ?></a><strong> <?php if ($row->
approve != 1) {
            echo "( Pending )";
        } ?></a></strong></h3>
                                        <a href="<?php echo base_url('Projects/Projects_Details/' .
$row->project_id) ?>" class="theme-btn btn-style-two read-more">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="delete<?php echo $row->project_id ?>" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('delete<?php echo $row->project_id ?>').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
      </header>
      <div class="w3-container">
        <i style="font-size: 65px;" class="fa fa-warning"></i>
        <h2><strong>Are you sure?</strong></h2>
        <p>You won't be able to revert this!</p>
        <a href="<?php echo base_url('Projects/delete_project/' . $row->
project_id) ?>" class="theme-btn btn-style-two">Yes, delete it</a>
      </div>
    </div>
</div>
                                <?php endforeach; ?>
              <?php endif; ?>
                        <!--News Block Three-->
                        
                        
                        <!--News Block Three-->
                        
                        
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
    