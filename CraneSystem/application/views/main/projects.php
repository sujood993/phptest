<div class="content">
<div class="container-fluid">
<div class="row" style="    height: 144px;
margin-top: 106px;">
    <div class="col-sm-12">
        <div >
           
       <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>">Home</a></li>
           <li class="breadcrumb-item"><a href="#"> Projects</a></li>
       <li class="breadcrumb-item active">Published Projects</li></ol>
            
        </div>
    </div>
</div>
<!-- end row -->
<div class="page-content-wrapper"  >
    
    <div class="row">
        <div class="col-12">
           <div class="card m-b-20">
              <div class="card-body">
                 
               
                 <table id="datatable-buttons" class="        table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                       <tr>
                          <th>Project Name</th>
                       
                          <th>Budget</th>
                          <th>Client Name</th>
                          <th>Date Published</th>
                          <th style="text-align: center;"  >Options</th>
                       </tr>
                    </thead>
                    <tbody>
                       <?php
                       //`account_id`, `type_account`, `fname`, `lname`, `dateOfBirth`,
                       // `register_as`, `register_date`, `email`, `phone`, `organization`, `activity`, 
                       //`country`, `contact_number`, `looking`, `profile_url`, `password`, `original_password`, `approve`, `confirm`, `block`, `approved_by`
                       //`project_id`, `account_id`, `project_name`, `project_location`, `brif_desc`, `details_desc`, `budget`, `academic`, `approve`, `approve_by`, `date`
                        if ($result): ?> 
                                <?php foreach ($result as $row): ?>
                       <tr>
                          <td><?php echo $row->project_name; ?></td>
                         
                          <td><?php echo $row->budget; ?></td>
                          <td><?php if ($row->type_account=='Person'){ echo $row->fname." ".$row->lname ;} else{echo $row->organization ;} ?></td>
                          <td><?php echo $row->date; ?></td>
                          
                          <td style="text-align: center;"><a href="<?php echo base_url('Projects/Project_details/'.$row->project_id) ?>" class="btn btn-info white" title="View"> <i class="ion-eye"></i></a>   <a class="btn btn-danger white" data-toggle="modal" data-target=".delete<?php echo $row->project_id ?>" title="Delete"> <i class="ion-android-trash"></i></a>  </td>
                       </tr>
                       
                       <div class="modal fade delete<?php echo $row->project_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																								<div class="modal-dialog modal-lg">
																									<div class="modal-content modeldelete">
																									
																										<div class="modal-body modelbodydelete">
																											<p>This project will be delete, Contiue?</p>
																							
																										</div>
                                                                                               	<div class="modal-footer">
																									<a  href="<?php echo base_url('Projects/Delete_PublishProject/'.$row->project_id) ?>" class="btn btn-danger">Delete</a>
																									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																								</div>
																									</div>
																									<!-- /.modal-content -->
																								</div>
                                                                                                
																								<!-- /.modal-dialog -->
																							</div>
                                                                                            
                       		  <?php endforeach; ?>
                                <?php endif; ?>
                      
                    </tbody>
                 </table>
              </div>
           </div>
        </div>
        <!-- end col -->
     </div>
    
    
    
    
    
</div>
</div>
<!-- end page content-->
</div>