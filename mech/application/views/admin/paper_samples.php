<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">EssayPad Past Papers</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">EssayPad Past Papers</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">EssayPad Past Papers</h6>
            <hr/>
              <div class="card">
                 <div class="card-body">
                                           
                                               <?php

                                                    if(!empty($success)) { ?>

                                                   <div class="alert alert-success">
                                                      <?php echo $success;  ?>
                                                       
                                                   </div>

                                                  <?php
                                                   }

                                                 ?>
                                       
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                      <tr>
                                                            <th>#</th>
                                                            <th>Title</th>
                                                            <th>Edit</th>
                                                            <th>Action</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                     <?php
                                                          foreach ($h->result() as $row)
                                                          {   ?>
                                                          <tr>
                                                              <td><?php if(isset($row->sample_id)) { echo $row->sample_id;  }   ?></td>
                                                              <td><?php if(isset($row->sample_title)) { echo $row->sample_title;  }   ?></td>
                                                              <td><a href='<?php echo base_url("Admin/edit_paper_sample/$row->sample_id");  ?>'>Edit</a></td>
                                                              <td><a href='<?php echo base_url("Admin/delete_sample_paper/$row->sample_id");  ?>'' Onclick="return confirm('Are you sure you want to delete this record?')" >Delete</a></td>
                                                             
                                                           
                                                          </tr>
                                                         <?php } ?>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
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
                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->

                

                <!-- Footer Start -->
               
