<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">In Progress</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">In Progress</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <?php

           function format_interval(DateInterval $interval) {
              $result = "";
              if ($interval->y) { $result .= $interval->format("%y years "); }
              if ($interval->m) { $result .= $interval->format("%m months "); }
              if ($interval->d) { $result .= $interval->format("%d days "); }
              if ($interval->h) { $result .= $interval->format("%h hours "); }
              if ($interval->i) { $result .= $interval->format("%i minutes "); }
             // if ($interval->s) { $result .= $interval->format("%s seconds "); }

              return $result;
          }

        ?>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">In Progress</h6>
            <hr/>
              <div class="card">
                 <div class="card-body">
                                        <h4 class="header-title">In Progress</h4>
                                       
    
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0" id="example">
                                                <thead>
                                                      <tr>
                                                            <th>#</th>
                                                            <th>Due</th>
                                                            <th>Amount</th>
                                                           
                                                            <th>Chat</th>
                                                            <th>Cancel</th>
                                                            <th>Paper Details</th>
                                                            
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                     <?php
                                                          foreach ($pending->result() as $row)
                                                          {   ?>
                                                          <tr>
                                                              <td><a href="<?php echo base_url('admin/get_paper_details/').$row->order_id; ?>"><?php if(isset($row->order_id)) { echo $row->order_id;  }   ?></a></td>

                                                               <td><?php 
                                                               

                                                                      include 'time_progress.php';   

                                                                  

                                                               ?>
                                                                 
                                                               </td>
                                                            
                                                             
                                                              <td><?php if(isset($row->order_amount)) { echo $row->order_amount;  }   ?></td>

                                                             
                                                             <td><a href="<?php echo base_url('admin/message_client/').$row->order_id.'/'.$row->order_user_id; ?>"><button class="btn btn-success btn-sm">Message Client</button></a></td>

                                                             <!--   <td><a href="<?php // echo base_url('admin/submit_paper/').$row->order_id; ?>"><button class="btn btn-warning btn-sm">Submit Work</button></a></td> -->
                                                              <td><a  data-bs-target="#myModalz<?php echo $row->order_id;  ?>" data-bs-toggle="modal" class="btn btn-warning btn-sm">Process Cancellation</a></td>

                                                                <div class="modal" id="myModalz<?php echo $row->order_id;  ?>">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">

                                                                    <!-- Modal Header -->
                                                                    <div class="modal-header">
                                                                      <h4 class="modal-title">Process Refund</h4>
                                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    </div>

                                                                    <!-- Modal body -->
                                                                    <div class="modal-body">
                                                                      <form method="post" action="<?php echo base_url('admin/process_refund') ?>">
                                                                         <input type="hidden" name="order_id" value="<?php if(isset($row->order_id)) { echo $row->order_id;  }   ?>">
                                                                         <label>Order Amount</label>
                                                                         <input type="number" class="form-control" value="<?= $row->order_amount ?>" name="amount" placeholder="amount" required readonly="">
                                                                         <br>

                                                                          <label>Refund Amount</label>
                                                                         <input type="number" max="<?= $row->order_amount ?>" class="form-control" name="refund_amount" placeholder="amount" required>

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

                                                             
                                                              
                                                              <td><a href="<?php echo base_url('admin/get_paper_details/').$row->order_id; ?>"><button class="btn btn-primary btn-sm">Paper Details</button></a></td>
                                                              <?php
                                                                 if($row->order_type==3){ ?>

                                                                <td><a href="#myModal<?php echo $row->order_id ?>" data-bs-target="#myModal<?php echo $row->order_id ?>" data-bs-toggle="modal"><button class="btn btn-warning btn-sm">Action</button></a></td>


                                                                <div class="modal" id="myModal<?php echo $row->order_id ?>">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">

                                                                    <!-- Modal Header -->
                                                                    <div class="modal-header">
                                                                      <h4 class="modal-title">Action</h4>
                                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    </div>

                                                                    <!-- Modal body -->
                                                                    <div class="modal-body">

                                                                       
                                                                        
                                                                        <h5><a href="<?php echo base_url('admin/mark_complete/').$row->order_id; ?>">Mark as complete</a></h5>
                                                                     

                                                                        <h5><a href="<?php echo base_url('admin/request_revision/').$row->order_id; ?>">Revise</a></h5>

                                                                       
                                                                    </div>

                                                                    <!-- Modal footer -->
                                                                    <div class="modal-footer">
                                                                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                                    </div>

                                                                  </div>
                                                                </div>
                                                              </div>




                                                              <?php   }


                                                              ?>
                                                           
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
               
