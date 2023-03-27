<section>
<div class="container">
<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Update Stop</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;">Admin</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Update Stop</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        
        <div class="row" id="orderform">
          <div class="col-xl-9 mx-auto">
            <h4 class="mb-0 text-uppercase">Update Stop</h4>
            <hr/>
              <div class="card">
                 <div class="card-body">
                                  
                                    


                                        
                                       
                                        <div class="row">
                                            <form method="post" action="<?= base_url('admin/edit_stop_process'); ?>">



                                              <?php 

                                                   foreach($h as $row){


                                               ?>

                                                    <input type="hidden" name="stop_id" value="<?php echo $row->stop_id; ?>">
                                         
                                                    <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label" for="example-email">Stop</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="stop_name" value="<?= $row->stop_name; ?>">
                                                        </div>
                                                    </div>
                                                     <br>

                                                      <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label" for="example-readonly">Address</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" name="stop_details" value="<?php if(isset($row->stop_details)){ echo $row->stop_details;  } ?>">
                                                        </div>
                                                    </div>
                                                     <br>

                                                     <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label" for="example-readonly">City</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" name="city" value="<?php if(isset($row->city)){ echo $row->city;  } ?>">
                                                        </div>
                                                    </div>
                                                     <br>

                                                     <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label" for="example-readonly">State</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" name="state" value="<?php if(isset($row->state)){ echo $row->state;  } ?>">
                                                        </div>
                                                    </div>
                                                     <br>

                                                      <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label" for="example-readonly">Zip</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" name="zip" value="<?php if(isset($row->zipcode)){ echo $row->zipcode;  } ?>">
                                                        </div>
                                                    </div>


                                                    
                                                  

                                                  <?php } ?>
                                                   
    
                                                  
                                                    <br>  <br>
                                                  
                                                

                                                     <div class="row mb-3">
                                                      <div class="col-sm-3">
                                                      </div>
                                                      <div class="col-sm-9">

                                                         <button style="width: 100%;" id="submit-all" type="submit" class="btn btn-warning px-5"><i class="bx bx-plus"></i>Update Stop</button>

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

</div>
</section>

    
    


             



                       
                      
                        <!--- end row -->

                       
                        <!-- end row -->

                       
                        <!-- end row -->

                       
                        <!-- end row -->

                      
                        <!-- end row -->


                       
                        <!-- end row -->  
                        
                   