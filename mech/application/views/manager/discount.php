<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">1st Order Discount</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">1st Order Discount</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">1st Order Discount</h6>
            <hr/>
              <div class="card">
                 <div class="card-body">
                       
                           <?php

                              if(!empty($message)) { ?>

                             <div class="alert alert-success">
                                <?php echo $message;  ?>
                                 
                             </div>

                            <?php
                             }

                           ?>
                            <form action="<?php echo base_url('admin/create_discount_process') ?>" method="post" style="padding-bottom: 30px;">
                                 
                                

                                                    
                            <!-- Tab panes -->
                                 
                                  

                             



                              
                                  <div class="form-group">
                                        
                                        <label for="inputEmail" class="form-label">Percentage Discount</label>
                                        <br>
                                        <div class="col-xl-10">
                                            <input class="form-control" value="<?php if(isset($discount)){ echo $discount; } ?>" onkeyup="get_due()" name="first_discount" id="perc" min="1"   type="text" max="70" required>
                                        </div> 
                                  </div>
                                  <br>
                                       
                                        
                                  <div class="form-group">
                                        
                                        <label for="inputEmail" class="form-label">Original (sample)</label>
                                         <br>
                                        <div class="col-xl-10">
                                            <input class="form-control" value="100" name="coupon" id="title"   type="text" readonly>
                                        </div>
                                       
                                        
                                  </div>
                                  <br>

                                  <div class="form-group">
                                        
                                        <label for="inputEmail" class="form-label">After Discount</label>
                                         <br>
                                        <div class="col-xl-10">
                                            <input class="form-control" name="coupon" id="due"  type="text" readonly>
                                        </div>
                                       
                                        
                                  </div>
                                  <br>
                                   

                                 <div class="form-group">
                                   <div class="col-xl-10">
                                <input type="submit" style="color:#fff;" name="submit" class="submit btn btn-primary btn-md" value="Update Discount" /><ebr>
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
                        
                
       
     
      <script type="text/javascript">
            function get_due() {
            $(document).ready(function() {        
              
                   var days = 0;
                 
                   var perce=$("#perc").val();
                   var balpercent=100-perce;
                   var amount = (balpercent/100)*100;

                   console.log(perce);

                    
                   //round up

                  
                   
                  
                    if (amount == 0) {
                        $('#due').val('');
                    } else {                
                        $('#due').val(amount);
                    }
               
            }); 
         
        }

       
     </script>
    


    