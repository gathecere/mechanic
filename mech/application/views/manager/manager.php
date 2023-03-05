<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Managers</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Managers</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <hr/>
              <div class="card">
                 <div class="card-body">

                                        <?php
                                              if($this->session->flashdata('message')){ ?>

                                                <div class="alert alert-success">

                                                       <?=  $this->session->flashdata('message');   ?>
                                                </div> 



                                          <?php   }
                                         ?>
                                        <h4 class="header-title">Manager <span style="float:right;">
                                          <a data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-success"><i class="fas fa-plus"></i> Add Manager</a>
                                        </span>
                                      </h4>
                                       
    
                                        <div class="table-responsive">
                                             <table class="table table-hover table-striped">
                                                  <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>View Profile</th>
                                                        <th>Status</th>
                                                        <th>Orders</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <?php
                                                    foreach ($h->result() as $row)
                                                    {   ?>
                                                    <tr>
                                                        <td><?php if(isset($row->user_id)) { echo $row->user_id;  }   ?></td>
                                                        <td><?php if(isset($row->user_fname )) { echo $row->user_fname.' '.$row->user_lname;  }   ?></td>
                                                        <td><?php if(isset($row->user_email)) { echo $row->user_email;  }   ?></td>
                                                        <td><a href="<?php echo base_url('admin/manager_profile/').$row->user_id; ?>"><button class="btn btn-success btn-sm">View Profile</button></a></td>
                                                       <td><?php if(isset($row->writer_status_name)) {  echo $row->writer_status_name;  }   ?></td>

                                                                   
                                                        <td><a href="<?php echo base_url('admin/user_details/').$row->user_id.'/3'; ?>"><button class="btn btn-warning btn-sm">Manager Orders</button></a></td>
                                                       
                                                    </tr>
                                                   <?php } ?>
                                                </tbody>
                                                            </table>
                                        </div>
                                    </div>
                                </div>
                              </div>
                           
                          
                        </div>
                        <!--- end row -->

                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                              <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                  <h4 class="modal-title">Add Manager</h4>
                                  <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">

                         <form id="signupform" action="<?php echo base_url('admin/add_manager_process') ?>" method="post" style="padding-bottom: 30px;">
                                 
                                

                                                    
                            <!-- Tab panes -->
                                 
                                  

                               <div class="row mb-3">

                                 <div class="col-md-6">
                                    <div class="form-group">
                                    
                                        
                                          
                                          <label for="inputEmail" class="col-xl-8 form-control-label">First Name</label>
                                          <div class="col-xl-10">
                                              <input class="form-control" value="" name="user_fname" id="title"  type="text" required>
                                          </div>
                                         
                                          
                                    </div>
                                  </div>
                                   <div class="col-md-6">
                                    <div class="form-group">
                                    
                                        
                                          
                                          <label for="inputEmail" class="col-xl-8 form-control-label">SurName</label>
                                          <div class="col-xl-10">
                                              <input class="form-control" value="" name="user_lname" id="title"  type="text" required>
                                          </div>
                                         
                                          
                                    </div>
                                  </div>

                                </div>

                                <div class="row mb-3">

                                 <div class="col-md-6">
                                    <div class="form-group">
                                    
                                        
                                          
                                          <label for="inputEmail" class="col-xl-8 form-control-label">Email</label>
                                          <div class="col-xl-10">
                                              <input class="form-control" value="" name="user_email" id="title"  type="email" required>
                                          </div>
                                         
                                          
                                    </div>
                                  </div>
                                   <div class="col-md-6">
                                    <div class="form-group">
                                    
                                        
                                          
                                          <label for="inputEmail" class="col-xl-8 form-control-label">Phone</label>
                                          <div class="col-xl-10">
                                              <input class="form-control" value="" name="user_phone" id="title"  type="text" placeholder="0722000000" required>
                                          </div>
                                         
                                          
                                    </div>
                                  </div>

                                </div>

                                 <div class="row mb-3">

                                 <div class="col-md-6">
                                    <div class="form-group">
                                    
                                        
                                          
                                          <label for="inputEmail" class="col-xl-8 form-control-label">Password</label>
                                          <div class="col-xl-10">
                                              <input class="form-control" value="" name="password" id="new_password"  type="password" required>
                                          </div>
                                         
                                          
                                    </div>
                                  </div>
                                   <div class="col-md-6">
                                    <div class="form-group">
                                    
                                        
                                          
                                          <label for="inputEmail" class="col-xl-8 form-control-label">Confirm Password</label>
                                          <div class="col-xl-10">
                                              <input class="form-control" value=""  name="confirm_password" id="confirm_password"  type="password" required>
                                          </div>
                                         
                                          
                                    </div>
                                  </div>

                                </div>
                                   

                                 
                                 
                                 
                                    
                                   

                                  
                                    
                                                                       
                               

                                 <div class="form-group mb-3">
                                   <div class="col-xl-10">
                                <input type="submit" style="color:#fff;" name="submit" class="submit btn btn-primary btn-md" value="Add Manager" />
                                  </div>
                                </div>
                               

                              
                                 
                            </form>
                          </div>
                         </div>
                         </div>
                         </div>

                       
                        <!-- end row -->

                       
                        <!-- end row -->

                       
                        <!-- end row -->

                      
                        <!-- end row -->


                       
                        <!-- end row -->  
                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->

                

                <!-- Footer Start -->
               
