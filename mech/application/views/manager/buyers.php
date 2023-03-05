<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Clients</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Clients</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Clients</h6>
            <hr/>
              <div class="card">
                 <div class="card-body">
                                       
    
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0" id="example">
                                                <thead>
                                                       <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Client Profile</th>
                                                           
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                      foreach ($h->result() as $row)
                                                      {   ?>
                                                      <tr>
                                                          <td><?php if(isset($row->user_id)) { echo $row->user_id;  }   ?></td>
                                                          <td><?php if(isset($row->user_fname )) { echo $row->user_fname.' '.$row->user_lname;  }   ?></td>
                                                          <td><?php if(isset($row->user_email)) { echo $row->user_email;  }   ?></td>

                                                          <td><a href="<?php echo base_url('admin/client_profile/').$row->user_id; ?>"><button class="btn btn-success btn-sm">Cient Profile</button></a></td>

                                                        
                                                      </tr>
                                                     <?php } ?>
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
               
