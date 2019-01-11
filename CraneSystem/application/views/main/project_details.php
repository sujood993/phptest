
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
       <li class="breadcrumb-item active"><?php echo $row->project_name; ?></li></ol>
            
        </div>
                     
                    </div>
                </div>
                <!-- end row -->
                <div class="page-content-wrapper"  >
                    
                    <div class="row">
                        <div class="col-12">
                           <div class="card m-b-20">
                           
                              <div class="card-body">
																					<div class="media m-b-30">
						
																							<div class="media-body">
																								<h4 class="font-14 m-0"><strong>Published by</strong> <?php if ($row->type_account=='Person'){ echo $row->fname. $row->lname ;} else{echo $row->organization ;} ?></h4>
																								<p class="text-muted"><?php echo $row->email; ?></p>
																							</div>
																						</div>
																						<h4 class="mt-0 font-16"><strong style="font-size: 30px!important;"><?php echo $row->project_name; ?></strong></h4>
																						<p><strong>Brief description:</strong><?php echo $row->brif_desc; ?></p>
																						<p><strong>Proposed location :</strong><?php echo $row->project_location; ?> </p>
    			                                                                         <p><strong>Details:</strong> <?php echo $row->details_desc; ?></p>
                                                                                           <p><strong>Requirements of project:</strong><?php echo $row->req; ?> </p>
                                                                                           <p><strong>Expected budget:</strong><?php echo $row->budget; ?></p>
																						<hr/>
                                                                                         <h4><i class="fa fa-paperclip"></i>Documents</h4><br />
																							<div class="row">
                                                                                                    <?php if ($file): ?> 
                                <?php foreach ($file as $row2): ?>
                                                                                             
                               <?php if($row2->project_name!=Null){ ?>
																								<div class="col-xl-2 col-6">
																									<div class="card m-b-20" style="width: 86px;height: 107px;">
																										<img class="card-img-top img-fluid" style="height: 74px;width: 105px;" src="<?php echo base_url('public/assets/images/file.png') ?>" alt="<?php echo $row2->project_name; ?>"/>
																											<div class="p-t-10 p-b-10 text-center">
																												<a target="_blank" href="<?php echo base_url('../uploads/projects/'.$row2->project_name); ?>" class="text-muted font-500">Download</a>
																											</div>
																										</div>
																									</div>
									<?php }?>																                                                                                                                                                                                                                      
                       		  <?php endforeach; ?>
                                <?php endif; ?>
																									</div>
																									<a style="    float: right;" href="#" class="btn btn-danger waves-effect m-t-30"  data-toggle="modal" data-target=".delete<?php echo $row->project_id ?>">
																										<i class=" ion-android-trash"></i> Delete
																									</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                    <?php if ( $row->approve==0){ ?>
                                                                                                    <a  style="    float: right;    margin-right: 14px;" href="<?php echo base_url('Projects/Approve_Project/'.$row->project_id) ?>" class="btn btn-success   waves-effect m-t-30">
																										<i class="ion-android-checkmark"></i> Approve
																									</a><?php }?>
																								</div>
                                                                                                
                                                                                                <div class="modal fade delete<?php echo $row->project_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																								<div class="modal-dialog modal-lg">
																									<div class="modal-content modeldelete">
																									
																										<div class="modal-body modelbodydelete">
																											<p>This project will be delete, Contiue?</p>
																							
																										</div>
                                                                                               	<div class="modal-footer">
																									<a  href="<?php echo base_url('Projects/Delete_Project/'.$row->project_id) ?>" class="btn btn-danger">Delete</a>
																									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																								</div>
																									</div>
																									<!-- /.modal-content -->
																								</div>
                                                                                                
																								<!-- /.modal-dialog -->
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