<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Technical Performance</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Technical Performance</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Technical Performance based on the success of repair</h6>
           
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
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                      <tr>
                                                            
                                                            
                                                            <th>completed</th>

                                                            <th>failed</th>

                                                             <th>Completion rate</th>

                                                             <th>Remarks</th>
                                                           
                                                            
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                     
                                                          <tr>
                                                            <?php $total=$completed+$failed; 

                                                                  $div=($completed/$total)*100;


                                                            ?>
                                                              

                                                               <td><?php if(isset($completed)) { echo $completed;  }   ?></td>
                                                                <td><?php if(isset($failed)) { echo $failed;  }   ?></td>

                                                               <td><?= $div. "%"; ?></td>
                                                               <td><?php
                                                                       if($div>=90){
                                                                          echo "okay";
                                                                       }
                                                                       elseif($div>=70){
                                                                          echo "Hire junior technicians";
                                                                       }
                                                                       else
                                                                       {
                                                                           echo "Hire senior technicians";
                                                                       }
                                                                     ?></td>
                                                             

                                                             

                                                                

                                                              
                                                              
                                                              
                                                           
                                                          </tr>
                                                        
                                                   
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

                <div class="modal fade" id="stopModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add Stop</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?= base_url('admin/add_stop') ?>">

                           <div class="row mb-3">
                                <label class="col-form-label" for="example-password">Stop Name</label>
                               
                                  <div class="col-sm-12">
                                  
                                      <input class="form-control" type="text" name="stop_name" required>
                                    
                                  </div>
                                                       
                                                       
                                                       
                            </div>

                             <div class="row mb-3">
                                <label class="col-form-label" for="example-password">Stop Details</label>
                               
                                  <div class="col-sm-12">
                                  
                                      <textarea class="form-control" name="stop_details"></textarea>
                                    
                                  </div>
                                                       
                                                       
                                                       
                            </div>


                          
                       
                      
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                     </form>
                  </div>
                </div>
              </div>
               
     