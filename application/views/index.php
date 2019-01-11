
<!DOCTYPE html>
<html>
<head><?php $this->load->view('include/head');?></head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <header class="main-header"><?php $this->load->view('include/header');?></header>
    
    <!-- main-content -->
    <?php $this->load->view($subview);?>
    
    <!-- footer -->
    <?php $this->load->view('include/footer');?>
    
</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<?php $this->load->view('include/js'); ?>

</body>
</html>