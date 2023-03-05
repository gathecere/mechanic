<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Revision</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Revision</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Revision</h6>
            <hr/>
              <div class="card">
                 <div class="card-body">
                                        <h4 class="header-title">Revision</h4>
                                       
    
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0" id="example">
                                                <thead>
                                                      <tr>
                                                              <th>#</th>
                                                            
                                                             
                                                              <th>Revision Details</th>
                                                             
                                                             
                                                              <th>Submit Revision</th>
                                                              <th>Chat</th>
                                                              <th>Action</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                       <?php
                                                            foreach ($revision->result() as $row)
                                                            {   ?>
                                                            <tr>
                                                                <td><a href="<?php echo base_url('admin/get_paper_details/').$row->order_id; ?>"><?php if(isset($row->order_id)) { echo $row->order_id;  }   ?></a></td>
                                                               
                                                               
                                                                <td><?php if(isset($row->order_revision_details)) { echo $row->order_revision_details;  }   ?></td>
                                                               
                                                               

                                                                 <td><a href="<?php echo base_url('admin/submit_paper/').$row->order_id; ?>"><button class="btn btn-warning btn-sm">Submit Work</button></a></td>

                                                                  <td><a href="<?php echo base_url('admin/message_client/').$row->order_id.'/'.$row->order_user_id; ?>"><button class="btn btn-success btn-sm">Message Client</button></a></td>

                                                                  


                                                                 
                                                                <td><a href="<?php echo base_url('admin/get_paper_details/').$row->order_id; ?>"><button class="btn btn-primary btn-sm">Paper Details</button></a></td>
                                                             
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
               
