<?php
if($role_id==1){  ?>
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
                                    <p class="mb-0 font-13">$ <?php if(isset($completed_sum)){ echo $completed_sum;  } else { echo "0"; } ?></p>
                                   
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
                                   <p class="mb-0 font-13">$ <?php if(isset($pending_sum)){ echo $pending_sum;  } else { echo "0"; } ?></p>

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
                                    <p class="mb-0 font-13">$ <?php if(isset($revision_sum)){ echo $revision_sum;  } else { echo "0"; } ?></p>
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
                                  <p class="mb-0 font-13">$ <?php if(isset($awaiting_sum)){ echo $awaiting_sum;  } else { echo "0"; } ?></p>

                               </div>
                               <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bx-question-mark'></i>
                               </div>
                           </div>
                       </div>
                    </div>
                  </div> 
                </div><!--end row-->

                 <div class="row">
                   <div class="col">
                        <div class="card radius-10 border shadow-none">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                              <div>
                                <p class="mb-0 text-secondary">Earnings Orders </p>
                                <h4 class="my-1">$ <?= $e; ?></h4>
                              </div>
                              <div class="widgets-icons-2 bg-gradient-cosmic text-white ms-auto"><i class="bx bx-money"></i>
                              </div>
                            </div>
                          </div>
                        
                      </div>
                    </div>
                     <div class="col">
                        <div class="card radius-10 border shadow-none">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                              <div>
                                <p class="mb-0 text-secondary">Earnings Tips</p>
                                <h4 class="my-1">$ <?= $t; ?></h4>
                              </div>
                              <div class="widgets-icons-2 bg-gradient-cosmic text-white ms-auto"><i class="bx bx-dollar"></i>
                              </div>
                            </div>
                          </div>
                        
                      </div>
                    </div>
                     <div class="col">
                     <div class="card radius-10 border shadow-none">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                              <div>
                                <p class="mb-0 text-secondary">Clients</p>
                                <h4 class="my-1"><?= $b; ?></h4>
                              </div>
                              <div class="widgets-icons-2 bg-gradient-cosmic text-white ms-auto"><i class="bx bx-user"></i>
                              </div>
                            </div>
                          </div>
                        
                      </div>
                    </div>
                 </div>
                <div class="row">
                <div class="col-12 col-lg-4">
                       <div class="card radius-10">
                             <div class="card-body">
                            <div class="d-flex align-items-center">
                              <div>
                                <h6 class="mb-0">Website Performance</h6>
                              </div>
                              
                            </div>
                            <div class="chart-container-2 mt-4">
                              <canvas id="chart2"></canvas>
                              </div>
                             </div>
                             <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">EssayLoop <span class="badge bg-success rounded-pill"><?= $loop_numbers ?></span>
                            </li>
                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Your Writer <span class="badge bg-danger rounded-pill"><?= $your_numbers ?></span>
                            </li>
                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Econ Statistics <span class="badge bg-primary rounded-pill"><?= $econ_numbers ?></span>
                            </li>
                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Home Work <span class="badge bg-warning text-dark rounded-pill"><?= $homework_numbers ?></span>
                            </li>
                             <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">YourEssayShark <span class="badge bg-dark text-dark rounded-pill" style="color: white !important;background-color: #454545 !important;"><?= $essay_numbers ?></span>
                            </li>
                             <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">MyEssayDoer <span class="badge bg-warning text-dark rounded-pill" style="color: white !important;background-color: #8B1A1A !important;"><?= $doer_numbers ?></span>
                            </li>
                          </ul>
                           </div>
           </div>
           <script type="text/javascript">
                  var loop_numbers=<?= $loop_numbers ?>;
                  var your_numbers=<?= $your_numbers ?>;
                  var econ_numbers=<?= $econ_numbers ?>;
                  var homework_numbers=<?= $homework_numbers ?>;
                  var essay_numbers=<?= $essay_numbers ?>;
                  var doer_numbers=<?= $doer_numbers ?>;
           </script>

               
                 <div class="col-12 col-lg-8">
                     <div class="card radius-10">
                        <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div>
                            <h6 class="mb-0">Sales Overview</h6>
                          </div>
                         
                        </div>
                        <div class="d-flex align-items-center ms-auto font-13 gap-2 my-3">
                          <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: #14abef"></i>Orders</span>
                        </div>
                        <div class="chart-container-1">
                          <canvas id="chart1"></canvas>
                          </div>
                        </div>
                       
                      </div>
                 
                 </div>
               </div>
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
                                <th>Amount</th>
                                
                                <th>Details</th>
                             </tr>
                             </thead>
                             <tbody>

                                  <?php
                                                        foreach ($f->result() as $row)
                                                        {   ?>
                                                    <tr>
                                                       
                                                        <td>
                                                            <h6><?php if(isset($row->user_fname)) { echo $row->user_fname;  }   ?></h6></td>
                                                        <td><?php if(isset($row->order_title)) { echo $row->order_title;  }   ?></td>
                                                        <td><?php if(isset($row->order_amount)) { echo $row->order_amount;  }   ?></td>
                                                       
                                                         <td><a href="<?php echo base_url('admin/get_paper_details/').$row->order_id; ?>"><button class="btn btn-primary btn-sm">Paper Details</button></a></td>
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

        <?php } ?>