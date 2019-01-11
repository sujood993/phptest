  <section class="page-title" style= "background-image: url(<?php echo base_url('public/images/background/6.jpg'); ?>);">
    	<div class="auto-container">
        	<h1>FAQs</h1>
            <ul class="page-breadcrumb">
            	<li><a href="<?php echo base_url('') ?>">Home</a></li>
                <li>FAQs</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <section class="faq-section">
    	<div class="auto-container">
        	<div class="sec-title-two">
        		<h2>Frequently Asked Questions</h2>
            	<div class="text"></div>
            </div>
            <!-- faq Form -->
            <div class="faq-search-box" style="display: none;">
                <form method="post" action="#">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="Search Your Question" required=""/>
                        <button type="submit"><span class="icon fa fa-search"></span></button>
                    </div>
                </form>
            </div>
            
            <div class="row clearfix">
                
                <div class="column col-md-10 col-sm-12 col-xs-12" style="float: none;margin: auto;">
                    <!--Accordian Box-->
                    <ul class="accordion-box style-two">
                                
                                <!--Block-->
                                

                           <?php if ($faqs): ?> 
                                           <?php foreach ($faqs as $row): ?>
                                <li class="accordion block">
                                    <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div><?php echo $row->faqs_que; ?></div>
                                    <div class="acc-content">
                                        <div class="content">
                                        	
                                                  <div class="text">
              <p><?php echo $row->faqs_ans; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                    <?php endforeach; ?>
                                                            <?php endif; ?>
                                <!--Block-->
                                
                                
                            </ul>
                    
                </div>
            </div>
            
        </div>
    </section>
    