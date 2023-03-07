<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Mechanics</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Mechanics</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Stops</h6>
            <span style="float: right; position:relative; right:90px; bottom:30px;"><a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#mechanicModal"><i class="fa fa-plus"></i>Add Mechanic</a></span>
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
                                                          
                                                           
                                                            <th>Name </th>
                                                            
                                                            <th>Designation</th>
                                                           
                                                            <th>Delete</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                      <?php
                                                          foreach ($mechanics as $row)
                                                          {   ?>
                                                          <tr>
                                                              <td><?= $row->id; ?></a></td>
                                                             
                                                            
                                                              <td><?php if(isset($row->name)) { echo $row->name;  }   ?></td>

                                                               <td><?php if(isset($row->level)) {  

                                                                    if($row->level==1){  echo "master mechanic";  } else { echo "Junior mechanic"; }  } ?></td>
                                                             

                                                               

                                                                 <td><a onclick="return confirm('confirm delete?');"href="<?php echo base_url('admin/delete_mechanic/').$row->id; ?>"><button class="btn btn-danger btn-sm">Delete Mechanic</button></a></td>

                                                                

                                                              
                                                              
                                                              
                                                           
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

                <div class="modal fade" id="mechanicModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add Mechanic</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?= base_url('admin/add_mechanic') ?>">

                           <div class="row mb-3">
                                <label class="col-form-label" for="example-password">Mechanic Name</label>
                               
                                  <div class="col-sm-12">
                                  
                                      <input class="form-control" type="text" name="mechanic_name" required>
                                    
                                  </div>
                                                       
                                                       
                                                       
                            </div>

                             <div class="row mb-3">
                                <label class="col-form-label" for="example-password">Experience</label>
                               
                                  <div class="col-sm-12">
                                  
                                       <select class="form-control" name="experience">

                                          <option value="1">Master mechanic</option>
                                          <option value="2">Junior mechanic</option>
                                         
                                       </select>
                                    
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
               
     