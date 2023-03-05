<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Repair Details</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Repair Details</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Repair Details</h6>
           
            <hr/>
              <div class="card">
                 <div class="card-body">
                        <?php
                        foreach ($h as $row)
                        {   ?>
                        
                           <?php 
                                  if(isset($notification)) {
                                    ?>
                                     <div class="alert alert-success">
                                       <?php

                                            echo $notification;
                                        ?>
                                       </div>
                                    <?php
                                  }
                                ?>
                     
                          <div class="col-md-12 px-3">
                            <div class="card-block px-3">
                            <br>

                              <div class="card-body">
                              <h6 class="babu">Repair ID #<?php if(isset($row->entry_id)) { echo $row->entry_id; } ?>  </h6>

                               <h6 class="babu">Stop Name</h6>
                               <div class="kirui">
                                 <p class="text-muted">
                              <?php if(isset($row->stop_name)) { echo $row->stop_name;  } else { echo '___'; }  ?> 
                                </p>
                              </div>
                             
                              <h6 class="babu">Time Taken (minutes)  </h6>
                               <div class="kirui">
                                 <p class="text-muted">
                              <?php if(isset($row->time)) { echo $row->time;  } else { echo '___'; }  ?> 
                                </p>
                              </div>
                             
                               <h6 class="babu">Spares  </h6>
                                <div class="kirui">
                                <p class="text-muted">
                                   <?php

                                      foreach($spares as $spare){

                                           echo $spare->spare_name."<br>";


                                      }


                                   ?>
                                </p>
                              </div>

                               <h6 class="babu">Status  </h6>
                                <div class="kirui">
                                <p class="text-muted">
                                   <?php if(isset($row->status_name)) { echo $row->status_name;  } else { echo '___'; }  ?> 
                                </p>
                              </div>
                             
                             
                              <div>
                              <br> 
                               
                               
                                <br> <br>
                               
                              </div>

                              </div>
                             
                              
                             
                            </div>
                          </div>

                       
                      </div>
                      <?php
                        }
                      ?>
                  
                      
                       </div>
                    </div>
                </div>
            </div>
        </div>
