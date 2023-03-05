<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Inventory</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Inventory</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Inventory</h6>
            <span style="float: right; position:relative; right:90px; bottom:30px;"><a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#spareModal"><i class="fa fa-plus"></i>Add Spare</a></span>
            <hr/>
              <div class="card">
                 <div class="card-body">

                                      <?php
                                        if(isset($message)){ ?>

                                          <div class="alert alert-info">

                                             <?= $message; ?>


                                          </div>




                                      <?php  }


                                      ?>
                                       
                                       
    
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0" id="example">
                                                <thead>
                                                      <tr>
                                                            <th>#</th>
                                                          
                                                           
                                                            <th>Spare </th>
                                                            
                                                            <th>Balance</th>

                                                            <th>Add Inventory</th>
                                                           
                                                            
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                      <?php
                                                          foreach ($inventory as $row)
                                                          {   ?>
                                                          <tr>
                                                              <td><?= $row->inventory_id; ?></a></td>
                                                             
                                                            
                                                              <td><?php if(isset($row->spare_name)) { echo $row->spare_name;  }   ?></td>

                                                              <td><?php if(isset($row->inventory_balance)) { echo $row->inventory_balance;  }   ?></td>

                                                              
                                                             

                                                               <td><a data-bs-toggle="modal" data-bs-target="#addInventory<?= $row->inventory_id; ?>"><button class="btn btn-primary btn-sm">Add Inventory</button></a></td>


                                            <div class="modal fade" id="addInventory<?= $row->inventory_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <h5 class="modal-title" id="exampleModalLabel">Add Inventory</h5>
                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="<?= base_url('admin/add_inventory') ?>">

                                                                   <div class="row mb-3">
                                                                        <label class="col-form-label" for="example-password">Quantity</label>
                                                                       
                                                                          <div class="col-sm-12">

                                                                            <input type="hidden" name="inventory_id"  value="<?= $row->inventory_id; ?>">
                                                                          
                                                                              <input class="form-control" type="number" name="quantity" required>
                                                                            
                                                                          </div>
                                                                                               
                                                                                               
                                                                                               
                                                                    </div>

                                                                    


                                                                  
                                                               
                                                              
                                                            </div>
                                                            <div class="modal-footer">
                                                              <button type="submit" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                             </form>
                                                          </div>
                                                        </div>
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
                        <!--- end row -->

                       
                        <!-- end row -->

                       
                        <!-- end row -->

                       
                        <!-- end row -->

                      
                        <!-- end row -->


                       
                        <!-- end row -->  
                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->

                

                <!-- Footer Start -->

                <div class="modal fade" id="spareModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add Spare</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?= base_url('admin/add_spare') ?>">

                           <div class="row mb-3">
                                <label class="col-form-label" for="example-password">Spare Name</label>
                               
                                  <div class="col-sm-12">
                                  
                                      <input class="form-control" type="text" name="spare_name" required>
                                    
                                  </div>
                                                       
                                                       
                                                       
                            </div>

                            


                          
                       
                      
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                     </form>
                  </div>
                </div>
              </div>
               
     