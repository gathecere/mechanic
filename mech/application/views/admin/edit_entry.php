<section>
<div class="container">
<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Update Repair Details</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;">Admin</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Update Repair Details</li>
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

                                     <?php

                                          foreach($h as $wah){

                                        ?>

                                       <form method="post" action="<?= base_url('admin/edit_repair_process'); ?>">

                                         <input type="hidden" name="entry_id" value="<?= $wah->entry_id; ?>">
                                                     <div class="row mb-3">
                                                      <label class="col-sm-3 col-form-label" for="example-email">Bib Number</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" type="text" name="bib_number" value="<?= $wah->bib_number; ?>" required>
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

                                                                    <option  value="<?php echo $stop->stop_id; ?>" <?php if($stop->stop_id==$wah->stop_id){ echo "selected";} ?>><?php echo $stop->stop_name.' '.$stop->wangapi.' available mechs'; ?></option>

                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                     <br>

                                                     <div class="row mb-3">
                                                      <label class="col-sm-3 col-form-label" for="example-email">Select Mechanic</label>
                                                        <div class="col-sm-9">
                                                            <select  class="form-select selector mb-3 form-control" multiple id="mechanic" name="mechanic[]" required>
                                                                <option>--</option>
                                                               
                                                                 <?php

                                                                  foreach ($mechanics as $mechanic)         

                                                                    { ?>

                                                                    <option  value="<?php echo $mechanic->id; ?>" <?php


                                                                    foreach($mechs as $mech){


                                                                     if($mechanic->id==$mech->mechanic_id){ 

                                                                           echo "selected";


                                                                       } 

                                                                    }



                                                                   ?>><?php echo $mechanic->name; ?></option>

                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <br>
                                                       <div class="row mb-3">
                                                      <label class="col-sm-3 col-form-label" for="example-email">Type of repair</label>
                                                        <div class="col-sm-9">
                                                            <select  class="form-select selector mb-3 form-control" id="repair" multiple name="type_of_repair[]" required>
                                                                <option>--</option>
                                                               
                                                                 <?php

                                                                  foreach ($types as $type)         

                                                                    { ?>

                                                                    <option  value="<?php echo $type->type_id; ?>"

                                                                    <?php


                                                                    foreach($tys as $ty){


                                                                     if($type->type_id==$ty->type_of_work_id){ 

                                                                           echo "selected";


                                                                       } 

                                                                    }



                                                                   ?>




                                                                     ><?php echo $type->repair_type; ?></option>

                                                               <?php } 

                                                               ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                     <br>


                                                   
    
                                                  
                                            <div class="row mb-3">
                                                <label class="col-sm-3 col-form-label" for="example-password">Duration(mins)</label>
                                               
                                                  <div class="col-sm-9">
                                                  
                                                 <input class="form-control" type="number" name="time" value="<?= $wah->time; ?>" >
                                                    
                                                   </div>
                                               
                                               
                                               
                                            </div>
                                                     <br>

                                                     <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label" for="example-readonly">Was it fully repaired?</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-select selector mb-3 form-control"  name="status" required>
                                                                   
                                                                   
                                                                    <?php

                                                                                      foreach ($status as $st)

                                                     

                                                                                        { ?>

                                                                                        <option  value="<?php echo $st->status_id; ?>" <?php if($st->status_id==$wah->status){ echo "selected";} ?>><?php echo $st->status_name;  ?></option>

                                                                                   <?php } ?>
                                                                </select>
                                                        </div>
                                                    </div>

                                                    <br>

                                                     <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label" for="example-readonly">Temporary service?</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-select selector mb-3 form-control"  name="service" required>
                                                                   
                                                                   
                                                                    <?php

                                                                                      foreach ($service as $ser)

                                                     

                                                                                        { ?>

                                                                                        <option  value="<?php echo $ser->service_id; ?>" <?php if($ser->service_id==$wah->service){ echo "selected";} ?>><?php echo $ser->service_name;  ?></option>

                                                                                   <?php } ?>
                                                                </select>
                                                        </div>
                                                    </div>


                                                    <br>
                                                   
                                                  
                                                

                                                     <div class="row mb-3">
                                                      <div class="col-sm-3">
                                                      </div>
                                                      <div class="col-sm-9">

                                                         <button style="width: 100%;" id="submit-all" type="submit" class="btn btn-warning px-5"><i class="bx bx-plus"></i>Update Repair Details</button>

                                                        </div>


                                                     </div>



                                                </form>

                                            <?php } ?>
    
                                       
                                       
    
                                      
                                    </div>
                                </div>
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
                        
                   