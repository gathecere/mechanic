<section>
<div class="container">
<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Mechanics</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;">Admin</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Mechanics</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <span style="float: right; position:relative; right:90px; bottom:30px;"><a class="btn btn-success" data-toggle="modal" data-target="#mechanicModal"><i class="fa fa-plus"></i>Add Mechanic</a></span>
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

                                                             <th>Phone </th>


                                                            
                                                            <th>Skill Level</th>

                                                            <th>Stops</th>
                                                           
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

                                                              <td><?php if(isset($row->phone)) { echo $row->phone;  }   ?></td>

                                                               <td><?php if(isset($row->level)) {  

                                                                    if($row->level==1){  echo "Master";  } else { echo "Apprentice"; }  } ?></td>

                                                                <td><?php if(isset($row->stops)) { echo $row->stops;  }   ?></td>
                                                             

                                                               

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

              
        </div>
  </div>
</section>

   <div class="modal fade" id="mechanicModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add Mechanic</h5>
                      <button type="button" class="btn-close btn-danger" data-dismiss="modal" aria-label="Close">Exit</button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?= base_url('admin/add_mechanic') ?>">

                           <div class="row mb-3">

                                  <div class="col-sm-12">
                                  
                               
                                  <label class="col-form-label" for="example-password">Mechanic Name</label>

                                   </div>
                               
                                  <div class="col-sm-12">
                                  
                                      <input class="form-control" type="text" name="mechanic_name" required>
                                    
                                  </div>
                                                       
                                                       
                                                       
                            </div>

                              <div class="row mb-3">
                                <div class="col-sm-12">
                                   <label class="col-form-label" for="example-password">Phone</label>
                                 </div>
                               
                                  <div class="col-sm-12">
                                  
                                      <input class="form-control" type="text" name="phone" required>
                                    
                                  </div>
                                                       
                                                       
                                                       
                            </div>

                                 <div class="row mb-3">
                              <div class="col-sm-12 mb-3">
                                <label class="col-form-label" for="example-password">Stop</label>
                               </div>
                               
                                  <div class="col-sm-12">
                                  
                                       <select class="form-control" id="stop_id" name="stop_id[]" multiple required style="width: 100%;">

                                        <?php
                                           foreach($stops as $stop){

                                         ?>

                                          <option value="<?= $stop->stop_id ?>"><?= $stop->stop_name ?></option>

                                        <?php } ?>
                                        
                                         
                                       </select>
                                    
                                  </div>
                                                       
                                                       
                                                       
                            </div>
                            <br>

                             <div class="row mb-3">
                              <div class="col-sm-12 mb-3">
                                <label class="col-form-label" for="example-password">Skill Level</label>
                              </div>
                               
                                  <div class="col-sm-12">
                                  
                                       <select class="form-control" name="experience" required>

                                          <option value="1">Apprentice</option>
                                          <option value="2">Master</option>
                                         
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

     