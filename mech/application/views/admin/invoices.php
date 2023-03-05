<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Invoices</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Invoices</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
           
             <span style="float: right;">
             <button class="mb-0 btn btn-success btn-sm" data-bs-target="#createinvoice" data-bs-toggle="modal"><i class="bx bx-plus"></i>Create Invoice</button>
             </span>
             <br>
            <hr/>
                          <?php 
                                   if(!empty($message))
                                   { ?>
                                      <div class="alert alert-success">
                                         <?php echo $message; ?>
                                       </div>
                                      <?php

                                   }

                                ?>
              <div class="card">
                 <div class="card-body">
                           



                          
                                        <h4 class="header-title">Invoices</h4>


                                       
    
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0" id="example">
                                                <thead>
                                                      <tr>
                                                            <th>#</th>
                                                           
                                                           
                                                            <th>Amount</th>

                                                            <th>Status</th>
                                                            
                                                            <th>Chat</th>
                                                           
                                                            
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                      <?php
                                                          $order_id=""; 
                                                          foreach ($h as $row)
                                                          {   
                                                              $order_id=$row->order_id; 

                                                            ?>
                                                          <tr>
                                                              <td><a href="<?php echo base_url('admin/get_paper_details/').$row->order_id; ?>"><?php if(isset($row->order_id)) { echo $row->order_id;  }   ?></a></td>
                                                             
                                                              <td><?php if(isset($row->order_amount)) { echo $row->order_amount;  }   ?></td>

                                                              <td><?php if($row->order_technical_status==2)  { echo "paid";  }else{ echo "unpaid"; }   ?></td>
                                                             
                                                               <td><a href="<?php echo base_url('admin/message_client/').$row->order_id.'/'.$row->order_user_id; ?>"><button class="btn btn-success btn-sm">Message Client</button></a></td>
                                                               
                                                              
                                                            



                                                              
                                                           
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

                               <div class="modal" id="createinvoice">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">

                                                                    <!-- Modal Header -->
                                                                    <div class="modal-header">
                                                                      <h4 class="modal-title">Create Invoice</h4>
                                                                      <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                                                                    </div>

                                                                    <!-- Modal body -->
                                                                    <div class="modal-body">
                                                                      <form method="post" action="<?php echo base_url('admin/create_invoice') ?>">

                                                                        <label>Invoice Title</label>
                                                                         <input type="text" class="form-control"  name="order_title" required>
                                                                         <br>


                                                                        <label>Client</label>
                                                                         <select name="user_id" class="form-control">
                                                                            <?php 

                                                                              foreach ($clients as $client) { ?>

                                                                                <option value="<?= $client->user_id; ?>"><?php if(isset( $client->user_fname)){ echo $client->user_fname.' '; } 

                                                                                if(isset( $client->user_lname)){ echo $client->user_lname; } 


                                                                                ?></option>
                                                                               
                                                                            <?php  }

                                                                             ?>
                                                                            
                                                                         </select>
                                                                         <input type="hidden" name="order_id" value="<?php if(isset($order_id)) { echo $order_id;  }   ?>">
                                                                         <label></label>
                                                                         <input type="number" class="form-control"  name="amount" placeholder="amount" required>
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
               
