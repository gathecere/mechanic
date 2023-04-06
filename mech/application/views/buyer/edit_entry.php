<section>
<div class="container">
<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Update Repair Details</div>
          <div class="ps-3">
           
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

                                       <form method="post" action="<?= base_url('mechanic/edit_repair_process'); ?>">

                                         <input type="hidden" name="entry_id" value="<?= $wah->entry_id; ?>">
                                                     <div class="row mb-3">
                                                      <label class="col-sm-3 col-form-label" for="example-email">What is the rider’s bib number?</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" type="text" name="bib_number" value="<?= $wah->bib_number; ?>" required>
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

                                                                    <option  value="<?php echo $stop->stop_id; ?>" <?php if($stop->stop_id==$wah->stop_id){ echo "selected";} ?>><?php echo $stop->stop_name.' '.$stop->wangapi.' available mechs'; ?></option>

                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                     <br>

                                                     <div class="row mb-3">
                                                      <label class="col-sm-3 col-form-label" for="example-email">ho worked on repairing the cycle?</label>
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
                                                <label class="col-sm-3 col-form-label" for="example-password">How long did it take you to make the repairs?</label>
                                               
                                                  <div class="col-sm-9">
                                                  
                                                 <input class="form-control" type="number" name="time" value="<?= $wah->time; ?>" >
                                                    
                                                   </div>
                                               
                                               
                                               
                                            </div>
                                                     <br>

                                                     <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label" for="example-readonly">Was the bicycle repaired enough that the rider could continue?</label>
                                                        <div class="col-sm-9">

                                                          <div class="form-check">

                                                                     
                                                              <input class="form-check-input" type="checkbox" name="status" onclick="onlyOne(this)" id="flexRadioDefault1" <?php if($wah->status==1){ echo "checked";} ?>   value="1">
                                                              <label class="form-check-label" for="flexRadioDefault1">
                                                                Yes
                                                              </label>
                                                            </div>
                                                            <div class="form-check">
                                                              <input class="form-check-input" type="checkbox" name="status" onclick="onlyOne(this)" id="flexRadioDefault2"  <?php if($wah->status==2){ echo "checked";} ?>  value="2">
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

                                                                     
                                                              <input class="form-check-input" type="checkbox"  onclick="onlyTwo(this)"  name="service" id="flexRadioDefault1" <?php if($wah->service==1){ echo "checked";} ?>   value="1">
                                                              <label class="form-check-label" for="flexRadioDefault1">
                                                                Permanent
                                                              </label>
                                                            </div>
                                                            <div class="form-check">
                                                              <input class="form-check-input"  onclick="onlyTwo(this)"  type="checkbox" name="service" id="flexRadioDefault2"  <?php if($wah->service==2){ echo "checked";} ?>  value="2">
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
                        
                   