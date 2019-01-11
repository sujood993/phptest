<div class="content">
<div class="container-fluid">
<div class="row" style="    height: 144px;
margin-top: 106px;">
    <div class="col-sm-12">
    
        <div >
           
       <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>">Home</a></li>
          
           
       <li class="breadcrumb-item active">System Admins</li></ol>
            
        </div>
        
    </div>
 
</div>
<!-- end row -->
<div class="page-content-wrapper"  >
    
    <div class="row">
    
        <div class="col-12">
           <div class="card m-b-20">
              <div class="card-body">
                 <a href="#" style="margin-bottom: -37px;" data-toggle="modal" data-target=".add"   class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-account"></i> ADD NEW  ADMIN </a>
               <div class="modal fade add" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																								<div class="modal-dialog modal-lg">
																									<div class="modal-content " style="      width: 501px!important;margin-left: 187px!important;margin-top: 105px!important;">
																									<h6 style="margin-left: 19px;"><strong>Add New Admin</strong></h6>
																										<div class="modal-body modelbodydelete">
																									<form action="<?php echo base_url('Users/NewUser') ?>" method="post">
                                                                                                    	<div class=" row">
                                                                                                     <div class="form-group col-sm-6 "><label>Full name</label> <input type="text" class="form-control" name="fullname" required="" placeholder="Full name"/></div>
																						
                                                                                                        <div class="form-group col-sm-6 "><label>Email</label> <input type="text" class="form-control"  name="email" required="" placeholder="Email"/></div></div>
                                                                                                    
                                                                                                        <div class=" row">
                                                                                                     <div class="form-group col-sm-6 "><label>Username</label> <input type="text" class="form-control" name="username"  required="" placeholder="Username"></div>
																						
                                                                                                        <div class="form-group col-sm-6 "><label>Password</label> <input type="password" class="form-control" name="password"  required="" placeholder="Password"></div></div>
                                                                                                     
                                                                                                        
                                                                                                       <div class=" row">
                                                                                                       <div class="form-group col-sm-6 "><label>Phone</label> <input type="text" class="form-control" name="phone"   required="" placeholder="Phone"></div>
                                                                                                     <div class="form-group col-sm-6 "><label>Responsibility</label><select name="rule_id" class="form-control">
                                                                                                     
                                                                                                     <option value="1"> Admin</option>
                                                                                                                 <option value="0"> User</option>
                                                                                                     </select></div>
																						
                                                                                                        </div>
                                                                                                     
																									</div>
                                                                                               	<div class="modal-footer">
																							<input type="submit" name="save" value="Add" class="btn btn-primary waves-effect waves-light" />
																								
                                                                                                	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																								</form>
                                                                                                </div>
																									</div>
																									<!-- /.modal-content -->
																								</div>
                                                                                                
																								<!-- /.modal-dialog -->
																							</div>
                 <table id="datatable-buttons" class="        table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                  
                       <tr>
                             <th>Full name</th>
                          <th>Username</th>
                       
                          <th>Email</th>
                       
                          <th>Phone</th>
                        
                            <th>Responsibility</th>
                                 
                          
                          <th style="text-align: center;"  >Options</th>
                       </tr>
                    </thead>
                    <tbody>
        
        
          <?php  //`admin_id`, `admin_email`, `admin_phone`, `username`, `password`, `orginal_password`, `active`?>
                                <?php 
                                if($result):
                                foreach ($result as $row): ?>
                       <tr>
                         
                            <td><?php echo $row->fullname; ?></td>
                          <td><?php echo $row->username; ?></td>
                           <td><?php echo $row->email; ?></td>
                            <td><?php echo $row->phone; ?></td>
                         <td><?php IF ($row->rule_id==1){ echo "Admin"; }else{echo "User";}?></td>
                          
                
                               
                             
                          <td style="text-align: center;">
                          <a class="btn btn-info white" data-toggle="modal" data-target=".edit<?php echo $row->admin_id ?>" title="Edit"> <i class="mdi mdi-account-edit"></i></a>

                          
                            <a class="btn btn-danger white" data-toggle="modal" data-target=".delete<?php echo $row->admin_id ?>" title="Delete"> <i class="ion-android-trash"></i></a>  </td>
                       </tr>
                       
                       <div class="modal fade delete<?php echo $row->admin_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																								<div class="modal-dialog modal-lg">
																									<div class="modal-content modeldelete">
																									
																										<div class="modal-body modelbodydelete">
																											<p>This <strong><?php echo $row->username; ?></strong> will be delete, Contiue?</p>
																							
																										</div>
                                                                                               	<div class="modal-footer">
																									<a  href="<?php echo base_url('Users/DeleteUser/'.$row->admin_id) ?>" class="btn btn-danger">Delete</a>
																									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																								</div>
																									</div>
																									<!-- /.modal-content -->
																								</div>
                                                                                                
																								<!-- /.modal-dialog -->
																							</div>
                                                                                            
                                                                                            
                                                                                            <div class="modal fade edit<?php echo $row->admin_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																								<div class="modal-dialog modal-lg">
																									<div class="modal-content " style="      width: 501px!important;margin-left: 187px!important;margin-top: 105px!important;">
																									<h6 style="margin-left: 19px;"><strong>Edit Info</strong></h6>
																										<div class="modal-body modelbodydelete">
																									<form action="<?php echo base_url('Users/UpdateProfile/'.$row->admin_id ) ?>" method="post">
                                                                                                    	<div class=" row">
                                                                                                     <div class="form-group col-sm-6 "><label>Full name</label> <input type="text" class="form-control" required="" name="fullname" value="<?php echo $row->fullname; ?>" placeholder="Full name"/></div>
																						
                                                                                                        <div class="form-group col-sm-6 "><label>Email</label> <input type="text" class="form-control" required="" name="email" value="<?php echo $row->email; ?>" placeholder="Email"/></div></div>
                                                                                                    
                                                                                                        <div class=" row">
                                                                                                     <div class="form-group col-sm-6 "><label>Username</label> <input type="text" class="form-control" required="" name="username" value="<?php echo $row->username ?>" placeholder="Username"/></div>
																						
                                                                                                        <div class="form-group col-sm-6 "><label>Password</label> <input type="password" class="form-control" required="" name="password" value="<?php echo $row->pwd; ?>" placeholder="Password"/></div></div>
                                                                                                     
                                                                                                        
                                                                                                       <div class=" row">
                                                                                                       <div class="form-group col-sm-6 "><label>Phone</label> <input type="text" class="form-control" name="phone" value="<?php echo $row->phone; ?>" required="" placeholder="Phone"/></div>
                                                                                                     <div class="form-group col-sm-6 "><label>Responsibility</label><select name="rule_id" class="form-control">
                                                                                                    <?php if($row->rule_id==1){?>   <option value="1"> Admin</option> <?php }else {?> <option value="0"> User</option><?php } ?>
                                                                                                     <option value="1"> Admin</option>
                                                                                                                 <option value="0"> User</option>
                                                                                                     </select></div>
																						
                                                                                                        </div>
                                                                                                     
																									</div>
                                                                                               	<div class="modal-footer">
																							<input type="submit" name="save_update" value="Update" class="btn btn-primary waves-effect waves-light" />
																								
                                                                                                	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																								</form>
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