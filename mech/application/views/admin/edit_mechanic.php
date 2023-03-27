<section>
<div class="container">
<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Update Mechanic Details</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;">Admin</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Update Mechanic Details</li>
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

                   <form method="post" action="<?= base_url('admin/edit_mechanic_process') ?>">

                       <?php 

                         foreach($mechs as $mech){

                         ?>

                          <input type="hidden" name="mech_id" value="<?= $mech->id; ?>">

                           <div class="row mb-3">

                                  <div class="col-sm-12">
                                  
                               
                                  <label class="col-form-label" for="example-password">Mechanic Name</label>

                                   </div>
                               
                                  <div class="col-sm-12">
                                  
                                      <input class="form-control" type="text" value="<?= $mech->name; ?>" name="mechanic_name" required>
                                    
                                  </div>
                                                       
                                                       
                                                       
                            </div>

                              <div class="row mb-3">
                                <div class="col-sm-12">
                                   <label class="col-form-label" for="example-password">Phone</label>
                                 </div>
                               
                                  <div class="col-sm-12">
                                  
                                      <input class="form-control" type="tel" value="<?= $mech->phone; ?>" name="phone" required>
                                    
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

                                          <option value="<?= $stop->stop_id ?>"

                                            <?php 

                                               foreach($stps as $stp){

                                                  if($stop->stop_id==$stp->stop_id){


                                                    echo "selected";


                                                 }
                                                }

                                             ?>


                                            ><?= $stop->stop_name ?></option>

                                        <?php } ?>
                                        
                                         
                                       </select>
                                    
                                  </div>
                                                       
                                                       
                                                       
                            </div>

                               <div class="row mb-3">
                              <div class="col-sm-12 mb-3">
                                <label class="col-form-label" for="example-password">Available On</label>
                               </div>
                               
                                  <div class="col-sm-12">
                                  
                                       <select class="form-control" id="day_id" name="days[]" multiple required style="width: 100%;">

                                        <?php
                                           foreach($days as $day){

                                         ?>

                                          <option value="<?= $day->day_id ?>"
                                           

                                            <?php 

                                               foreach($dys as $dy){

                                                  if($day->day_id==$dy->day_id){


                                                    echo "selected";


                                                 }
                                                }

                                             ?>




                                            ><?= $day->day_name ?></option>

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

                                          <option value="1" <?php if($mech->level==1){ echo "selected"; } ?>>Master</option>
                                          <option value="2"  <?php if($mech->level==2){ echo "selected"; } ?>>Apprentice</option>
                                         
                                       </select>
                                    
                                  </div>
                                                       
                                                       
                                                       
                            </div>


                          
                       
                      
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Update changes</button>
                    </div>
                     <?php }  ?>
                     </form>
                       





    


                        
         </div>
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
                        
                   