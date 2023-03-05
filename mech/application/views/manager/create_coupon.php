<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Create Coupon</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Create Coupon</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Create Coupon</h6>
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
                            <form action="<?php echo base_url('admin/create_coupon_process') ?>" method="post" style="padding-bottom: 30px;">
                                 
                                

                                                    
                            <!-- Tab panes -->
                                 
                                  

                             



                                  <div class="form-group">
                                  
                                        
                                        <label for="inputEmail" class="col-xl-8 form-label">Coupon Code</label>
                                        <br>
                                        <div class="col-xl-10">
                                            <input style="text-transform:uppercase" class="form-control" value="" name="coupon_code" id="title" min="6"  type="text" required>
                                        </div>
                                       
                                        
                                  </div>
                                  <br>

                                  <div class="form-group">
                                        
                                        <label for="inputEmail" class="col-xl-8 form-label">Percentage Discount</label>
                                        <br>
                                        <div class="col-xl-10">
                                            <input class="form-control" value="" onkeyup="get_due()" name="coupon_discount" id="perc" min="6"  type="text" max="70" required>
                                        </div> 
                                  </div>
                                  <br>
                                       
                                        
                                  <div class="form-group">
                                        
                                        <label for="inputEmail" class="col-xl-8 form-label">Original (sample)</label> <br>
                                        <div class="col-xl-10">
                                            <input class="form-control" value="100" name="coupon" id="title"   type="text" readonly>
                                        </div>
                                       
                                        
                                  </div>
                                  <br>


                                  <div class="form-group">
                                        
                                        <label for="inputEmail" class="col-xl-8 form-label">After Discount</label>
                                        <br>
                                        <div class="col-xl-10">
                                            <input class="form-control" name="coupon" id="due"  type="text" readonly>
                                        </div>
                                       
                                        
                                  </div>
                                   
                                 <br>
                                 <div class="form-group">
                                   <div class="col-xl-10">
                                <input type="submit" style="color:#fff;" name="submit" class="submit btn btn-primary btn-md" value="Add Coupon" /><ebr>
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
    


    