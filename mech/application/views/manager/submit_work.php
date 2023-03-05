

    <div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Submit Work</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Submit Work</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Submit Work</h6>
            <hr/>
              <div class="card">
                 <div class="card-body">
                    

                       <?php
                              if(!empty($this->session->flashdata('message'))) { ?>
                             <div class="alert alert-success">
                                <?php echo $this->session->flashdata('message');  ?>
                                 
                             </div>
                            <?php
                             }

                           ?>



              <?php 
             if(isset($error))
             {
              ?>
              <div class="alert alert-warning">
               <?php
                echo $error;
                ?>
               </div>
               <?php
             }

           ?>

           <div class="box-header with-border">
              <h3 class="box-title">Submit Work</h3>
            </div>

          

                      <!--No Label Form-->

                      <!--===================================================-->

                      
             <form action="<?php echo base_url('manager/submit_process') ?>" enctype='multipart/form-data' method="post" style="padding-bottom: 30px;">
              <div class="box-body">
                                 
                                  

                                                    
                            <!-- Tab panes -->
                                   <input type="hidden" name="order_id" value="<?php if(isset($order_id)){ echo $order_id;  } ?>">
                                    
                                    <div class="form-group">
                                        <label for="textArea" class="col-xl-12 form-control-label">Note(optional)</label>
                                        <div class="col-xl-10">
                                            <textarea class="form-control myeditablediv" name="order_delivery_note" rows="7" id="description" required></textarea> 
                                        </div>
                                    </div>
                                 <div class="form-group">
                                  <label for="textArea" class="col-xl-12 form-control-label">Upload File(s)</label>
                                  <div class="col-xl-10">
                                  <input type='file' name='files[]' multiple required>
                                 </div>
                                 </div>
                                 <br>
                                 <div class="form-group">
                                   <div class="col-xl-10">
                                <input type="submit" style="color:#fff;" name="submit" class="submit btn btn-primary btn-md" value="Submit Paper" /><br>
                                  </div>
                                </div>
                               

                              
                              </div>   
                            </form>

                      <!--===================================================-->

                      <!--End No Label Form-->

          

                  </div>




            

            <!--===================================================-->

            <!--END MAIN NAVIGATION-->


       </div>
    </div>

</div>
</div>

</div>

        



       