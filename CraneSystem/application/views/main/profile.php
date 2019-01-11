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
               <div class="col-lg-12">
                <?php 
                                if($result):
                                foreach ($result as $row): ?>
                           <div class="col-lg-6">
                                      <p  > <strong>Full name :</strong> <?php echo $row->fullname; ?> </p> 
                                      <p  > <strong>Email :</strong> <?php echo $row->email; ?> </p> 
                                      <p  > <strong>Phone :</strong> <?php echo $row->phone; ?> </p> 
                                      <p> <strong>Username :</strong> <?php echo $row->username; ?> </p> 
                                      <p > <strong>Responsibility:</strong> <?php IF ($row->rule_id==1){ echo "Admin"; }else{echo "User";}?> </p> 
                                    </div>
                                       <?php if (isset($error)){?>
                                                    
            										<strong class="text-center" style="color:red;    margin-left: 242px;">
                                                     You entered the wrong current password, please make sure and try again.
                                                         </strong>
                                                    <?php } ?>
                                                    
                                                    <?php if (isset($success)){?>
                                                     <strong style="color: #089e08;    margin-left: 242px;" class="text-center">
                                                         Your password has been successfully changed, thank you.
                                                             </strong>
                                                    <?php } ?>
                                        <ul class="nav nav-pills nav-justified" role="tablist">
                                            <li class="nav-item waves-effect waves-light"><a class="nav-link active" data-toggle="tab" href="#home-1" role="tab">Edit profile</a></li>
                                            <li class="nav-item waves-effect waves-light"><a class="nav-link" data-toggle="tab" href="#profile-1" role="tab">Setting</a></li>
                                        
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home-1" role="tabpanel">
                                            <form action="<?php echo base_url('Maincontroller/UpdateMyProfile/'.$row->admin_id) ?>" method="post">
                                                <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">Full name</label><div class="col-sm-10"><input class="form-control" type="text" placeholder="Full name" name="fullname" value="<?php echo $row->fullname; ?>" required="" /></div></div>
                                               <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">Email</label><div class="col-sm-10"><input class="form-control" type="text" placeholder="Email" name="email" value="<?php echo $row->email; ?>" required="" /></div></div>
                                               <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">Phone</label><div class="col-sm-10"><input class="form-control" type="text" placeholder="Phone" name="phone" value="<?php echo $row->phone; ?>" required="" /></div></div>
                                               <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">Username</label><div class="col-sm-10"><input class="form-control" type="text" placeholder="Username" name="username" value="<?php echo $row->username; ?>" required="" /></div></div>
                                            <div class="col-lg-12" style="text-align: center;"><input style="    font-size: 20px;
    width: 262px;" type="submit" name="save_update" value="Edit personal information" class="btn btn-primary waves-effect waves-light" /></div>
                                            </form>
                                            </div>
                                            <div class="tab-pane p-3" id="profile-1" role="tabpanel">
                                                              <form action="<?php echo base_url('Maincontroller/CheckPassword') ?>" method="post">
                                                <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">Old password</label><div class="col-sm-10"><input class="form-control" type="text" placeholder="Current password" name="current_password"  required="" /></div></div>
                                               <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">New password</label><div class="col-sm-10"><input class="form-control" type="text" placeholder="New password" name="new_password" required="" /></div></div>
                                               
                                               
                                            <div class="col-lg-12" style="text-align: center;"><input style="    font-size: 20px;
    width: 189px;" type="submit" name="change" value="Change Password" class="btn btn-primary waves-effect waves-light" /></div>
                                            </form>
                                            </div>
                                         
                                        </div>
                                    </div>  
                                         		  <?php endforeach; ?>
                                <?php endif; ?>
               
                 
              </div>
           </div>
        </div>
        <!-- end col -->
     </div>
    
    
    
    
    
</div>
</div>
<!-- end page content-->
</div>