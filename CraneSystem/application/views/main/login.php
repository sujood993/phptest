<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themesbrand.com/agroxa/green/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Oct 2018 09:39:34 GMT -->

<head>
 <?php
        $this->load->view('include/head');
    ?>
</head>

<body>
    <!-- Background -->
    <div class="account-pages"></div>
    <!-- Begin page -->
    <div class="wrapper-page">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center m-0"><a href="#" class="logo logo-admin"><img src="<?php echo base_url('public/assets/images/logo.png') ?>" style="    width: 119px;
    height: 99px;" alt="logo"></a></h3>
                <div >
                    <h4 class="text-muted font-18 m-b-5 text-center text-uppercase">Crane Your Creative Idea</h4>
                   
                    <form class="form-horizontal m-t-30" action="<?php echo base_url('Maincontroller/checklogin'); ?>" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                        </div>
                        <div class="form-group">
                            <label for="userpassword">Password</label>
                            <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                        </div>
                        <div class="form-group row m-t-20">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                  
                                   <a style="margin-left: -26px;" href="<?php echo base_url('Maincontroller/frgpsw') ?>" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                </div>
                               
                            </div>
                                    
                                      
                            <div class="col-12 text-center">
                               <?php if (isset($error)) { ?>
                                                <div style="    margin-bottom: 13px; ">
        											<i ></i><strong class="text-center" style="color: red;font-size: 13px;">
                                                  Sorry, your username or password is incorrect.
                                                     </strong>
        										</div>
                                        <?php } ?>
                                                                                      <?php if (isset($success)) { ?>
                                                     <div style="    margin-bottom: 13px;">
        											<i ></i><strong class="text-center" style="color: green;font-size: 13px;">
                                                     <?php echo $this->session->
    flashdata('message'); ?>
                                                     </strong>
        										</div>
                                        <?php } ?>
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        
    </div>
               <?php
        $this->load->view('include/js');
    ?>
</body>
<!-- Mirrored from themesbrand.com/agroxa/green/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Oct 2018 09:39:34 GMT -->

</html>