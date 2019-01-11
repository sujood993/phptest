<section class="page-title" style= "background-image: url(<?php echo base_url('public/images/background/6.jpg'); ?>);">
    	<div class="auto-container">
        	<h1>Contact us</h1>
            <ul class="page-breadcrumb">
            	<li><a href="<?php echo base_url('') ?>">Home</a></li>
                <li>Contact us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <section class="contact-section">
    	<div class="auto-container">
        	<div class="row clearfix text-center">
            
            <!--Info Column-->
                <div class="info-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    <h2>To enquire about anything just sent us an email.</h2>
                    
        	
                     <?php if ($contact): ?> 
                                           <?php foreach ($contact as $row): ?>
                    	<ul>
                            <li class="emailcontac" style="    font-size: 18px;"><span>email:</span> <?php echo
$row->email; ?></li>
                        </ul>
                             <?php endforeach; ?>
                                                            <?php endif; ?>
                    </div>
                </div>
                
                
            	<!--Form Column-->
            	<div class="form-column col-md-6 col-sm-12 col-xs-12">
                	
                    <!--Contact Form-->
                    <h4 style="color:green;text-align: center;margin-bottom: 22px;"> <?php echo
$this->session->flashdata('message'); ?> </h4>
                    <div class="contact-form">
                    <h1 style="    font-size: 25px;
    color: black;
    font-weight: 800;"> Write your message directly</h1>
                        <form method="post" action="<?php echo base_url('Contact/SendContactMessage'); ?>" method="post">
                        	<!--Form Group-->
                            <div class="form-group">
                                <input type="text" name="name" value="" placeholder="Name*" required=""/>
                            </div>
                              <div class="form-group">
                                <input type="text" name="phone" value="" placeholder="Phone*" required=""/>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" value="" placeholder="Email Address*" required=""/>
                            </div>
                            <!--Form Group-->
                            <div class="form-group">
                                <input type="text" name="subject" value="" placeholder="Subject*" required=""/>
                            </div>
                            <!--Form Group-->
                            <div class="form-group">
                                <textarea name="message" placeholder="Your Message*" ></textarea>
                            </div>
                            <!--Form Group-->
                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-two">Send Message</button>
                            </div>
                        </form>
                    </div>
                    <!--Contact Form-->
                    
                </div>
                
            </div>
        </div>
    </section>