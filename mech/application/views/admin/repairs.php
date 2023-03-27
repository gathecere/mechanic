<section>
<div class="container">
<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Repair information</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;">Admin</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Repair information</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->


         <div class="row">
          <div class="col-xl-9 mx-auto">
           
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
                                                            <th>Name</th>

                                                            <th>Order</th>
                                                          
                                                           
                                                            <th>Bib Number </th>

                                                            <th>Stop Name</th>


                                                            
                                                            <th>Mechanic(s)</th>

                                                           

                                                            <th>Repair Time</th>

                                                            <th>Was it fully repaired?</th>

                                                             <th>Temporary service?</th>

                                                           
                                                            <th>Edit</th>
                                                             <th>Delete</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                      <?php
                                                          foreach ($repair_details as $row)
                                                          {   ?>
                                                          <tr>
                                                              <td><?php if(isset($row->repair_type)) { echo $row->repair_type;  }   ?></td>


                                                              <td><?= $row->entry_id; ?></a></td>
                                                             
                                                            
                                                              <td><?php if(isset($row->bib_number)) { echo $row->bib_number;  }   ?></td>

                                                              <td><?php if(isset($row->stop_name)) { echo $row->stop_name;  }   ?></td>

                                                              <td><?php if(isset($row->mechs)) { echo $row->mechs;  }   ?></td>

                                                               

                                                              <td><?php if(isset($row->time)) { echo $row->time;  }   ?></td>

                                                                <td><?php if(isset($row->status_name)) { echo $row->status_name;  }   ?></td>

                                                                <td><?php if(isset($row->service_name)) { echo $row->service_name;  }   ?></td>


                                                              

                                                              
                                                             

                                                               

                                                                 <td><a href="<?php echo base_url('admin/edit_entry/').$row->entry_id; ?>"><button class="btn btn-primary btn-sm">Update Entry</button></a></td>

                                                                  <td><a href="<?php echo base_url('admin/delete_entry/').$row->entry_id; ?>"><button class="btn btn-danger btn-sm">Delete Entry</button></a></td>

                                                                

                                                              
                                                              
                                                              
                                                           
                                                          </tr>
                                                         <?php } ?>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                              </div>
                           
                          
                        </div>
                       





       <div class="modal fade" id="mechanicModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content"> 
                       <div class="modal-header">  
                      
                          <h4 class="mb-0 text-uppercase">Add Repair Details</h4>
                          <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">exit</button>
                         </div>

                         <div class="modal-body" style="padding: 20px 40px;">  
                                  
                                    


                                        
                                       
                                        <div class="row">
                                            <form method="post" action="<?= base_url('mechanic/update_repair_process'); ?>">

                                                  <div class="row mb-3">
                                                      <label class="col-sm-3 col-form-label" for="example-email">Bib Number(Up to 5)</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" type="number" name="bib_number" min="0" max="55555" required>
                                                        </div>
                                                    </div>
                                                    <br>
                                         
                                                    <div class="row mb-3">
                                                      <label class="col-sm-3 col-form-label" for="example-email">Select Rest Stop</label>
                                                        <div class="col-sm-9">
                                                            <select  class="form-select selector mb-3 form-control" name="stop" required>
                                                                <option>--</option>
                                                               
                                                                 <?php

                                                                  foreach ($stops as $stop)         

                                                                    { ?>

                                                                    <option  value="<?php echo $stop->stop_id; ?>"><?php echo $stop->stop_name.' '.$stop->wangapi.' available mechs'; ?></option>

                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                     <br>

                                                     <div class="row mb-3">
                                                      <label class="col-sm-3 col-form-label" for="example-email">Select Mechanic</label>
                                                        <div class="col-sm-9">
                                                            <select style="width: 100%;"  class="form-select selector mb-3 form-control" id="mechanic" name="mechanics[]" multiple required>
                                                                <option>--</option>
                                                               
                                                                 <?php

                                                                  foreach ($mechanics as $mechanic)         

                                                                    { ?>

                                                                    <option  value="<?php echo $mechanic->id; ?>"><?php echo $mechanic->name; ?></option>

                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <br>
                                                       <div class="row mb-3">
                                                      <label class="col-sm-3 col-form-label" for="example-email">Type of repair</label>
                                                        <div class="col-sm-9">
                                                            <select id="repair" style="width: 100%;"  class="form-select selector mb-3 form-control" name="type_of_repair[]" multiple required>
                                                                <option>--</option>
                                                               
                                                                 <?php

                                                                  foreach ($types as $type)         

                                                                    { ?>

                                                                    <option  value="<?php echo $type->type_id; ?>"><?php echo $type->repair_type; ?></option>

                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                     <br>


                                                   
    
                                                  
                                                    <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label" for="example-password">Duration(mins)</label>
                                                       
                                                          <div class="col-sm-9">
                                                          
                                                              <input class="form-control" type="number" name="time"   min="1"  max="100">
                                                            
                                                           </div>
                                                       
                                                       
                                                       
                                                    </div>
                                                     <br>

                                                     <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label" for="example-readonly">was it fully repaired?</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-select selector mb-3 form-control"  name="status" required>
                                                                   
                                                                   
                                                                    <?php

                                                                                      foreach ($status as $st)

                                                     

                                                                                        { ?>

                                                                                        <option  value="<?php echo $st->status_id; ?>"><?php echo $st->status_name;  ?></option>

                                                                                   <?php } ?>
                                                                </select>
                                                        </div>
                                                    </div>

                                                     <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label" for="example-readonly">is it a temporary service</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-select selector mb-3 form-control"  name="service" required>
                                                                   
                                                                   
                                                                    <?php

                                                                                      foreach ($service as $serv)

                                                     

                                                                                        { ?>

                                                                                        <option  value="<?php echo $serv->service_id; ?>"><?php echo $serv->service_name;  ?></option>

                                                                                   <?php } ?>
                                                                </select>
                                                        </div>
                                                    </div>


                                                    <br>
                                                   
                                                  
                                                

                                                     <div class="row mb-3">
                                                      <div class="col-sm-3">
                                                      </div>
                                                      <div class="col-sm-9">

                                                         <button style="width: 100%;" id="submit-all" type="submit" class="btn btn-warning px-5"><i class="bx bx-plus"></i>Add Repair Details</button>

                                                        </div>


                                                     </div>



                                                </form>
                                            </div>
                                       </div>
    
                                           
                                        </div>
                                        <!-- end row -->
    
                                    </div>

                                </div>


                        
         </div>
</div>
</section>

    
    


             



                       
                      
                        <!--- end row -->

                       
                        <!-- end row -->

                       
                        <!-- end row -->

                       
                        <!-- end row -->

                      
                        <!-- end row -->


                       
                        <!-- end row -->  
                        
                   