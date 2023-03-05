<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Orders</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Orders</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <hr/>
              <div class="card">
                 <div class="card-body">
                                        <h4 class="page-title"><?php if(!empty($title)){ echo $title; } ?> ID:#<?php echo $this->uri->segment(3) ?></h4>
                                     
                                       
    
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                       <tr>
                                                          <th>#</th>
                                                          <th>Paper Title</th>
                                                         
                                                          <th>Amount</th>
                                                         
                                                          <th>Rating</th>
                                                          <th>Review</th>
                                                          <th>Action</th>
                                                          <th>Edit Rating</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    foreach ($h->result() as $row)
                                                    {   ?>
                                                    <tr>
                                                        <td><?php if(isset($row->order_id)) { echo $row->order_id;  }   ?></td>
                                                        <td><?php if(isset($row->order_title)) { echo $row->order_title;  }   ?></td>
                                                       
                                                        <td><?php if(isset($row->order_amount)) { echo $row->order_amount;  }   ?></td>
                                                       

                                                                <td>


                                        <?php if(isset($row->order_rating)){

                                        //  $average=3.9;
                                           $njuguna= round($row->order_rating * 2) / 2;

                                         

                                      

                                        // $average=0;


                                        ?>
                                                                  

                                                                   <fieldset class="rating" id="oya" style="min-height: 10px;">
                                          <input type="radio"  class="ratey" id="star5" name="rate<?= $row->order_id ?>" value="5"  <?php if($njuguna==5){ echo "checked=''"; } ?>/>
                                          <label class = "fully" for="star5" title="Awesome - 5 stars"></label>
                                          <input type="radio"  class="ratey" id="star4half" name="rate<?= $row->order_id ?>" value="4 and a half" <?php if($njuguna==4.5){ echo "checked=''"; } ?> /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                          <input type="radio" id="star4" name="rate<?= $row->order_id ?>" value="4" <?php if($njuguna==4){ echo "checked=''"; } ?> /><label class ="fully" for="star4" title="Pretty good - 4 stars"></label>
                                          <input type="radio" class="ratey" id="star3half" name="rate<?= $row->order_id ?>" value="3 and a half" <?php if($njuguna==3.5){ echo "checked=''"; } ?> /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                          <input type="radio" id="star3" name="rate<?= $row->order_id ?>" value="3" <?php if($njuguna==3){ echo "checked=''"; } ?>/><label class = "fully" for="star3" title="Meh - 3 stars"></label>
                                          <input type="radio" class="ratey" id="star2half" name="rate<?= $row->order_id ?>" value="2 and a half" <?php if($njuguna==2.5){ echo "checked=''"; } ?>/><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                          <input type="radio" class="ratey" id="star2" name="rate<?= $row->order_id ?>" value="2" <?php if($njuguna==2){ echo "checked=''"; } ?> /><label class = "fully" for="star2" title="Kinda bad - 2 stars"></label>
                                          <input type="radio" class="ratey" id="star1half" name="rate<?= $row->order_id ?>" value="1 and a half" <?php if($njuguna==1.5){ echo "checked=''"; } ?> /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                          <input type="radio" class="ratey" id="star1" name="rate<?= $row->order_id ?>" value="1" <?php if($njuguna==1){ echo "checked=''"; } ?> /><label class = "fully" for="star1" title="Sucks big time - 1 star"></label>
                                          <input type="radio" class="ratey" id="starhalf" name="rate<?= $row->order_id ?>" value="half" <?php if($njuguna==0.5){ echo "checked=''"; } ?> /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                      </fieldset> (<?= $njuguna ?>) <br><br>
                                                       <?php } ?>
                                                                </td>
                                                         <td><?php if(isset($row->order_rating_comment)) { echo $row->order_rating_comment;  } else { echo '_'; }  ?></td>
                                                        <td><a href="<?php echo base_url('admin/get_paper_details/').$row->order_id; ?>"><button class="btn btn-success btn-sm">See More</button></a></td>
                                                         <?php if(isset($row->order_rating)){ ?>
                                                         <td><a href="<?php echo base_url('admin/edit_rating/').$row->order_id; ?>"><button class="btn btn-warning btn-sm">Edit Rating</button></a></td>
                                                       <?php } ?>
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
               
