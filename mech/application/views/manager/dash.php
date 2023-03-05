<div class="page-wrapper">
            <div class="page-content">
               
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                   <div class="col">
                     <div class="card radius-10 border-start border-0 border-3 border-success">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-success">Completed</p>
                                    <h4 class="my-1 text-success"><?php if(isset($completed_count)){ echo $completed_count;  } else { echo "0"; } ?></h4>
                                   
                                   
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class='bx bx-check'></i>
                                </div>
                            </div>
                        </div>
                     </div>
                   </div>
                   <div class="col">
                    <div class="card radius-10 border-start border-0 border-3 border-info">
                       <div class="card-body">
                           <div class="d-flex align-items-center">
                               <div>
                                   <p class="mb-0 text-secondary">In Progress</p>
                                   <h4 class="my-1 text-info"><?php if(isset($pending_count)){ echo $pending_count;  } else { echo "0"; }?></h4>
                                  

                               </div>
                               <div class="widgets-icons-2 rounded-circle bg-gradient-scooter  text-white ms-auto"><i class='bx bx-loader'></i>
                               </div>
                           </div>
                       </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card radius-10 border-start border-0 border-3 border-danger">
                       <div class="card-body">
                           <div class="d-flex align-items-center">
                               <div>
                                   <p class="mb-0 text-danger">Revision</p>
                                   <h4 class="my-1 text-danger"><?php if(isset($revision_count)){ echo $revision_count;  } else { echo "0"; }?></h4>
                                   
                               </div>
                               <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class='bx bx-x' ></i>
                               </div>
                           </div>
                       </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card radius-10 border-start border-0 border-3 border-warning">
                       <div class="card-body">
                           <div class="d-flex align-items-center">
                               <div>
                                   <p class="mb-0 text-warning">Awaiting Payments</p>
                                   <h4 class="my-1 text-warning"><?php if(isset($awaiting_payments_count)){ echo $awaiting_payments_count;  } else { echo "0"; } ?></h4>
                                 

                               </div>
                               <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bx-question-mark'></i>
                               </div>
                           </div>
                       </div>
                    </div>
                  </div> 
                </div><!--end row-->

                
                
               <?php
                  $county='';
                  $months='';
                  $county=array();
                  $months=array();

                  foreach ($monthly as $month) {

                    $county[]=$month->kevvy;
                    $oo=$month->sham;

                    $monthy[]=date('M', strtotime($oo));

                    //$monthNum = date("M",strtotime($oo));
                    //$monthy[] =date("F", strtotime('00-'.$monthNum.'-01'));
                   // $months[]= DATE_FORMAT($date, '%M');
                    # code...
                  }

                  // $months="'".implode("', '", $monthy)."'";

                   $countys=implode(",", $county);
                   $months=json_encode($monthy);

                   // echo $months;
               ?>
               
                    
                  
               </script>
               <div class="row">
                   <div class="col-12">
                 <div class="card radius-10">
                         <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h6 class="mb-0">Recent Orders</h6>
                                </div>
                                
                            </div>
                         <div class="table-responsive">
                           <table class="table align-middle mb-0">
                            <thead class="table-light">
                             <tr>
                                <th>#</th>
                                <th>Order Title</th>
                               
                                
                                <th>Details</th>
                             </tr>
                             </thead>
                             <tbody>

                                  <?php
                                                        foreach ($f->result() as $row)
                                                        {   ?>
                                                    <tr>
                                                       
                                                        <td>
                                                            <h6><?php if(isset($row->order_id)) { echo $row->order_id;  }   ?></h6></td>
                                                        <td><?php if(isset($row->order_title)) { echo $row->order_title;  }   ?></td>
                                                      
                                                       
                                                         <td><a href="<?php echo base_url('manager/get_paper_details/').$row->order_id; ?>"><button class="btn btn-primary btn-sm">Paper Details</button></a></td>
                                                    </tr>
                                                    <?php
                                                        }
                                                    ?>
          
                          
          
                           
                            </tbody>
                          </table>
                          </div>
                         </div>
                    </div>
                 </div>

               </div>
            </div>
        </div>