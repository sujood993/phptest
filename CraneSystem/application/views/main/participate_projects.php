<div class="content">
<div class="container-fluid">
<div class="row" style="    height: 144px;
margin-top: 106px;">
    <div class="col-sm-12">
           <div >
           
       <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>">Home</a></li>
           <li class="breadcrumb-item"><a href="#"> Projects</a></li>
       <li class="breadcrumb-item active">Participate</li></ol>
            
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
                          <th>Client Name</th>
                       
                          <th>Participate As</th>
                       
                          <th>Interested field</th>
                           <th>Managerial Skills</th>
                              <th>Public Relations</th>
                                  <th>  Investor</th>
                             <th>  Date Of Participationr</th>
                          <th style="text-align: center;"  >Options</th>
                       </tr>
                    </thead>
                    <tbody>
        
        
          <?php  //``approve``, `account_id`, `cv_name`, `workin`, `participate`, `skills`, `relations`, `investor`, `approve`, `approve_by`, `date`?>
                                <?php 
                                if($result):
                                foreach ($result as $row): ?>
                       <tr>
                          <td><a href="<?php echo $row->profile_url;?>" target="_blank" title="LinkedIn URL"><?php if ($row->type_account=='Person'){ echo $row->fname." ".$row->lname ;} else{echo $row->organization ;} ?></a></td>
                        
                          <td><?php echo $row->participate; ?></td>
                          <td><?php echo $row->workin; ?></td>
                           <td><?php echo $row->skills; ?></td>
                            <td><?php echo $row->relations; ?></td>
                             <td><?php echo $row->investor; ?></td>
                          
                          <td><?php echo $row->date; ?></td>
                       
                          <td style="text-align: center;">
               
                          <a title="View CV" target="_blank" href="<?php echo base_url('../uploads/cv/'.$row->cv_name); ?>"> <img src="<?php echo base_url('public/assets/images/file.png') ?>" style="width:35px!important;"  /></a>
 
                            <a class="btn btn-danger white" data-toggle="modal" data-target=".delete<?php echo $row->participate_id ?>" title="Delete"> <i class="ion-android-trash"></i></a>  </td>
                       </tr>
                       
                       <div class="modal fade delete<?php echo $row->participate_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																								<div class="modal-dialog modal-lg">
																									<div class="modal-content modeldelete">
																									
																										<div class="modal-body modelbodydelete">
																											<p>This participate in the upcoming projects. will be delete, Contiue?</p>
																							
																										</div>
                                                                                               	<div class="modal-footer">
																									<a  href="<?php echo base_url('Projects/Delete_Participate/'.$row->participate_id) ?>" class="btn btn-danger">Delete</a>
																									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																								</div>
																									</div>
																									<!-- /.modal-content -->
																								</div>
                                                                                                
																								<!-- /.modal-dialog -->
																							</div>
                                                                                            
                                                                                            
                                                                                            <div class="modal fade block<?php echo $row->participate_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																								<div class="modal-dialog modal-lg">
																									<div class="modal-content modeldelete">
																									
																										<div class="modal-body modelbodydelete">
																											<p>This <strong><?php echo $row->fname." ". $row->lname; ?></strong> will be block, Contiue?</p>
																							
																										</div>
                                                                                               	<div class="modal-footer">
																									<a  href="<?php echo base_url('Accounts/Block_AccountPerson/'.$row->participate_id) ?>" class="btn btn-danger">Block</a>
																									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																								</div>
																									</div>
																									<!-- /.modal-content -->
																								</div>
                                                                                                
																								<!-- /.modal-dialog -->
																							</div>
                                                                                               <div class="modal fade unblock<?php echo $row->participate_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																								<div class="modal-dialog modal-lg">
																									<div class="modal-content modeldelete">
																									
																										<div class="modal-body modelbodydelete">
																											<p>This <strong><?php echo $row->fname." ". $row->lname; ?></strong> will be unblock, Contiue?</p>
																							
																										</div>
                                                                                               	<div class="modal-footer">
																									<a  href="<?php echo base_url('Accounts/Unblock_AccountPerson/'.$row->participate_id) ?>" class="btn btn-info">Unblock</a>
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