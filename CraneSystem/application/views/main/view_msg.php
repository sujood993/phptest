
	<?php /*`project_id`, `account_id`, `project_name`, `project_location`, `brif_desc`, `details_desc`, `budget`, `academic`, `approve`, `approve_by`, `date`*/ ?>
                                 
<div class="content">
            <div class="container-fluid">
                <div class="row" style="    height: 144px;
    margin-top: 106px;">
                    <div class="col-lg-12">
                
           
       <ol class="breadcrumb" style="width: 1152px;
    margin-left: -15px;
    margin-right: 30px;">
       <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>">Home</a></li>
       
       <li class="breadcrumb-item active">Messages</li></ol>
            
        </div>
                     
                    </div>
                </div>
                <!-- end row -->
                <div class="page-content-wrapper"  >
                    
                    <div class="row">
                        <div class="col-12">
                           <div class="card m-b-20">
                           
                              <div class="card-body">
                                <?php if ($result): ?> 
                                <?php foreach ($result as $row): ?>
                                            <div class="media m-b-30">
                                                <div class="media-body">
                                                 <!--  //`msg_id`, `admin_id`, `username`, `account_id`, `account_name`, `subject`, `message`, `type_msg`, `message_date_time`-->
                                                        <?php if ($row->type_msg=="Admin"){ ?>
                                                        <h4 class="font-14 m-0"><strong>From:</strong> <?php echo $row->username ?></h4>
                                                    <h4 class="font-14 m-0"><strong>To:</strong>  <?php echo $row->account_name ?></h4>
                                                 <?php }else {?>
                                                    
                                                         <h4 class="font-14 m-0"><strong>From:</strong> <?php echo $row->account_name ?> </h4>
                                                    <h4 class="font-14 m-0"><strong>To:</strong> <?php echo $row->username ?> </h4>
                                               <?php  }?>
                                                    <small class="text-muted"><?php echo $row->message_date_time ?></small></div>
                                            </div>
                                            <h4 class="mt-0 font-16"><?php echo $row->subject; ?></h4>
                                           <p style="text-align: justify;">
                                           <?php echo $row->message; ?>
                                           
                                           </p>
                                                                                                                                                                                      
                       	
                                           <br />
                                             <h6 style="display: none;">Replay</h6>
                                          
                                            <div class="row" style="display: none;">
                                             <?php if ($replay): ?> 
                                <?php foreach ($replay as $row): ?>
                                                <div class="col-xl-12 col-12">
                                                    <hr /> 
                                                    <div class="media m-b-30">
                                                <div class="media-body">
                                                 <!--  //`msg_id`, `admin_id`, `username`, `account_id`, `account_name`, `subject`, `message`, `type_msg`, `message_date_time`-->
                                                        <h4 class="font-14 m-0"><strong>From:</strong> <?php echo $row->username ?></h4>
                                                  
                                                 
                                                    <small class="text-muted"><?php echo $row->message_date_time ?></small></div>
                                            </div>
                                            <h4 class="mt-0 font-16"><?php echo $row->subject; ?></h4>
                                           <p style="text-align: justify;">
                                           <?php echo $row->message; ?>
                                           
                                           </p>
                                                </div>
                                                                                                                                                                                        
                       		  <?php endforeach; ?>
                                <?php endif; ?>
                                            </div><a style="display: none;" href="<?php echo base_url('Projects/Replay_Message/'.$row->account_id.'/'.$row->msg_id) ?>" class="btn btn-secondary waves-effect m-t-30"><i class="mdi mdi-reply"></i> Reply</a>
                                            <a style="display: none;" href="<?php echo base_url('Projects/Send_Message/'.$row->account_id)?>" class="btn btn-secondary waves-effect m-t-30"><i class="mdi mdi-reply"></i> Send</a></div>
                                                                                                
                                      	  <?php endforeach; ?>
                                <?php endif; ?>                                                          
                              
                           </div>
                        </div>
                        <!-- end col -->
                     </div>
                    
                    
                    
                    
                    
				</div>
                </div>
                <!-- end page content-->
            </div>