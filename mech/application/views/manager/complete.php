<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Completed Orders</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Completed Orders</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Completed Orders</h6>
            <hr/>
              <div class="card">
                 <div class="card-body">
                          <div class="table-responsive">
                                            <table class="table table-striped mb-0" id="example">
                                                <thead>
                                                      <tr>
                                                            <th>#</th>
                                                          

                                                            <th>Paper Details</th>

                                                        </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                     <?php
                                                          foreach ($completed->result() as $row)
                                                          {   ?>
                                                          <tr>
                                                              <td><a href="<?php echo base_url('manager/get_paper_details/').$row->order_id; ?>"><?php if(isset($row->order_id)) { echo $row->order_id;  }   ?></a></td>
                                                            
                                                             
                                                              
                                                              <td><a href="<?php echo base_url('manager/get_paper_details/').$row->order_id; ?>"><button class="btn btn-primary btn-sm">Paper Details</button></a></td>
                                                              

                                                            
                                                              </div>
                                                           
                                                          </tr>
                                                         <?php } ?>
                                                   
                                                </tbody>
                                            </table>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                           
                          
                        </div>
                       