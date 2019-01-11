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
<?Php
//`project_id`, `account_id`, `project_name`, `project_location`, `brif_desc`, `details_desc`, `budget`, `academic`, `approve`, `approve_by`, `date`
$project_id = $this->uri->segment(3);
$this->db->select('*');
$this->db->from('projects');
$this->db->order_by("project_id", "desc");
$this->db->join('accounts', 'accounts.account_id = projects.account_id');
$this->db->where('project_id', $project_id);
$query = $this->db->get();
$result = $query->result();
foreach ($result as $row):
    //`project_id`, `account_id`, `project_name`, `project_location`, `brif_desc`, `details_desc`, `budget`, `academic`, `approve`, `approve_by`, `date`
    $project_id = $row->project_id;
    $account_id = $row->account_id;
    $budget = $row->budget;
    $brif_desc = $row->brif_desc;
    $project_name = $row->project_name;
    $type_account = $row->type_account;
    $date = $row->date;
    $details_desc = $row->details_desc;
    $project_location = $row->project_location;
endforeach;
$this->db->select('*');
$this->db->from('comments');
$this->db->join('accounts', 'accounts.account_id = comments.account_id');
$this->db->where('project_id', $project_id);
$query = $this->db->get();
$result5 = $query->result();

?>
    <section class="page-title" style=  "background-image: url(<?php echo
base_url('public/images/background/6.jpg'); ?>);">
    	<div class="auto-container">
        	<h1>Projects</h1>
            <ul class="page-breadcrumb">
            	<li><a href="<?php echo base_url('') ?>">Home</a></li>
                <li > <a href="<?php echo base_url('Projects/ALL_Projects') ?>">Projects</a></li>
                <li><?php echo $project_name ?></a></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
                <!--Content Side / Our Blog-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12" style="float: right;">
                	<div class="blog-single padding-right">
                        <!--News Block Three-->
                        <div class="news-block-three style-two">
                            <div class="inner-box">
                                <div class="lower-content">
                                    <div class="upper-box clearfix">
                                        <div class="posted-date pull-left"><?php echo
$date; ?></div>
                                        <ul class="post-meta pull-right">
                                            <li style="display: none;">By: </li>
                                        </ul>
                                    </div>
                                    <div class="lower-box">
                                        <h3><?php echo $project_name ?></h3>
                                        <div class="text">
                                        	<p style="text-align: justify;"><?php echo
$details_desc ?></p>
                                               <div class="text">
                                      <p style="text-align: justify;">  <strong style="color: black;">Expected budget:</strong> <?php echo
$budget ?></p>
                                        </div>
                                          <div class="text">
                                       <p style="text-align: justify;"> <strong style="color: black;">Location of the project:</strong> <?php echo
$project_location ?></p>
                                        </div>
                                        </div>
                                     <br /><br />
                                        <div class="download-box">
                                        	<h4 class="join-title">This idea that I was looking for</h4>
                                            <a href="<?php echo base_url('Projects/Join_Project/' .
$project_id) ?>" class="theme-btn btn-style-one join-project" style="    margin-top: 15px;">Join Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Comments Area-->
                        <div class="comments-area" style="display: none;">
                            <div class="group-title"><h2>Comments 4</h2></div>
                            <div class="inner-box">
                                <!--Comment Box-->
                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="author-thumb"><img src="images/resource/author-6.jpg" alt=""></div>
                                        <div class="comment-inner">
                                            <div class="comment-info clearfix"><strong>Michale</strong></div>
                                            <div class="text">we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment. </div>
                                            <ul class="post-info">
                                                <li>Set. 12 2018</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--Comment Box-->
                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="author-thumb"><img src="images/resource/author-6.jpg" alt=""></div>
                                        <div class="comment-inner">
                                            <div class="comment-info clearfix"><strong>Michale</strong></div>
                                            <div class="text">we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment. </div>
                                            <ul class="post-info">
                                                <li>Set. 12 2018</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
      
                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="author-thumb"><img src="images/resource/author-6.jpg" alt=""></div>
                                        <div class="comment-inner">
                                            <div class="comment-info clearfix"><strong>Michale</strong></div>
                                            <div class="text">we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment. </div>
                                            <ul class="post-info">
                                                <li>Set. 12 2018</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Form -->
                        <div class="comment-form">
                            <div class="form-inner">
                                <!--Comment Form-->
                                <form method="post" action="<?php echo base_url('Projects/Add_Comment/'.$project_id) ?>">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <textarea name="text_comment" placeholder="Your Comment"></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group" style="">
                                            <input class="theme-btn btn-style-two" type="submit" name="save" value="Add Comment" />
                                        </div>
                                    </div>
                                </form>
                            </div>
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