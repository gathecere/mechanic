<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Coupon Management</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Coupon Management</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Coupon Management</h6>
            <hr/>
              <div class="card">
                 <div class="card-body">
                                        <h4 class="header-title">Coupon Management</h4>
                                       
    
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                       <tr>
                                                            <th>#</th>
                                                            <th>Coupon Code</th>
                                                            <th>Coupon Discount %</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                     <?php
                                                        foreach ($h->result() as $row)
                                                        {   ?>
                                                        <tr>
                                                            <td><?php if(isset($row->coupon_id)) { echo $row->coupon_id;  }   ?></td>
                                                            <td><?php if(isset($row->coupon_code )) { echo $row->coupon_code;  }   ?></td>
                                                            <td><?php if(isset($row->coupon_discount)) { echo $row->coupon_discount;  }   ?></td>
                                                             <td><?php if(isset($row->status_name)) { echo $row->status_name;  }   ?></td>
                                                         
                                                          
                                                             <td><?php if(isset($row->coupon_status)) { 

                                                                         if($row->coupon_status==0)
                                                                          { ?>
                                                                            <a href="<?php echo base_url('admin/change_coupon_status/0/').$row->coupon_id; ?>">
                                                                             <button class="btn btn-md btn-warning">Deactivate</button>
                                                                            </a>
                                                                         <?php
                                                                          }
                                                                         else
                                                                         { ?>
                                                                         <a href="<?php echo base_url('admin/change_coupon_status/1/').$row->coupon_id; ?>">
                                                                          <button class="btn btn-md btn-success">Activate</button>
                                                                         </a>

                                                                       <?php  }


                                                                     }   ?></td>
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

            