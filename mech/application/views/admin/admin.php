<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Admins</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Admins</li>
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
                                            if(isset($success)) {
                                              ?>
                                               <div class="alert alert-success">
                                                 <?php

                                                      echo $success;
                                                  ?>
                                                 </div>
                                              <?php
                                            }
                                          ?>
                                        <h4 class="header-title">Admins <span style="float:right;"><a class="btn btn-success" href="<?= base_url() ?>admin/add_admin"><i class="fas fa-plus"></i> Add Admin</a></span></h4>
                                       
    
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                       <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Role</th>
                                                            <th>Action</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                      foreach ($h as $row)
                                                      {   ?>
                                                      <tr>
                                                          <td><?php if(isset($row->user_id)) { echo $row->user_id;  }   ?></td>
                                                          <td><?php if(isset($row->user_fname )) { echo $row->user_fname.' '.$row->user_lname;  }   ?></td>
                                                          <td><?php if(isset($row->user_email)) { echo $row->user_email;  }   ?></td>
                                                          <td><?php if(isset($row->role_name)) { 

                                                                       echo $row->role_name;
                                                                     


                                                                   }   ?></td>
                                                        
                                                           <td>
                                                               <?php if($row->role_id!=1) {  ?>
                                                                          <a href="<?php echo base_url('admin/delete_admin/').$row->user_id; ?>" onclick="return confirm('Are you sure you want to delete this admin?');">
                                                                           <button class="btn btn-md btn-warning">Delete Admin</button>
                                                                          </a>
                                                                <?php }else{ 

                                                                      echo "___";
                                                                }  ?>
                                                          </td>
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

                       
                        <!-- end row -->

                       
                        <!-- end row -->

                       
                        <!-- end row -->

                      
                        <!-- end row -->


                       
                        <!-- end row -->  
                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->

                

                <!-- Footer Start -->
               
