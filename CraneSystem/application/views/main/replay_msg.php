
	<?php /*`project_id`, `account_id`, `project_name`, `project_location`, `brif_desc`, `details_desc`, `budget`, `academic`, `approve`, `approve_by`, `date`*/ ?>
                                   <?php if ($result): ?> 
                                <?php foreach ($result as $row): ?>
<div class="content">
            <div class="container-fluid">
                <div class="row" style="    height: 144px;
    margin-top: 106px;">
                    <div class="col-lg-12">
                
           
       <ol class="breadcrumb" style="width: 1131px;

    margin-left: -13px;">
       <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>">Home</a></li>
           <li class="breadcrumb-item"><a href="#"> Projects</a></li>
       <li class="breadcrumb-item active"><?php if ($row->type_account=='Person'){ echo $row->fname." ".$row->lname ;} else{echo $row->organization ;} ?></li></ol>
            
        </div>
                     
                    </div>
                </div>
                <!-- end row -->
                <div class="page-content-wrapper"  >
                    
                    <div class="row">
                        <div class="col-12">
                           <div class="card m-b-20">
                           
                              <div class="card-body">
                                            <form action="<?php echo base_url('Projects/Replay_Message/'.$this->uri->segment(3).'/'.$this->uri->segment(4)); ?>" method="post">
                                            <!--  //`msg_id`, `admin_id`, `username`, `account_id`, `account_name`, `subject`, `message`, `type_msg`, `message_date_time`-->
                                                <div class="form-group">
                                                    <input type="text" name="account_name" class="form-control" value="<?php if ($row->type_account=='Person'){ echo $row->fname." ".$row->lname ;} else{echo $row->organization ;} ?>" placeholder="<?php if ($row->type_account=='Person'){ echo $row->fname." ".$row->lname ;} else{echo $row->organization ;} ?>"/>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Subject" name="subject"/>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="summernote" name="message" style="  width: 1067px;

    height: 214px;
    border: none;
    overflow: hidden!important;" >
                                            
                                                  </textarea>
                                                </div>
                                                <div class="btn-toolbar form-group mb-0">
                                                    <div class="">
                                                      
                                                        <input style="width: 186px;text-align: center;margin-left: 396px;" type="submit" name="send" value="Send" class="btn btn-primary waves-effect waves-light"/> 
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                                                                                
                                                                                                
                                                                                                                                                                         
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