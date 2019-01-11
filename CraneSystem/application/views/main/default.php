
<style>
body{
    overflow: hidden!important;
}
footer p {
    display: block;
    font-size: 12px;
    line-height: 40px;
      margin-top: 63px;}
footer{
        margin-top: -55px!important;
}
.cat ::-webkit-scrollbar {
    width: 8px;
}
 
.cat ::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    border-radius: 20px;
}
 
.cat ::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
.table-container {
    height: 10em;
}
table {
    display: flex;
    flex-flow: column;
    height: 100%;
    width: 100%;
}
table thead {
    /* head takes the height it requires, 
    and it's not scaled when table is resized */
    flex: 0 0 auto;
    width: calc(100% - 0.9em);
}
table tbody {
    /* body takes all the remaining available space */
     height: 150px;
    flex: 1 1 auto;
    display: block;
    overflow-y: scroll;
}
table tbody tr {
    width: 100%;
}
table thead,
table tbody tr {
    display: table;
    table-layout: fixed;
    
}





</style>
<?php
 $this->db->select('*');
        $this->db->from('accounts');
        //$this->db->join('accounts', 'sender.account_id  = accounts.account_id ');
         
          //$this->db->where('sender.message_date_time', date('Y-m-d h:i:sa'));
     
        $this->db->where('type_account','Person');
        //$this->db->order_by('time_id', 'asc');
        $query = $this->db->get();
      $rowcountp = $query->num_rows();
 $this->db->select('*');
        $this->db->from('accounts');
        //$this->db->join('accounts', 'sender.account_id  = accounts.account_id ');
         
          //$this->db->where('sender.message_date_time', date('Y-m-d h:i:sa'));
     
        $this->db->where('type_account','Organization');
        //$this->db->order_by('time_id', 'asc');
        $query = $this->db->get();
      $rowcounto = $query->num_rows();
       $this->db->select('*');
        $this->db->from('projects');
        //$this->db->join('accounts', 'sender.account_id  = accounts.account_id ');
         
          //$this->db->where('sender.message_date_time', date('Y-m-d h:i:sa'));
     
        $this->db->where('approve',1);
        //$this->db->order_by('time_id', 'asc');
        $query = $this->db->get();
      $rowcountapp = $query->num_rows();
       $this->db->select('*');
        $this->db->from('projects');
        //$this->db->join('accounts', 'sender.account_id  = accounts.account_id ');
         
          //$this->db->where('sender.message_date_time', date('Y-m-d h:i:sa'));
     
        $this->db->where('approve',0);
        //$this->db->order_by('time_id', 'asc');
        $query = $this->db->get();
      $rowcountnp = $query->num_rows();

 ?>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box" style="height: 151px;">
                         
                          
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="page-content-wrapper" style="    margin-top: -96px!important;    height: 360px;">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary mini-stat position-relative ">
                                <div class="card-body">
                                    <div class="mini-stat-desc" style="    text-align: center;">
                                   
                                        <div class="text orangecrean">
                                        
                                            <h6 class="text-uppercase mt-5 text-white-50 orangecrean"> Persons clients</h6>
                                            <h3 class="mb-0 mt-0" style="color: #da7928;"><?php echo  $rowcountp ?></h3>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc" style="    text-align: center;">
                                   
                                        <div class="text orangecrean">
                                        
                                            <h6 class="text-uppercase mt-5 text-white-50 orangecrean" style="font-size: 15px!important;"> organizations clients</h6>
                                            <h3 class="mb-0 mt-0" style="color: #da7928;"><?php echo  $rowcounto ?></h3>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc" style="    text-align: center;">
                                   
                                        <div class="text orangecrean">
                                        
                                            <h6 class="text-uppercase mt-5 text-white-50 orangecrean"> published projects</h6>
                                            <h3 class="mb-0 mt-0" style="color: #da7928;"><?php echo $rowcountapp ?></h3>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc" style="    text-align: center;">
                                   
                                        <div class="text orangecrean">
                                        
                                            <h6 class="text-uppercase mt-5 text-white-50 orangecrean" >  Pending projects</h6>
                                            <h3 class="mb-0 mt-0" style="color: #da7928;"><?php echo $rowcountnp ?></h3>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-12">
                                <div class="card m-b-20">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Notification</h4>
                                        
                                        <table class="table  cat">
                                            <thead>
                                          
                       <tr>
                          <th> <i class="ion-calendar"></i> Date of activity</th>
                       
                          <th> <i class="mdi mdi-account"></i> Client name</th>
                       
                    
                           <th>Activity</th>
                       
                       </tr>
                                            </thead>
                                            <tbody>
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
            
                    </div>
				</div>
                </div>
                <!-- end page content-->
            </div>