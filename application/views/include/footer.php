     
                 <?php if ($contact): ?> 
                                           <?php foreach ($contact as $row): ?>
                         
    <section  class="call-to-action-section " style="background-image:url(<?php echo
base_url('public/images/background/1.jpg'); ?>);">
    	<div class="auto-container" style="    margin-top: -77px!important;">
        	<h2 style="font-size: 30px;">We are passionate about our work & <span>make growth of your project</span> Need a help?</h2>
            <div class="number-box clearfix">
            	<div class="pull-left" >
                	<div class="number"><a href="mailto:<?php echo $row->email; ?>"><span class="icon flaticon-message"></span>    <?php echo
$row->email; ?></a></div>
                </div>
                <div class="pull-right">
                	<a href="<?php echo base_url('Contact/Contact') ?>" class="theme-btn btn-style-three">Leave Message</a>
                </div>
            </div>
        </div>
    </section>
    <!--End Call To Action Section-->
    
    <!--Main Footer-->
    <footer class="main-footer">
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
        	<div class="auto-container">
            <div class="row clearfix">
                <div class="content-column col-md-6 col-sm-12 col-xs-12 text-left contactcopy">
            	   <div class="">&copy; <span class="orange">CRANE</span> Copyright 2018 . All right reserved.</div>
                </div>
                
                <div class="content-column col-md-6 col-sm-12 col-xs-12 text-right">
            	   <div class="">
                   <a href="<?php echo base_url('Maincontroller/TermsAndCondition') ?>" style="color:#777;">Terms and Condition</a>
                   <span class="orange">&nbsp;|&nbsp;</span>
                   <a href="<?php echo base_url('Maincontroller/PrivacyPolicy') ?>" style="color:#777;">Privacy Policy</a>
                   </div>
                </div>
            </div>
        </div>
        </div>
        
    </footer>
            <?php endforeach; ?>
                                                            <?php endif; ?>