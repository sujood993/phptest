<div class="content">
<div class="container-fluid">
<div class="row" style="    height: 144px;
margin-top: 106px;">
    <div class="col-sm-12">
        <div >
           
       <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>">Home</a></li>
          
  
       <li class="breadcrumb-item active"> Notification </li></ol>
            
        </div>
    </div>
</div>
<!-- end row -->
<div class="page-content-wrapper"  >
    
    <div class="row">
        <div class="col-12">
           <div class="card m-b-20">
              <div class="card-body">
                 
               <a href="#" style="margin-bottom: -37px;" data-toggle="modal" data-target=".delete"   class="btn btn-danger waves-effect waves-light"><i class="ion-ios7-trash-outline"></i> Delete all </a>
                
                <div class="modal fade delete" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																								<div class="modal-dialog modal-lg">
																									<div class="modal-content modeldelete">
																									
																										<div class="modal-body modelbodydelete">
																											<p> will be delete all notification, Contiue?</p>
																							
																										</div>
                                                                                               	<div class="modal-footer">
																									<a  href="<?php echo base_url('Notices/DeleteNotifications') ?>" class="btn btn-danger">Delete</a>
																									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																								</div>
																									</div>
																									<!-- /.modal-content -->
																								</div>
                                                                                                
																								<!-- /.modal-dialog -->
																							</div>
                 <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                  
                       <tr>
                          <th> <i class="ion-calendar"></i> Date of activity</th>
                       
                          <th> <i class="mdi mdi-account"></i> Client name</th>
                       
                    
                           <th>Activity</th>
                       
                       </tr>
                    </thead>
                    <tbody>
        
        
          <?php  //`account_id`, `type_account`, `fname`, `lname`, 
                    //`dateOfBirth`, `register_as`, `register_date`, `email`, `phone`,   `profile_url`,  `approve`,?>
                                <?php 
                                if($result):
                                foreach ($result as $row): ?>
                       <tr>
                          <td><?php echo $row->date; ?></td>
                        
                          <td><?php echo $row->username; ?></td>
                           <td><?php echo $row->fun_name; ?></td>
                            
                               
                          
                       </tr>
                       
                       
                                                                                            
                                                                                            
                                                                                            
                                                                                               
                                                                                            
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