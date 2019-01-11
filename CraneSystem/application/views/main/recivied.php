<div class="content">
<div class="container-fluid">
<div class="row" style="    height: 144px;
margin-top: 106px;">
    <div class="col-sm-12">
        <div >
           
       <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="#"> Messages</a></li>  
             
       <li class="breadcrumb-item active">Received </li></ol>
            
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
                          <th>From</th>
                       
                          <th>To</th>
                       
                          <th>Subject</th>
                           <th>Date</th>
                       
                          
                          <th style="text-align: center;"  >Options</th>
                       </tr>
                    </thead>
                    <tbody>
        
        
          <?php  //`msg_id`, `admin_id`, `username`, `msg_id`, `account_name`, `subject`, `message`, `replay_id`, `message_date_time`?>
                                <?php 
                                if($result):
                                foreach ($result as $row): ?>
                       <tr>
                          <td><?php echo $row->account_name; ?></td>
                        
                          <td><?php echo $row->username; ?></td>
                           <td><?php echo $row->subject; ?></td>
                 
                             <td><?php echo $row->message_date_time; ?></td>
                          
                          
                               
                          <td style="text-align: center;">
                    
      <a href="<?php echo base_url('Projects/View_Msg/'.$row->msg_id ) ?>" class="btn btn-info white" title="View"> <i class="ion-eye"></i></a>
                          <a class="btn btn-primary waves-effect waves-light  white" href="<?php echo base_url('Projects/Send_Message/'.$row->account_id) ?>" title="Send message"> <i class="mdi mdi-message-bulleted"></i></a>
                            <a class="btn btn-danger white" data-toggle="modal" data-target=".delete<?php echo $row->msg_id ?>" title="Delete"> <i class="ion-android-trash"></i></a>  </td>
                       </tr>
                       
                       <div class="modal fade delete<?php echo $row->msg_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																								<div class="modal-dialog modal-lg">
																									<div class="modal-content modeldelete">
																									
																										<div class="modal-body modelbodydelete">
																											<p>This <strong></strong> will be delete, Contiue?</p>
																							
																										</div>
                                                                                               	<div class="modal-footer">
																									<a  href="<?php echo base_url('Projects/Delete_Msgsentr/'.$row->msg_id) ?>" class="btn btn-danger">Delete</a>
																									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																								</div>
																									</div>
																									<!-- /.modal-content -->
																								</div>
                                                                                                
																								<!-- /.modal-dialog -->
																							</div>
                                                                                            
                                                                                            
                                                                                            <div class="modal fade block<?php echo $row->msg_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																								<div class="modal-dialog modal-lg">
																									<div class="modal-content modeldelete">
																									
																										<div class="modal-body modelbodydelete">
																											<p>This <strong><?php echo $row->fname." ". $row->lname; ?></strong> will be block, Contiue?</p>
																							
																										</div>
                                                                                               	<div class="modal-footer">
																									<a  href="<?php echo base_url('Accounts/Block_AccountPerson/'.$row->msg_id) ?>" class="btn btn-danger">Block</a>
																									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																								</div>
																									</div>
																									<!-- /.modal-content -->
																								</div>
                                                                                                
																								<!-- /.modal-dialog -->
																							</div>
                                                                                               <div class="modal fade unblock<?php echo $row->msg_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																								<div class="modal-dialog modal-lg">
																									<div class="modal-content modeldelete">
																									
																										<div class="modal-body modelbodydelete">
																											<p>This <strong><?php echo $row->fname." ". $row->lname; ?></strong> will be unblock, Contiue?</p>
																							
																										</div>
                                                                                               	<div class="modal-footer">
																									<a  href="<?php echo base_url('Accounts/Unblock_AccountPerson/'.$row->msg_id) ?>" class="btn btn-info">Unblock</a>
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