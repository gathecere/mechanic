<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Update Repair Details</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Update Repair Details</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        
        <div class="row" id="orderform">
          <div class="col-xl-9 mx-auto">
            <h4 class="mb-0 text-uppercase">Update Repair Details</h4>
            <hr/>
              <div class="card">
                 <div class="card-body">
                                  
                                    


                                        
                                       
                                        <div class="row">
                                            <form method="post" action="<?= base_url('mechanic/update_repair_process'); ?>">
                                         
                                                    <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label" for="example-email">Stop</label>
                                                        <div class="col-sm-9">
                                                            <select  class="form-select selector mb-3" name="stop" required>
                                                                <option>--</option>
                                                               
                                                                 <?php

                                                                  foreach ($stops as $stop)         

                                                                    { ?>

                                                                    <option  value="<?php echo $stop->stop_id; ?>"><?php echo $stop->stop_name; ?></option>

                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                      <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label" for="example-readonly">Spares</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-select selector mb-3" id="spare" name="spare[]" required multiple="multiple">
                                                              <option>--</option>
                                                                    
                                                                   
                                                                    <?php

                                                                                      foreach ($spares as $spare)

                                                     

                                                                                        { ?>

                                                                                        <option  value="<?php echo $spare->inventory_id; ?>"><?php echo $spare->spare_name;  ?></option>

                                                                                   <?php } ?>
                                                                </select>
                                                        </div>
                                                    </div>
                                                   
    
                                                  
                                                      <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label" for="example-password">Time</label>
                                                       
                                                          <div class="col-sm-9">
                                                          
                                                              <input class="form-control" type="number" name="time"   min="1"  max="100">
                                                            
                                                           </div>
                                                       
                                                       
                                                       
                                                    </div>

                                                     <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label" for="example-readonly">Status</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-select selector mb-3"  name="status" required>
                                                                    <option>--</option>
                                                                   
                                                                    <?php

                                                                                      foreach ($status as $st)

                                                     

                                                                                        { ?>

                                                                                        <option  value="<?php echo $st->status_id; ?>"><?php echo $st->status_name;  ?></option>

                                                                                   <?php } ?>
                                                                </select>
                                                        </div>
                                                    </div>
                                                   
                                                  
                                                

                                                     <div class="row mb-3">
                                                      <div class="col-sm-3">
                                                      </div>
                                                      <div class="col-sm-9">

                                                         <button style="width: 100%;" id="submit-all" type="submit" class="btn btn-warning px-5"><i class="bx bx-plus"></i>Update Repair Details</button>

                                                        </div>


                                                     </div>



                                                </form>
                                            </div>
    
                                           
                                        </div>
                                        <!-- end row -->
    
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
                        
                   