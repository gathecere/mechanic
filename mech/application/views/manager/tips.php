<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Tips</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Tips</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Tips</h6>
            <hr/>
              <div class="card">
                 <div class="card-body">
                                       
                                       
    
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0" id="example">
                                                <thead>
                                                      <tr>
                                                          <th>#</th>
                                                          <th>Amount ($)</th>
                                                          <th>Client</th>
                                                          <th>For Order</th>
                                                         
                                                         
                                                          <th>Date</th>
                                                         
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                      <?php
                                                        $amount=0;
                                                        foreach ($p->result() as $row)
                                                            
                                                        {   
                                                            $amount+=$row->tip_amount;

                                                          ?>
                                                        <tr>
                                                            <td><?php if(isset($row->tip_id)) { echo $row->tip_id;  }   ?></td>
                                                            <td><?php if(isset($row->tip_amount)) { echo $row->tip_amount;  }   ?></td>
                                                             <td>
                                                              <a href="<?= base_url('admin/client_profile/').$row->user_id ?>">
                                                              <?php 
                                                                     if(isset($row->user_fname)) { echo $row->user_fname;}   
                                                                    
                                                                     ?>
                                                              </a>
                                                                       
                                                              </td>
                                                             <td>
                                                              <a href="<?= base_url('admin/get_paper_details/').$row->order_id ?>">
                                                               <?php if(isset($row->order_id)) { echo $row->order_id;  }   ?>
                                                             </a>
                                                             </td>
                                                           
                                                           
                                                             

                                                            <td><?php if(isset($row->tip_added)) { date_output($row->tip_added);  }   ?></td>
                                                           
                                                            
                                                          
                                                         
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
               
