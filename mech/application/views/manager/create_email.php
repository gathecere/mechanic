<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Send email to Clients</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Send email to Clients</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Send email to Clients</h6>
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
                      <form class="form-horizontal" method="post" action="<?php echo base_url('admin/send_client_emails'); ?>">
                          <div class="panel-body">
                            
                              <div class="row">
                                  <div class="col-md-8 mar-btm">
                                    <label class="control-label">Subject</label>
                                  
                                       <input type="text" name="subject" class="form-control"  required>
                                  </div>
                                  
                              </div>
                              <br>
                               <div class="row">
                                  <div class="col-md-8 mar-btm">
                                    <label class="control-label">Message</label>
                                      <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
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
              