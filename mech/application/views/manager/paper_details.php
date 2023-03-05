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
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Paper Details Order <?php if(!empty($this->uri->segment(3))){ echo $this->uri->segment(3);  } ?></h6>
            <hr/>
              <div class="card">
                 <div class="card-body">
                        <?php 


                          foreach ($d->result() as $row) {
                            $order_id=$row->order_id;
                            # code...

                    
                         

                        ?>

                <div class="box box-success">
                     
                      <!-- /.box-header -->
                      <div class="box-body">
                          
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

                                           <a href="https://<?php echo $row->website; ?>/userfile/<?php echo $up->file_name;?>"><?= $up->file_name; ?> </a> <br>

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

                                           <a href="https://<?php echo $row->website; ?>/userfile/<?php echo $re->file_name;?>"><?= $re->file_name; ?> </a> <br>

                           <?php  } else { echo '__'; } }  ?>
                        </p>
                          </div>
                        </div>

                        

                         <strong><i class="fa fa-upload margin-r-5"></i> Revision Notes</strong>

                        <p class="text-muted">

                         <textarea class="form-control" readonly><?php if(isset($row->order_revision_details)){ echo $row->order_revision_details;  } else { echo '__'; } ?></textarea>
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

                                           <a href="<?php echo base_url().'submission/'.$sub->file_name;?>"><?= $sub->file_name; ?> </a> <br>

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





       


        




      
     