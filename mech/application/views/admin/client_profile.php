<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Client Profile</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Client Profile</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-lg-5 offset-lg-3">
            <h6 class="mb-0 text-uppercase">Client Profile</h6>
            <hr/>
            <div class="card">
             <?php foreach ($h as $profile ) {
                    $user_id=$profile->user_id;
              
              ?>
              <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                      <img src="<?= base_url('assets/images/avatar.png'); ?>">
                      <div class="mt-3">
                        <h4><?php if($profile->user_fname){ echo $profile->user_fname; } ?>  <?php if($profile->user_lname){ echo $profile->user_lname; } ?></h4>
                              <p class="text-secondary mb-1">Status:<?php if(isset($profile->user_status)) { 

                                                                       if($profile->user_status==1)
                                                                        { ?>
                                                                           <span class="badge bg-success">Active</span>
                                                                       <?php
                                                                        }
                                                                     
                                                                       else
                                                                       { ?>

                                                                        <span class="badge bg-primary">Inactive/Deleted</span>

                                                                     <?php  }


                                                                   }   ?>  </p>
                        <p class="text-secondary mb-1">Spent: $<?= $profile->pesa; ?></p>
                        <p class="text-muted font-size-sm">Orders: <?= $profile->orders; ?></p>
                        <a href="<?php echo base_url('admin/user_details/').$profile->user_id.'/1'; ?>"><button class="btn btn-primary">Orders</button></a>
                        <a href="#messageModal<?php echo $profile->user_id;  ?>" data-bs-target="#messageModal<?php echo $profile->user_id;  ?>" data-bs-toggle="modal">
                             <button class="btn btn-outline-primary">Message</button>
                         </a>
                         <a href="#emailModal<?php echo $profile->user_id;  ?>" data-bs-target="#emailModal<?php echo $profile->user_id;  ?>" data-bs-toggle="modal">
                        <button class="btn btn-success">Email</button>
                         </a>
                        <a href="#myModal<?php echo $profile->user_id;  ?>" data-bs-target="#myModal<?php echo $profile->user_id;  ?>" data-bs-toggle="modal">
                        <button class="btn btn-warning">Issue Coupon</button>
                        </a>
                      </div>
                    </div>
                    <hr class="my-4">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="bx bx-envelope font-20"></i> Email</h6>
                        <span class="text-secondary"><?= $profile->user_email; ?></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="bx bx-phone font-20"></i> Phone</h6>
                        <span class="text-secondary"><?= $profile->user_phone; ?></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="bx bx-globe font-20"></i> Website</h6>
                        <span class="text-secondary"><?= $profile->website; ?></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="bx bx-time font-20"></i> Joined</h6>
                        <span class="text-secondary"><?= date('d-m-Y H:i:s',strtotime($profile->user_added)); ?></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="bx bx-radar font-20"></i>Last Order On</h6>
                        <span class="text-secondary"><?= date('d-m-Y H:i:s',strtotime($profile->latest)); ?></span>
                      </li>
                       <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="bx bx-undo font-20"></i>Change Status</h6>
                        <span class="text-secondary">
                                                         <?php  if($profile->user_status==1)
                                                                        { ?>
                                                                          <a href="<?php echo base_url('admin/change_status/').$profile->user_id.'/0/1'; ?>">
                                                                           <button class="btn btn-md btn-warning">Deactivate/Delete</button>
                                                                          </a>
                                                                       <?php
                                                                        }
                                                                       else
                                                                       { ?>
                                                                       <a href="<?php echo base_url('admin/change_status/').$profile->user_id.'/1/1'; ?>">
                                                                        <button class="btn btn-md btn-primary">Activate</button>
                                                                       </a>

                                                                     <?php  }  ?>
                        </span>
                      </li>
                    </ul>
                  </div>
                <?php } ?>

                </div> <!-- end content -->
           </div>
        </div>
      </div>
   </div>      

   <!-- iissue coupon -->
     <div class="modal" id="myModal<?php echo $user_id;  ?>">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">

                                                                    <!-- Modal Header -->
                                                                    <div class="modal-header">
                                                                      <h4 class="modal-title">Issue Coupon</h4>
                                                                      <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                                                                    </div>

                                                                    <!-- Modal body -->
                                                                    <div class="modal-body">
                                                                      <form method="post" action="<?php echo base_url('admin/issue_coupon_clients') ?>">

                                                                         <input type="hidden" name="user_id" value="<?php if(isset($user_id)) { echo $user_id;  }   ?>">
                                                                          

                                                                         <label>Coupon Code</label>
                                                                         <input type="text" class="form-control" value="" name="coupon_code" placeholder="Enter Code" required>
                                                                         <br>

                                                                          <label>Coupon Discount %</label>
                                                                         <input type="number" class="form-control" name="coupon_discount" placeholder="Discount" required>

                                                                         <br>

                                                                         <button type="Submit" class="btn btn-primary">Submit</button>

                                                                      </form>
                                                                    </div>

                                                                    <!-- Modal footer -->
                                                                    <div class="modal-footer">
                                                                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                                    </div>

                                                                  </div>
                                                                </div>
          </div>

                           <div class="modal" id="emailModal<?php echo $user_id;  ?>">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">

                                                                    <!-- Modal Header -->
                                                                    <div class="modal-header">
                                                                      <h4 class="modal-title">Send Email</h4>
                                                                      <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                                                                    </div>

                                                                    <!-- Modal body -->
                                                                    <div class="modal-body">
                                                                      <form method="post" action="<?php echo base_url('admin/client_send_mail') ?>">

                                                                         <input type="hidden" name="user_id" value="<?php if(isset($user_id)) { echo $user_id;  }   ?>">
                                                                          

                                                                         <label>Subject</label>
                                                                         <input type="text" class="form-control" value="" name="subject" placeholder="Subject" required>
                                                                         <br>

                                                                          <label>Message</label>
                                                                          <textarea class="form-control" name="message" rows="7"></textarea>

                                                                         <br>

                                                                         <button type="Submit" class="btn btn-primary">Send Email</button>

                                                                      </form>
                                                                    </div>

                                                                    <!-- Modal footer -->
                                                                    <div class="modal-footer">
                                                                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                                    </div>

                                                                  </div>
                                                                </div>
          </div>





              <div class="modal" id="messageModal<?php echo $user_id;  ?>">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">

                                                                    <!-- Modal Header -->
                                                                    <div class="modal-header">
                                                                      <h4 class="modal-title">Send Message</h4>
                                                                      <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                                                                    </div>

                                                                    <!-- Modal body -->
                                                                    <div class="modal-body">

                                                                         <form action="<?php echo base_url('admin/send_message') ?>" method="post">

             <div class="box-body">
                                 
                                

                                                    
                            <!-- Tab panes -->

                                 
                                  
                                   <input type="hidden" name="user_id" value="<?php echo $user_id;  ?>">



                                  <div class="row mb-3">
                                   
                                      
                                        
                                        <label for="inputEmail" class="col-xl-8 form-control-label">Subject</label>
                                        <div class="col-xl-10">
                                            <input class="form-control" value="" name="subject" id="title"  type="text" required>
                                        </div>
                                        
                                        
                                  </div>
                                   

                                  <div class="row mb-3">
                                    
                                       
                                        <label for="inputEmail" class="col-xl-8 form-control-label">Message</label>
                                        <div class="col-xl-10">
                                            <textarea rows="7" class="form-control" value="" name="message" id="title"  type="text" required></textarea>
                                        </div>
                                     
                                        
                                     
                                    
                                  </div>
                                    
                                 
                                 
                                    
                                   

                                  
                                    
                                                                       
                               

                                 <div class="form-group">
                                   
                                   <div class="col-xl-10">
                                     <input type="submit" style="color:#fff;" name="submit" class="submit btn btn-primary btn-md" value="Send Message" />
                                    </div>
                                 
                                </div>



                            </div>
                               

                              
                                 
                            </form>
                                                                        
                                                                    </div>

                                                                    <!-- Modal footer -->
                                                                    <div class="modal-footer">
                                                                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                                    </div>

                                                                  </div>
                                                                </div>
          </div>

                

                <!-- Footer Start -->
              