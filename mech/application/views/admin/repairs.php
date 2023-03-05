<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Repairs</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Repairs</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Repairs</h6>
           
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
                                                          
                                                           
                                                          
                                                            
                                                            <th>Repair Details</th>

                                                            <th>Date</th>

                                                          
                                                           
                                                            <th>Delete</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                      <?php
                                                          foreach ($repairs as $row)
                                                          {   ?>
                                                          <tr>
                                                              <td><?= $row->entry_id; ?></a></td>

                                                              <td><a href="<?php echo base_url('admin/repair_details/').$row->entry_id; ?>"><button class="btn btn-primary btn-sm">Repair Details</button></a></td>
                                                             
                                                            
                                                             
                                                               <td><?php if(isset($row->entry_date)) { echo $row->entry_date;  }   ?></td>
                                                             

                                                            

                                                                 <td><a onclick="return confirm('confirm delete?');"href="<?php echo base_url('admin/delete_entry/').$row->entry_id; ?>"><button class="btn btn-danger btn-sm">Delete Entry</button></a></td>

                                                                

                                                              
                                                              
                                                              
                                                           
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

               