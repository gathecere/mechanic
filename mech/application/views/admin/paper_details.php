<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Paper Details</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Paper Details</li>
              </ol>
            </nav>
          </div>
         
        </div>
         <?php 


                          foreach ($d->result() as $row) {
                            $order_id=$row->order_id;
                            # code...

                    
                         

                        ?>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <span class="mb-0 text-uppercase">Paper Details Order <?php if(!empty($this->uri->segment(3))){ echo $this->uri->segment(3);  } ?></span>
            <?php
              if($row->order_status==1){

            ?>
           
           <a style="float: right; position: relative;" href="<?php echo base_url('admin/submit_paper/').$row->order_id; ?>"><button class="btn btn-warning btn-sm">Submit Work</button></a>
            
          <?php } ?>
            <hr/>
              <div class="card">
                 <div class="card-body">
                       

                <div class="box box-success">
                     
                      <!-- /.box-header -->
                      <div class="box-body">
                           <div class="row">
                          <div class="col-6">
                      
                        <strong><i class="fa fa-user margin-r-5"></i> Client Name</strong>

                        <p class="text-muted">
                           <input type="text" class="form-control" value="<?php if(isset($row->user_fname)){ echo $row->user_fname;  } else { echo '__'; } ?> <?php if(isset($row->user_lname)){ echo $row->user_lname;  } else { echo '__'; } ?>"  readonly/>
                        </p>

                        
                         </div>

                         <div class="col-6">

                           <strong><i class="fa fa-envelope margin-r-5"></i> Client Email</strong>

                        <p class="text-muted">
                           <input type="text" class="form-control" value="<?php if(isset($row->user_email)){ echo $row->user_email;  } else { echo '__'; } ?>" readonly />
                        </p>

                         

                       
                          </div>
                         </div>
                        <div class="row">
                          <div class="col-6">
                      
                        <strong><i class="fa fa-book margin-r-5"></i> Title</strong>

                        <p class="text-muted">
                           <input type="text" class="form-control" value="<?php if(isset($row->order_title)){ echo $row->order_title;  } else { echo '__'; } ?>"  readonly/>
                        </p>

                        
                         </div>

                         <div class="col-6">

                           <strong><i class="fa fa-th margin-r-5"></i> Order Type</strong>

                        <p class="text-muted">
                           <input type="text" class="form-control" value="<?php if(isset($row->order_type_name)){ echo $row->order_type_name;  } else { echo '__'; } ?>" readonly />
                        </p>

                         

                       
                          </div>
                         </div>

                          <strong><i class="fa fa-edit margin-r-5"></i> Description</strong>

                        <p class="text-muted">
                          <textarea class="form-control" readonly><?php if(isset($row->order_description)){ echo $row->order_description;  } else { echo '__'; } ?></textarea>
                        </p>

                         
                          

                         
                         <div class="row">
                          <div class="col-6">
                        <strong><i class="fa fa-search margin-r-5"></i> Discipline</strong>

                        <p class="text-muted">

                              <input type="text" class="form-control" value="<?php 

                                   if($row->discipline_id!=69){

                                    if(isset($row->discipline_name)){ echo $row->discipline_name;  } else { echo '__'; } 

                                  }
                                  else
                                  {

                                    echo $row->other;
                                  }




                                    ?>" readonly />
                          
                        </p>

                         
                       </div>
                        <div class="col-6">

                        <strong><i class="fa fa-bars margin-r-5"></i> Academic Level</strong>

                        <p class="text-muted">

                           <input type="text" class="form-control" value="<?php if(isset($row->level_name)){ echo $row->level_name;  } else { echo '__'; } ?>" readonly />
                          
                        </p>

                       
                       </div>
                     </div>

                     <div class="row">
                          <div class="col-6">


                        <strong><i class="fa fa-ellipsis-h margin-r-5"></i> Paper Format</strong>

                        <p class="text-muted">
                            <input type="text" class="form-control" value="<?php if(isset($row->format_name)){ echo $row->format_name;  } else { echo '__'; } ?>" readonly />
                        </p>
                         
                       </div>
                       <div class="col-6">

                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Pages</strong>

                        <p class="text-muted">
                           <input type="text" class="form-control" value="<?php if(isset($row->order_pages)){ echo $row->order_pages;  } else { echo '__'; } ?>" readonly  />
                        </p>


                       
                       </div>
                      </div>


                        <strong><i class="fa fa-plus margin-r-5"></i> Sources</strong>

                        <p class="text-muted">
                           <input type="text" class="form-control" value="<?php if(isset($row->order_sources)){ echo $row->order_sources;  } else { echo '__'; } ?>" readonly />
                        </p>

                        

                          
                        <div class="row">
                          <div class="col-6">

                        <strong><i class="fa fa-upload margin-r-5"></i> Upload(s)</strong>

                        <p class="text-muted">

                          <?php  
                                 foreach ($uploads as $up) 
                                    { 
                                       if(isset($up->file_name)){  ?>

                                            <?php
                                                    

                                                    if($_SERVER['HTTP_HOST'] == 'localhost')
                                                    {
                                                       $pa="/opt/lampp/htdocs/loop/userfile/".$up->file_name;
                                                       $path=base64_encode($pa);
                                                    }
                                                    else
                                                    {
                                                       
                                                       $pa='/var/www/'.$row->website.'/public_html/userfile/'.$up->file_name;
                                                        $path=base64_encode($pa);

                                                    }



                                                ?>

                                           <a href="<?php echo base_url('admin/download/').$path; ?>"><?= $up->file_name; ?> </a> <br>

                           <?php  } else { echo '__'; } }  ?>
                        </p>
                           </div>

                           <div class="col-6">
                          <strong><i class="fa fa-upload margin-r-5"></i> Revision Files</strong>

                        <p class="text-muted">

                          <?php  
                                 foreach ($rev as $re) 
                                    { 
                                       if(isset($re->file_name)){  ?>

                                             <?php
                                                    

                                                    if($_SERVER['HTTP_HOST'] == 'localhost')
                                                    {
                                                       $pa="/opt/lampp/htdocs/loop/userfile/".$re->file_name;
                                                       $path=base64_encode($pa);
                                                    }
                                                    else
                                                    {
                                                       
                                                       $pa='/var/www/'.$row->website.'/public_html/userfile/'.$re->file_name;
                                                       $path=base64_encode($pa);

                                                    }



                                                ?>

                                           <a href="<?php echo base_url('admin/download/').$path; ?>"><?= $re->file_name; ?> </a> <br>

                           <?php  } else { echo '__'; } }  ?>
                        </p>
                          </div>
                        </div>

                        

                         <strong><i class="fa fa-upload margin-r-5"></i> Revision Notes</strong>

                        <p class="text-muted">

                         <textarea class="form-control" readonly><?php if(isset($row->order_revision_details)){ echo $row->order_revision_details;  } else { echo '__'; } ?></textarea>
                        </p>

                        



                       

                        

                         <div class="row">
                          <div class="col-6">
                        <strong><i class="fa fa-check margin-r-5"></i> Amount</strong>

                        <p class="text-muted">
                          
                            <input type="text" class="form-control" value="<?php if(isset($row->order_amount)){ echo $row->order_amount;  } else { echo '__'; } ?>" readonly />
                        </p>

                       

                         
                       </div>

                        <div class="col-6">
                        <strong><i class="fa fa-upload margin-r-5"></i> Payment Status</strong>

                        <p class="text-muted">
                              <input type="text" class="form-control" value="<?php if(isset($row->transaction_status)){ echo $row->transaction_status;  } else { echo '__'; } ?>" readonly />
                        </p>


                        
                         </div>
                        </div>

                          <div class="row">
                          <div class="col-6">
                        <strong><i class="fa fa-check margin-r-5"></i> Coupon</strong>

                        <p class="text-muted">
                          
                            <input type="text" class="form-control" value="<?php if(isset($row->order_coupon)){ echo $row->order_coupon;  } else { echo '__'; } ?>" readonly />
                        </p>

                       

                         
                       </div>

                        <div class="col-6">
                        <strong><i class="fa fa-upload margin-r-5"></i> Coupon Discount%</strong>

                        <p class="text-muted">
                              <input type="text" class="form-control" value="<?php if(isset($row->coupon_discount)){ echo $row->coupon_discount.' %';  } else { echo '__'; } ?>" readonly />
                        </p>


                        
                         </div>
                        </div>


                        <strong><i class="fa fa-credit-card margin-r-5"></i> Transaction Code</strong>

                        <p class="text-muted">
                              <input type="text" class="form-control" value="<?php if(isset($row->transaction_code)){ echo $row->transaction_code;  } else { echo '__'; } ?>"  readonly />
                        </p>

                        

                         <strong><i class="fa fa-upload margin-r-5"></i> Delivery Notes</strong>

                        <p class="text-muted">

                         <textarea class="form-control" readonly><?php if(isset($row->order_delivery_note)){ echo $row->order_delivery_note;  } else { echo '__'; } ?></textarea>
                        </p>

                      <div class="row">
                          <div class="col-6">

                          <strong><i class="fa fa-download margin-r-5"></i> Completed</strong>

                        <p class="text-muted">
                               <?php  
                                 foreach ($submission as $sub) 
                                    { 
                                       if(isset($sub->file_name)){  ?>

                                           <?php
                                                    

                                                    if($_SERVER['HTTP_HOST'] == 'localhost')
                                                    {
                                                       $pa="/opt/lampp/htdocs/loop/userfile/".$sub->file_name;
                                                       $path=base64_encode($pa);
                                                    }
                                                    else
                                                    {
                                                       
                                                       $pa='/var/www/'.$row->website.'/public_html/submission/'.$sub->file_name;
                                                       $path=base64_encode($pa);

                                                    }



                                                ?>



                                           <a href="<?php echo base_url('admin/download/').$path; ?>"><?= $sub->file_name; ?> </a> <br>

                           <?php  } else { echo '__'; } }  ?> 
                        </p>
                        </div>
                         <div class="col-6">

                        

                       
                       

                        <strong><i class="fa fa-upload margin-r-5"></i> Due in</strong>

                        <p class="text-muted"><?php include_once 'time.php';   ?></p>
                      </div>
                    </div>

                     <div class="row">
                          <div class="col-6">
                        <strong><i class="fa fa-plus margin-r-5"></i> Order Placed</strong>

                        <p class="text-muted">
                          
                            <input type="text" class="form-control" value="<?php if(isset($row->order_start)){ date_output($row->order_start);  } else { echo '__'; } ?>" readonly />
                        </p>

                       

                         
                       </div>

                        <div class="col-6">
                        <strong><i class="fa fa-clock margin-r-5"></i>Order Due</strong>

                        <p class="text-muted">
                              <input type="text" class="form-control" value="<?php if(isset($row->order_due)){ date_output($row->order_due);  } else { echo '__'; } ?>" readonly />
                        </p>


                        
                         </div>
                        </div>

                      <div class="row">
                          <div class="col-12">
                        <strong><i class="fa fa-globe margin-r-5"></i> Time Zone</strong>

                        <p class="text-muted">
                          
                            <input type="text" class="form-control" value="<?php if(isset($row->order_tz)){ echo $row->order_tz;  } else { echo '__'; } ?>" readonly />
                        </p>

                       

                         
                       </div>
                     </div>

                       <div class="row">
                          <div class="col-12">
                        <strong><i class="fa fa-globe margin-r-5"></i> Website</strong>

                        <p class="text-muted">
                          
                            <input type="text" class="form-control" value="<?php if(isset($row->website)){ echo $row->website;  } else { echo '__'; } ?>" readonly />
                        </p>

                       

                         
                       </div>
                     </div>





                        
                       <?php
                         

                         } ?>






                        


                        


                       

                      
                      </div>
                      <!-- /.box-body -->
                    </div>

                  </div>

                </div>

                



              </div>

        




    


             

    </div>
</div>
</div>





       


        




      
     