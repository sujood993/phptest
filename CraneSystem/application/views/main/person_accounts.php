<div class="content">
<div class="container-fluid">
<div class="row" style="    height: 144px;
margin-top: 106px;">
    <div class="col-sm-12">
        <div >
           
       <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>">Home</a></li>
          
           <li class="breadcrumb-item"><a href="#">Accounts</a></li>  
       <li class="breadcrumb-item active">Persons</li></ol>
            
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
                          <th>Full Name</th>
                       
                          <th>Date Of Birth</th>
                       
                          <th>Are You:</th>
                           <th>Phone</th>
                              <th>Email</th>
                                  <th>  Date Of Registration</th>
                            <th>  Account Status</th>
                          <th style="text-align: center;"  >Options</th>
                       </tr>
                    </thead>
                    <tbody>
        
        
          <?php  //`account_id`, `type_account`, `fname`, `lname`, 
                    //`dateOfBirth`, `register_as`, `register_date`, `email`, `phone`,   `profile_url`,  `approve`,?>
                                <?php 
                                if($result):
                                foreach ($result as $row): ?>
                       <tr>
                       <?php if($row->profile_url!=NULL){?>
                          <td><a href="<?php echo $row->profile_url;?>" target="_blank" title="LinkedIn URL"><?php echo $row->fname." ". $row->lname; ?></a></td>
                        <?php }else{?><td><strong><?php echo $row->fname." ". $row->lname; ?></strong></td> <?php }?>
                          <td><?php echo $row->dateOfBirth; ?></td>
                           <td><?php echo $row->register_as; ?></td>
                            <td><?php echo $row->phone; ?></td>
                             <td><?php echo $row->email; ?></td>
                          
                          <td><?php echo $row->register_date; ?></td>
                               <td>
                               
                     
                               <?php if($row->block==1 ){
                              echo "<span style='color: red;'>Blocked </span>";
                              }else{
                             
                               echo "<span style='color: green;'>Active </span>";
                             
                           }?>
                             </td>
                          <td style="text-align: center;">
                          <a class="btn btn-primary waves-effect waves-light  white" href="<?php echo base_url('Projects/Send_Message/'.$row->account_id) ?>" title="Send message"> <i class="mdi mdi-message-bulleted"></i></a>
                          <?php if ($row->block==1){ ?>
                          <a class="btn btn-info white" data-toggle="modal" data-target=".unblock<?php echo $row->account_id ?>" title="Unblock"> <i class="mdi mdi-approval"></i></a>
                          <?php }else {?>
                          <a class="btn btn-warning white" data-toggle="modal" data-target=".block<?php echo $row->account_id ?>" title="Block"> <i class="mdi mdi-block-helper"></i></a>   <?php }?>
                          
                            <a class="btn btn-danger white" data-toggle="modal" data-target=".delete<?php echo $row->account_id ?>" title="Delete"> <i class="ion-android-trash"></i></a>  </td>
                       </tr>
                       
                       <div class="modal fade delete<?php echo $row->account_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																								<div class="modal-dialog modal-lg">
																									<div class="modal-content modeldelete">
																									
																										<div class="modal-body modelbodydelete">
																											<p>This <strong><?php echo $row->fname." ". $row->lname; ?></strong> will be delete, Contiue?</p>
																							
																										</div>
                                                                                               	<div class="modal-footer">
																									<a  href="<?php echo base_url('Accounts/Delete_AccountPerson/'.$row->account_id) ?>" class="btn btn-danger">Delete</a>
																									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																								</div>
																									</div>
																									<!-- /.modal-content -->
																								</div>
                                                                                                
																								<!-- /.modal-dialog -->
																							</div>
                                                                                            
                                                                                            
                                                                                            <div class="modal fade block<?php echo $row->account_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																								<div class="modal-dialog modal-lg">
																									<div class="modal-content modeldelete">
																									
																										<div class="modal-body modelbodydelete">
																											<p>This <strong><?php echo $row->fname." ". $row->lname; ?></strong> will be block, Contiue?</p>
																							
																										</div>
                                                                                               	<div class="modal-footer">
																									<a  href="<?php echo base_url('Accounts/Block_AccountPerson/'.$row->account_id) ?>" class="btn btn-danger">Block</a>
																									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																								</div>
																									</div>
																									<!-- /.modal-content -->
																								</div>
                                                                                                
																								<!-- /.modal-dialog -->
																							</div>
                                                                                               <div class="modal fade unblock<?php echo $row->account_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																								<div class="modal-dialog modal-lg">
																									<div class="modal-content modeldelete">
																									
																										<div class="modal-body modelbodydelete">
																											<p>This <strong><?php echo $row->fname." ". $row->lname; ?></strong> will be unblock, Contiue?</p>
																							
																										</div>
                                                                                               	<div class="modal-footer">
																									<a  href="<?php echo base_url('Accounts/Unblock_AccountPerson/'.$row->account_id) ?>" class="btn btn-info">Unblock</a>
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