 <main>
        <!-- Home Banner -->
        <section class="parallax page-heading" style="background-image: url(static/img/home-banner-1.webp);">
            <div class="mask bg-black opacity-7"></div>
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h6 class="text-white-50 font-w-500 text-center">Create or Login to your account</h6>

                        <h1 class="h2 text-white m-0 text-center"><?php if($name){ echo $name; }  ?></h1>
                    </div>
                   
                </div>
            </div>
        </section>  
<section class="section bg-gray-100">
        
           <h1 class="text-center">My Account</h1>
           <br>
            
             <div class="col-md-6 offset-md-3">
               <div class="card">
                 <div class="card-body">
                

                          <!--  <ul class="nav nav-tabs">
                              <li class="active"><a data-toggle="tab" href="#home">LOG IN</a></li>
                              <li><a data-toggle="tab" href="#menu1">SIGN UP</a></li>
                             
                            </ul> -->

                          <ul class="nav nav-fill nav-tabs">
                           
                            <li class="nav-item">
                              <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">LOG IN</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">SIGN UP</a>
                            </li>
                             
                            
                          </ul>

                            <div class="tab-content">
                              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                 <?php 
                                        if(isset($error_message)){ ?>
                                        <div class="alert alert-warning">
                                          <?php 

                                            echo $error_message;
                                          ?>
                                         </div>
                                    <?php
                                        }


                                    ?>

                                     <?php 
                                        if(isset($success_message)){ ?>
                                        <div class="alert alert-success">
                                          <?php 

                                            echo $success_message;
                                          ?>
                                         </div>
                                    <?php
                                        }


                                    ?>

                                     <?php
                                           if($this->session->flashdata('warning')){
                                            ?>
                                            
                                              <div class="alert alert-warning">

                                                 <?php echo $this->session->flashdata('warning'); ?>
                                                
                                              </div>
                                       <?php    }


                                         ?>
                                   
                                      
                                        <form method="post" id="loginform" action="<?php echo base_url() ?>login_user">
                                            <br>
                                             <div class="form-group col-md-12">
                                            <input type="email" name="email" class="form-control"  placeholder="Email" required>
                                          </div>
                                           <div class="form-group col-md-12">
                                            <input type="password" name="password" class="form-control" id="login-password-input" placeholder="Password" required>
                                           </div>
                                            <div class="form-group col-md-12">
                                                <div class="left-area">
                                                    <button type="submit" class="btn btn-primary btn-lg">LOG IN</button>
                                                </div><!-- / left-area -->
                                               <!--  <div class="right-area">
                                                    <a href="#x" class="btn btn-primary">LOG IN</a>
                                                </div> --><!-- / right-area -->
                                            </div><!-- / form-inline-extras -->
                                            </form>
                                            <br>
                                            <div class="form-group col-md-12 row">
                                              
                                                <a data-target="#myModal" data-bs-toggle="modal" href="#myModal">Forgot your password?</a>
                                              
                                            </div><!-- / text-left -->

                                           
                                       
                                   
                              </div>
                              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                  
                                      <form id="signupform" method="post" action="<?php echo base_url('client/add_user') ?>">
                                         <br>
                                       
                                          <div class="form-group col-md-12">
                                            <input type="text" class="form-control mb-3" name="user_fname" placeholder="First Name">
                                          </div>
                                          <div class="form-group col-md-12">
                                            <input type="text" class="form-control mb-3" name="user_lname" placeholder="Surname (optional)">
                                          </div>
                                          <div class="form-group col-md-12">
                                            <input type="email" class="form-control mb-3" name="user_email" placeholder="Email Address">
                                          </div>
                                          <div class="form-group col-md-12">
                                            <input type="password" class="form-control mb-3" id="new_password"  name="password" placeholder="Password">
                                          </div>
                                          <div class="form-group col-md-12">
                                            <input type="password" class="form-control mb-3" id="confirm_password"  name="confirm_password" placeholder="Confirm Password">
                                          </div>
                                             
                                               <div class="form-group col-md-12">
                                                 <div class="g-recaptcha" data-sitekey="6LdVpcgZAAAAAKXFlnZb259PNT4YoZpAHACYgRLu"></div>
                                                </div>
                                            
                                            <div class="form-group col-md-12">
                                                
                                                    
                                                    <small>By signing up you accept our <a href="<?php echo base_url('home/terms') ?>">terms and conditions</a></small>
                                                        
                                                    <!-- / checkbox -->
                                                </div><!-- / left-area -->
                                               
                                                <div class="form-group col-md-12">
                                                     <button type="submit" class="btn btn-primary btn-lg">SIGN UP</button>
                                                </div><!-- / right-area -->
                                           
                                      </form>
                                    </div><!-- / custom-form -->
                              </div>
                            
                            </div>
                          </div>









                            <!-- pill tab in card -->
                         
                         
                            <!-- / pill tab in card -->
                        </div>
                     
                
            
</section>
</main>


 <div class="modal fade" id="myModal" role="dialog" style="z-index: 100000">
                                              <div class="modal-dialog">
                                                <div class="modal-content">

                                                  <!-- Modal Header -->
                                                  <div class="modal-header">
                                                    <h4 class="modal-title">Recover your password</h4>
                                                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                                                  </div>

                                                  <!-- Modal body -->
                                                  <div class="modal-body">
                                                      <form class="contactform" id="signupform" method="post" action="<?php echo base_url('client/recover_password')?>">
                                                                            <div class="row">
                                                                               
                                                                                 <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <input id="email" type="email" placeholder="Your email" name="email" class="form-control" required>
                                                                                    </div>
                                                                                </div>

                                                                                  <div class="col-md-12">
                                                                                    <div class="form-action">
                                                                                        <button class="btn btn-success" type="submit" name="send">Recover</button>
                                                                                    </div>
                                                                                </div>
                                                          </div>
                                                        </form>
                                                    </div>

                                                  <!-- Modal footer -->
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                  </div>

                                                </div>
                                              </div>
                                            </div>


