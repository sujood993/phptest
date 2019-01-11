<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themesbrand.com/agroxa/green/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Oct 2018 09:38:49 GMT -->

<head>
 <?php
        $this->load->view('include/head');
    ?>
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
 <?php
        $this->load->view('include/header');
    ?>
    </div>
  <div class="left side-menu">
 <?php
        $this->load->view('include/sidebar');
    ?>
    </div>
    <div class="content-page">
        <!-- Start content -->
          <?php
    $this->load->view($subview);
    ?>
            <!-- container-fluid -->
        </div>
        <!-- content -->
        <footer class="footer">&copy; <span class="orange">CRANE</span> Copyright 2018 . All right reserved.</footer>
    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
    </div>
  
               <?php
        $this->load->view('include/js');
    ?>
</body>
<!-- Mirrored from themesbrand.com/agroxa/green/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Oct 2018 09:38:49 GMT -->

</html>