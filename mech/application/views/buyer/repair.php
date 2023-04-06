<section>
<div class="container">
<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Repair information</div>
          <div class="ps-3">
          
          </div>
         
        </div>
        <!--end breadcrumb-->


         <div class="row">
          <div class="col-xl-9 mx-auto">
            <span style="float: right; position:relative; right:90px; bottom:30px;"><a class="btn btn-success" data-toggle="modal" data-target="#mechanicModal"><i class="fa fa-plus"></i>Tell Us About the Cycle Repairs Made</a></span>
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

                                                            <th>Was the bicycle repaired enough that the rider could continue?</th>

                                                             <th>Were the repairs made temporary or permanent?</th>

                                                           
                                                            <th>Edit</th>
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


                                                              

                                                              
                                                             

                                                               

                                                                 <td><a href="<?php echo base_url('mechanic/edit_entry/').$row->entry_id; ?>"><button class="btn btn-primary btn-sm">Update Entry</button></a></td>

                                                                

                                                              
                                                              
                                                              
                                                           
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
                                                      <label class="col-sm-3 col-form-label" for="example-email">What is the rider’s bib number?</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" type="number" name="bib_number" min="0" max="55555" required>
                                                        </div>
                                                    </div>
                                                    <br>
                                         
                                                    <div class="row mb-3">
                                                      <label class="col-sm-3 col-form-label" for="example-email">Where was the repair made?</label>
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
                                                      <label class="col-sm-3 col-form-label" for="example-email">Who worked on repairing the cycle?</label>
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
                                                        <label class="col-sm-3 col-form-label" for="example-password"> How long did it take you to make the repairs?</label>
                                                       
                                                          <div class="col-sm-9">
                                                          
                                                              <input class="form-control" type="number" name="time"   min="1"  max="100">
                                                            
                                                           </div>
                                                       
                                                       
                                                       
                                                    </div>
                                                     <br>

                                                     <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label" for="example-readonly">Was the bicycle repaired enough that the rider could continue?</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-check">
                                                              <input class="form-check-input" onclick="onlyOne(this)" type="checkbox" name="status" id="flexRadioDefault1" checked value="1">
                                                              <label class="form-check-label" for="flexRadioDefault1">
                                                                Yes
                                                              </label>
                                                            </div>
                                                            <div class="form-check">
                                                              <input class="form-check-input" onclick="onlyOne(this)" type="checkbox" name="status" id="flexRadioDefault2" value="2">
                                                              <label class="form-check-label" for="flexRadioDefault2">
                                                               No
                                                              </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>

                                                     <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label" for="example-readonly">Were the repairs made temporary or permanent?</label>
                                                        <div class="col-sm-9">

                                                               <div class="form-check">
                                                              <input class="form-check-input" onclick="onlyTwo(this)" type="checkbox" name="service" id="flexRadioDefault1" checked value="1">
                                                              <label class="form-check-label" for="flexRadioDefault1">
                                                                Permanent
                                                              </label>
                                                            </div>
                                                            <div class="form-check">
                                                              <input class="form-check-input" onclick="onlyTwo(this)" type="checkbox" name="service" id="flexRadioDefault2" value="2">
                                                              <label class="form-check-label" for="flexRadioDefault2">
                                                               Temporary
                                                              </label>
                                                            </div>
                                                             
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
                        
                   