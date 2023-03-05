<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Payment History</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Payment History</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Payment History</h6>
            <hr/>
              <div class="card">
                 <div class="card-body">
                                       
                                       
    
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0" id="example">
                                                <thead>
                                                      <tr>
                                                          <th>#</th>
                                                          <th>Amount ($)</th>
                                                          <th>Transaction Code</th>
                                                          <th>Payment Status</th>
                                                          <th>Transaction Details</th>
                                                          <th>Date</th>
                                                         
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                      <?php
                                                        $amount=0;
                                                        foreach ($p->result() as $row)
                                                            
                                                        {   
                                                            $amount+=$row->transaction_amount;

                                                          ?>
                                                        <tr>
                                                            <td><?php if(isset($row->transaction_id)) { echo $row->transaction_id;  }   ?></td>
                                                            <td><?php if(isset($row->transaction_amount)) { echo $row->transaction_amount;  }   ?></td>
                                                             <td><?php if(isset($row->transaction_code)) { echo $row->transaction_code;  }   ?></td>
                                                            <td><?php if(isset($row->transaction_status)) { echo $row->transaction_status;  }   ?></td>
                                                              <td><a href="<?php echo base_url('admin/get_transaction_details/').$row->transaction_id; ?>"><button class="btn btn-warning btn-sm">Transaction Details</button></a></td>

                                                            <td><?php if(isset($row->transaction_added)) { date_output($row->transaction_added);  }   ?></td>
                                                           
                                                            
                                                          
                                                         
                                                        </tr>
                                                       <?php } ?>
                                                   
                                                </tbody>
                                            </table>
                                        </div>

                                          <div class="table-responsive">
                                             <table class="table table-striped mb-0">
                                                 <tr>
                                                     <th>Total</th>
                                                     <td><?= '$ '.$amount;  ?></td>
                                                 </tr>


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
               
