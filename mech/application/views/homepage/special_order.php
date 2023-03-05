 <main>
        <!-- Home Banner -->
        <section class="parallax page-heading" style="background-image: url(./../static/img/home-banner-1.webp);">
            <div class="mask bg-black opacity-7"></div>
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h1 class="h2 text-white m-0 text-center"><?php if($name){ echo $name; }  ?></h1>
                    </div>
                    
                </div>
            </div>
        </section>   
    
      <section class="section bg-gray-100">
          <div class="container kevvy">

          <div class="padding-top-large"></div>

        	
        	
             <div class="row">
        	      <div class="col-lg-8">
                  <div class="card">
                     <div class="card-body">
                       <p class="lead mb-3 text-center">Place a technical order and get a quotation in minutes</p>
                      <div class="main-form">
                             <?php
                                 if($this->session->flashdata('warning')){
                                  ?>
                                    <div class="alert alert-warning">

                                       <?php echo $this->session->flashdata('warning'); ?>
                                      
                                    </div>
                             <?php    }


                               ?>

                                 <?php
                                 if(isset($error)){
                                  ?>
                                    <div class="alert alert-warning">

                                       <?php echo $error; ?>
                                      
                                    </div>
                             <?php    }


                               ?>
                     
                           <form action="<?php echo base_url() ?>client/special_first" method="post" id="zoney" enctype='multipart/form-data'>
                           
                                 <?php   
                                       if($this->uri->segment(3)){

                                               $affiliate=$this->uri->segment(3);
                                               $aff_id=$affiliate;



                                             


                                               

                                       }
                                     ?>
                                   <input type="hidden" class="form-control mb-3" id="affiliate" value="<?php if(isset($aff_id)){  echo $aff_id; } ?>" name="affiliate">
                          

                           
                               

                                <div class="form-group">
                                    <input type="text" class="form-control mb-3" id="order_title" name="order_title" placeholder="Title" required>
                                </div>
                                 <div class="form-group">
                                    <textarea class="form-control mb-3" id="order_description" name="order_description" placeholder="Details" rows="5"></textarea>
                                </div>

                                 <div class="form-group">
                                    <div class="input-group mb-3">
                                   <div class="input-group-prepend">
                                      <span class="input-group-text" style="height: 48px;"><i class="fa fa-calendar"></i></span>
                                    </div>
                                   <input class="form-control readonly" placeholder="Launch Calendar"  type="text" id="deadline" name="order_deadline_id" required />
                                  
                                  </div>

                                  <input type="hidden" name="order_tz" value=""  id="tz">

                                    
                                </div>
                  
                             
                              
                                <div class="form-group">
                                    <div class="dropzone" id="myDropzonespecial">
                                    </div>
                                 </div>

                               
                                 <div class="col-md-12 sub-col-right">
                                   
                                      <h6 class="text-default text-center mb-0 small"> - PERSONAL INFORMATION - </h6> 
                                      <br>
                                </div>
                                  
                                    
                                    
                                  
                                 <div class="row form-group">
                                    <div class="col-md-6">
                                       <input type="text" class="form-control  mb-3" id="user_fname"  name="user_fname" placeholder="First Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control  mb-3" id="user_lname"  name="user_lname" placeholder="Surname (optional)">
                                    </div>
                                 </div>
                                 
                                    <div class="form-group row">
                                      <div class="col-md-6">
                                        <input type="email" class="form-control mb-3" id="user_email" name="user_email" placeholder="Your email" required>
                                      </div>
                                      <div class="col-md-6">
                                        <input type="number" class="form-control mb-3" id="user_phone" name="user_phone" placeholder="Your phone (optional)">
                                      </div>
                                    </div>
                                  <div class="row form-group">

                                    <div class="col-md-6">
                                       <input type="password" class="form-control  mb-3" id="new_password"  name="password" placeholder="Password" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control  mb-3" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
                                    </div>
                                  </div>
                                    <div class="form-group">
                                     <div class="g-recaptcha" id="g" data-sitekey="6LdVpcgZAAAAAKXFlnZb259PNT4YoZpAHACYgRLu"></div>
                                    </div>
                                  <button id="submit-all"  type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> ORDER NOW</button> 
                                   
                                

                                




                          

                                

                            <div class="spacer">&nbsp;</div>

                            <div class="text-center">
                               
                            </div>
                           </form>

                            <!-- / text-center
                         
                        </div><!-- / form-wrapper -->
                    </div><!-- / custom-form -->
                  </div>  
                </div><!-- / column -->
              </div>
              <div class="col-lg-4">
                    <?php include 'sidebar.php'; ?>
              </div>
           
            


      </div> 
   </div>
 </section>
</main>
  