<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Stock Report</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Stock Report</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Stock Report</h6>
            
            <hr/>
              <div class="card">
                 <div class="card-body">

                                      <?php
                                        if(isset($message)){ ?>

                                          <div class="alert alert-info">

                                             <?= $message; ?>


                                          </div>




                                      <?php  }


                                      ?>
                                       
                                       
    
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0" id="example">
                                                <thead>
                                                      <tr>
                                                            <th>#</th>
                                                          
                                                           
                                                            <th>Spare </th>

                                                            <th>Usage </th>
                                                            
                                                            <th>Balance</th>

                                                              <th>Availability(%)</th>


                                                            <th>Report</th>

                                                            
                                                           
                                                            
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                      <?php
                                                          foreach ($inventory as $row)
                                                          {   ?>
                                                          <tr>
                                                              <td><?= $row->inventory_id; ?></a></td>
                                                             
                                                            
                                                              <td><?php if(isset($row->spare_name)) { echo $row->spare_name;  }   ?></td>

                                                              <td><?php if(isset($row->usagee)) { echo $row->usagee;  }   ?></td>

                                                              <td><?php if(isset($row->inventory_balance)) { echo $row->inventory_balance;  }   ?></td>

                                                              <?php $per=$row->usagee/$row->inventory_balance*100; ?>

                                                               <td><?php echo number_format($per,2). " %";  ?></td>

                                                                <td><?php if($row->inventory_balance<=10){
                                                                      echo "stock running low";
                                                                }else{
                                                                   echo "satisfactory";
                                                                } ?></td>



                                                              
                                                             

                                                              
                                                               

                                                                

                                                              
                                                              
                                                              
                                                           
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

             
               
     