<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themesbrand.com/agroxa/green/pages-recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Oct 2018 09:39:34 GMT -->

    <?php
$this->load->view('include/head');
?>

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
                    
                    <form class="form-horizontal m-t-30" action="<?php echo
    base_url('Maincontroller/checkemail'); ?>" method="post">
                        <div class="form-group">
                            <label for="useremail">Email</label>
                            <input type="email" name="admin_email" class="form-control" id="useremail" placeholder="Enter email">
                        </div>
                        <div class="form-group row m-t-20">
                           <div class="col-8">
                                <div class="custom-control custom-checkbox">
                                  
                                   <a style="margin-left: -26px;" href="<?php echo base_url('Maincontroller/login') ?>" class="text-muted"><i class="mdi mdi-key"></i> Back to login</a>
                                </div>
                            </div>
                            <div class="col-4 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button>
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
<!-- Mirrored from themesbrand.com/agroxa/green/pages-recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Oct 2018 09:39:34 GMT -->

</html>