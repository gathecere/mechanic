<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Email Leads</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Email Leads</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Email Leads</h6>
            <hr/>
              <div class="card">
                 <div class="card-body">
                                        
                                       
    
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0" id="example">
                                                <thead>
                                                      <tr>
                                                          <th>#</th>
                                                          <th>Email</th>
                                                          <th>Website</th>
                                                          
                                                         
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                      <?php
                                                       
                                                        foreach ($p->result() as $row)
                                                            
                                                        {   

                                                          ?>
                                                        <tr>
                                                            <td><?php if(isset($row->lead_id)) { echo $row->lead_id;  }   ?></td>
                                                            <td><?php if(isset($row->lead_email)) { echo $row->lead_email;  }   ?></td>
                                                            <td><?php if(isset($row->website)) { echo $row->website;  }   ?></td>
                                                           
                                                           
                                                            
                                                          
                                                         
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
               
