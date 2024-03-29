<section>
<div class="container">
<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Rest Stops</div>
          <div class="ps-3">
           
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <span style="float: right; position:relative; right:90px; bottom:30px;"><a class="btn btn-success" data-toggle="modal" data-target="#stopModal"><i class="fa fa-plus"></i>Add Stop</a></span>
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
                                                              
                                                          
                                                            <th>Date</th>

                                                            <th>Sequence </th>
                                                            
                                                            <th>Name</th>

                                                            <th>Address</th>

                                                           

                                                            <th>Update</th>

                                                         
                                                           
                                                            <th>Delete</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                      <?php
                                                          foreach ($stops as $row)
                                                          {   ?>
                                                          <tr>

                                                              <td><?php if(isset($row->days)) { echo $row->days;  }   ?></td>


                                                              <td><?= $row->sequence; ?></a></td>
                                                             
                                                            
                                                              <td><?php if(isset($row->stop_name)) { echo $row->stop_name;  }   ?></td>

                                                               <td><?php if(isset($row->stop_details)) { echo $row->stop_details.' '. $row->city.' '. $row->state.' '. $row->zipcode;  }   ?></td>

                                                               
                                                                 <td><a href="<?php echo base_url('admin/edit_stop/').$row->stop_id; ?>"><button class="btn btn-primary btn-sm">Update Stop</button></a></td>

                                                             

                                                                 <td><a onclick="return confirm('confirm delete?');"href="<?php echo base_url('admin/delete_stop/').$row->stop_id; ?>"><button class="btn btn-danger btn-sm">Delete Stop</button></a></td>

                                                                

                                                              
                                                              
                                                              
                                                           
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
              </div>
            </section>

                

                <!-- Footer Start -->

                <div class="modal fade" id="stopModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add Rest Stop</h5>
                      <button type="button" class="btn-close btn-danger" data-dismiss="modal" aria-label="Close">Exit</button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?= base_url('admin/add_stop') ?>">

                           <div class="row mb-3">
                                 <div class="col-sm-12">
                                   <label class="col-form-label" for="example-password">Stop Name</label>
                                  </div>
                               
                                  <div class="col-sm-12">
                                  
                                      <input class="form-control" type="text" name="stop_name" required>
                                    
                                  </div>
                                                       
                                                       
                                                       
                            </div>

                            <div class="row mb-3">
                              <div class="col-sm-6">
                                <label class="col-form-label" for="example-password">Street address</label>
                               
                               
                                  <div class="col-sm-12">
                                  
                                    
                                       <input class="form-control" name="stop_details" type="text" required>
                                    
                                  </div>
                               </div>

                                <div class="col-sm-6">
                                <label class="col-form-label" for="example-password">City</label>
                               
                               
                                  <div class="col-sm-12">
                                  
                                      <input class="form-control" name="city" type="text" required>
                                    
                                  </div>
                               </div>
                                                       
                                                       
                                                       
                            </div>

                             <div class="row mb-3">
                              <div class="col-sm-6">
                                <label class="col-form-label" for="example-password">State</label>
                               
                               
                                  <div class="col-sm-12">
                                  
                                      <input class="form-control" name="state" type="text" required>
                                    
                                  </div>
                               </div>

                                <div class="col-sm-6">
                                <label class="col-form-label" for="example-password">Zip Code</label>
                               
                               
                                  <div class="col-sm-12">
                                  
                                      <input class="form-control" name="zip" type="text" required>
                                    
                                  </div>
                               </div>
                                                       
                                                       
                                                       
                            </div>

                         

                             <div class="row mb-3">
                              <div class="col-sm-12">
                                <label class="col-form-label" for="example-password">Sequence</label>
                               </div>
                               
                                  <div class="col-sm-12">
                                  
                                    <input class="form-control" type="number" name="sequence" required>
                                    
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
               
     