<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Send to Selected</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Send to Selected</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Send to Selected</h6>
            <hr/>
              <div class="card">
                 <div class="card-body">
        <?php 
            if(isset($success))
              { ?>
              <div class="alert alert-success" style="text-align:center">
                <?php
                  echo $success;
                ?>
               </div>
            <?php
             
              }  
              ?>
               
          
                      <!--No Label Form-->
                      <!--===================================================-->
                      <form class="form-horizontal" method="post" action="<?php echo base_url('admin/send_selected_emails'); ?>">
                          <div class="panel-body">
                             <div class="row g-3">
                                  <div class="col-md-8 mar-btm">
                                     <label class="form-label">Choose receipients</label>
                                      <br>
                                       <select class="js-example-basic-multiple form-control" name="receipients[]" multiple="multiple">
                                  
                                       <?php
                                      // print_r($h->result_array()); di

                                        foreach ($h->result_array() as $row) {
                                       
                                      ?>
                                      

                                        <option value="<?php echo $row['user_email']; ?>"><?php echo $row['user_fname']; ?> [client]</option>
                                      <?php }

                                        foreach ($d->result_array() as $row) {
                                       
                                      ?>

                                        <option value="<?php echo $row['user_email']; ?>"><?php echo $row['user_fname']; ?> [writer]</option>

                                         <?php
                                            }
                                       
                                      ?>
                                  </select>
                                  </div>
                                  
                              </div>
                              <div class="row g-3" style="margin-top: 6px;">
                                  <div class="col-md-8 mar-btm">
                                    <label class="form-label">Subject</label>
                                    <br>
                                  
                                       <input type="text" name="subject" class="form-control"  required>
                                  </div>
                                  
                              </div>
                               <div class="row g-3">
                                  <div class="col-md-8 mar-btm">
                                    <label class="form-label">Message</label>
                                     <br>
                                      <textarea name="message" class="form-control" rows="8" required></textarea>
<!--                                       <input type="password" name="password" class="form-control" placeholder="Password" required>
 -->                                  </div>
                                  
                              </div>
                               
                             

                               

                               
                             
                          </div>
                          <br>
                          <div class="panel-footer text-left">
                              <button class="btn btn-primary">Send Emails</button>
                          </div>
                      </form>
                      <!--===================================================-->
                      <!--End No Label Form-->
          
                  </div>
              </div>
          </div>

        </div>
  
              </div>
          
          
          
              
                </div>
              