<?php include 'header.php' ?>
<div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                   
                                    <h4 class="page-title">Add Sample</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">

                         <div class="col-md-9 offset-md-1">
                           <div class="card">

                               <div class="card-body">
                                           
                                               <?php

                                                    if(!empty($message)) { ?>

                                                   <div class="alert alert-success">
                                                      <?php echo $message;  ?>
                                                       
                                                   </div>

                                                  <?php
                                                   }

                                                 ?>
                                        <h4 class="header-title">Add Sample</h4> <br>
                                       
                                        <div class="row">
                                            <div class="col-xl-9">
                                             <?php if(!empty($error)){ ?>

                                                 <div class="alert alert-warning">
                                                   <?php echo $error; ?>
                                                  </div>

                                               <?php     } ?>
                                             <form action="<?php echo base_url('admin/add_sample_process') ?>" method="post">

             <div class="box-body">
                                 
                                

                                                    
                            <!-- Tab panes -->

                                 
                                  

                             


                                  <div class="form-group">
                                   
                                      
                                        
                                        <label for="inputEmail" class="col-xl-8 form-control-label">Title</label>
                                        <div class="col-xl-10">
                                            <input class="form-control" value="" name="title" id="title"  type="text" required>
                                        </div>
                                        
                                        
                                  </div>
                                   

                                  <div class="form-group">
                                    
                                       
                                        <label for="inputEmail" class="col-xl-8 form-control-label">First Paragraph</label>
                                        <div class="col-xl-10">
                                            <textarea rows="5" class="form-control" value="" name="paragraph" id="title"  type="text" required></textarea>
                                        </div>
                                     
                                        
                                     
                                    
                                  </div>

                                    <div class="form-group">
                                    
                                       
                                        <label for="inputEmail" class="col-xl-8 form-control-label">Paper</label>
                                        <div class="col-xl-10">
                                            <textarea rows="5" class="form-control" value="" name="paper" id="title"  type="text" required></textarea>
                                        </div>
                                     
                                        
                                     
                                    
                                  </div>
                                    
                                 
                                 
                                    
                                   

                                  
                                    
                                                                       
                               

                                 <div class="form-group">
                                   
                                   <div class="col-xl-10">
                                     <input type="submit" style="color:#fff;" name="submit" class="submit btn btn-primary btn-md" value="Add Sample" />
                                    </div>
                                 
                                </div>



                            </div>
                               

                              
                                 
                            </form>
                                            </div>
    
                                           
                                        </div>
                                        <!-- end row -->
    
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
               
       <?php include 'footer.php'; ?>