
    <!-- Header End -->
    <!-- Main -->
    <main>
        <!-- Home Banner -->
        <section class="bg-mine effect-section border-bottom">
            <div class="container position-relative">
                <div class="row py-4 py-lg-12 align-items-center">
                    <div class="col-lg-7 pe-xxl-12 my-4">
                      <h1 class="display-4 text-white pt-3">Custom Paper Writing Service</h1>
                       <img class="img-fluid" src="<?php echo base_url('assets/images/loopstudents.webp'); ?>" title="" alt="custom paper writing service">
                    </div>
                    <div class="col-lg-5 my-3">

                           <div class="form-wrapper">
                            
                          
                            
                               <form id="loginform">
                               <div class="text-muted text-center">  - PRICE CALCULATOR - </div>
                            
                               <div class="stv-radio-buttons-wrapper" id="parent">
                                          <input type="radio" onchange="get_tols()" onclick="get_tols()" class="stv-radio-button"  name="service" value="1" id="button1" checked />
                                          <label for="button1">Writing</label> 
                                          <input type="radio" onchange="get_tols()" onclick="get_tols()" class="stv-radio-button"  name="service" value="2" id="button2" />
                                          <label for="button2">Editing</label>
                                          <input type="radio" onchange="get_tols()" onclick="get_tols()"  class="stv-radio-button"  name="service" value="3" id="button3" />
                                          <label for="button3">Proof Reading</label>
                                </div>
                               
                                <br>
                                      

                             
                              
                              <div class="form-group row">
                                 <div class="col-12">
                                   <!--  <label class="left" style="float:left">Discipline</label>  -->
                                   
                                    <label class="form-label">Discipline</label>
                                   
                                   
                                    <select class="form-select" id="discipline" onchange="get_other()">
                                        <option value="" disabled selected hidden>Discipline</option>
                                       
                                         <?php

                                          foreach ($discipline->result_array() as $row)         

                                            { ?>

                                            <option  value="<?php echo $row['discipline_id']; ?>"><?php echo $row['discipline_name']; ?></option>

                                       <?php } ?>
                                    </select>
                                  </div>
                               
                              </div>
                               
                                <div class="form-group row" id="other">
                                  <div class="col-12">
                                    <input id="thatinput" type="text" class="form-control"  name="other" placeholder="Enter Discipline">
                                  </div>
                                </div>
                                
                               
                                
                               

                              
                               
 
                                <div class="form-group row">
                                   <div class="col-12">
                                   
                                    <label>Level</label>
                                    
                                   
                                    <select class="form-select" id="level" onchange="get_tols()">
                                        <option value="" disabled selected hidden>Academic Level</option>

                                      
                                      
                                         <?php

                                          foreach ($level->result_array() as $row)

         

                                            { ?>

                                            <option  value="<?php echo $row['level_id']; ?>"  <?php if($row['level_id']==1){ echo 'selected'; } ?>><?php echo $row['level_name']; ?></option>

                                       <?php } ?>
                                    </select>
                                  
                                   </div>
                                </div><!-- / sub-col -->

                                <div class="form-group row" id="sammy">
                                
                               
                                    <label>Deadline</label>
                                    
                                <div class="input-group mb-3">
                                   <div class="input-group-prepend">
                                      <span class="input-group-text" style="height: 48px;"><i class="fa fa-calendar"></i></span>
                                    </div>
                                   <input class="form-control readonly" placeholder="Launch Calendar" onchange="get_tols()"  type="text" id="deadline" name="order_deadline_id" required/>
                                  
                                  </div>
                               
                                </div><!-- / sub-col -->
                                 
                              

                              
                                <div class="form-group row" style="margin-top: -17px;">
                               
                                <div class="col-xl-6">
                                  <label>Pages</label>
                                 
                                 <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-primary btn-number"  disabled="disabled" data-type="minus" data-field="quant[1]">
                                            <span class="fa fa-minus"></span>
                                        </button>
                                    </span>
                                    <input type="text" name="quant[1]" onchange="get_words(),get_tols()" id="pages" class="form-control input-number" value="1" min="1"  max="100">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-primary btn-number"  data-type="plus" data-field="quant[1]">
                                            <span class="fa fa-plus"></span>
                                        </button>
                                    </span>
                                 </div>
                                </div>
                                <div class="col-xl-6">
                                 <label>Words</label>
                                  <input class="form-control" value="275 words" type="text" id="words" name="" readonly>
                                </div>

                               </div>
                               <br>
                                



                                <div class="form-group row" style="margin-top: -17px;">
                                  <div class="col-3" style="vertical-align: middle;">
                                  
                                    <label class="punda">Total (USD)</label>

                                  </div> 
                                  <div class="col-9">
                                    <input type="text" min="0" class="form-control" id="total" placeholder="Total (USD)">
                                    
                                   
                                  </div>

                                </div>
                                  
                                  
                               
                               </form>
                             

                                

                           

                            <div class="text-center">
                                

                                 <?php if($this->session->userdata('userData')){ ?>
                                     <a id="crew" href="<?php echo base_url('client/order');  ?>" class="btn btn-warning" target="_blank"><i class="fa fa-plus"></i><span> PLACE AN ORDER</span></a>

                                     <?php } else { ?>
                                  
                                    <a id="crew" class="btn btn-warning" href="<?php echo base_url('home/order_now');  ?>" target="_blank"><i class="fa fa-shopping-cart"></i> PLACE AN ORDER</a>
                                    <?php } ?>
                                            </div>
                             
                                            <!-- / text-center


                        </div><!-- / form-wrapper -->
                    </div>

                        
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container position-relative">
                  <div class="card" id="spanner">
                      <div class="card-body">
                        <h3 class="text-center">Let EssayLoop Experts Assist you get Top grades</h3>
                         <p class="lead">
                            College life can be difficult sometimes. Our company recognizes
                            this fact and that is why our team of experts is ready to assist you
                            in writing top quality essays and research papers within the provided
                            time. You got a difficult assignment with a very short deadline?
                            Worry no more. Our experts will write you a 100% original and quality
                            paper within the tight deadline. Before you get your paper, we will
                            have checked it for plagiarism using Turnitin, Plagscan, and copyscape.
                            Be rest assured that you will get value for your money. Order your paper
                            today and get a 20% discount on your first order.
                         </p>


                      </div>
                       <div class="row text-center g-4" style="padding-bottom: 20px;">
                          <div class="col-12">
                   
                    <a href="<?= base_url(); ?>order_now" class="btn btn-md btn-warning mb-0 mx-2 text-nowrap">Claim your 20% Discount</a>
                        <br>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <!-- End Home Banner -->
        <!-- Section -->
        <section class="section">
            <div class="container">
                <div class="row section-heading">
                    <div class="col-lg-12 col-md-12 col-xs-10">
                        <h3 class="display-4 m-0 text-center">We value our clients.</h3>
                    </div>
                  
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 my-3">
                        <div class="caed bg-warning-light px-3 py-4 px-lg-4 py-lg-5 rounded hover-top">
                            <div class="icon icon-lg icon-warning rounded-none">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="pt-4">
                                <h4>We Value the Needs and Feedback of our Clients</h4>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="caed bg-info-light px-3 py-4 px-lg-4 py-lg-5 rounded hover-top">
                            <div class="icon icon-lg icon-info rounded-none">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div class="pt-4">
                                <h4>We Accept Orders From All Over The Globe</h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="caed bg-success-light px-3 py-4 px-lg-4 py-lg-5 rounded hover-top">
                            <div class="icon icon-lg icon-success rounded-none">
                                <i class="fas fa-arrow-down"></i>
                            </div>
                            <div class="pt-4">
                                <h4>Most affordable Rates in the Market</h4>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
        <!-- Section -->
       
        <!-- End Section -->
        <!-- Section -->

        <!-- End Section -->
        <!-- Section -->
        <section class="section bg-gray-100">
            <div class="container">
               <h3 class="display-4 m-0 text-center">Our Advantages.</h3>
               <br>
                <div class="row justify-content-center">

                    <div class="col-lg-4 my-3">
                        <div class="card">
                            <div class="card-body text-center pt-lg-5 px-lg-5">
                                <div class="icon icon-lg rounded-none">
                                  <i class="fas fa-edit"></i>
                                </div>

                                <h4 class="mb-3 h3">Professional Writers</h4>
                                <p class="">At EssayLoop we train and hire experienced writers who can deliver unique and quality papers on short notice.</p>
                           </div>
                        </div>
                    </div>
                     <div class="col-lg-4 my-3">
                        <div class="card">
                            <div class="card-body text-center pt-lg-5 px-lg-5">
                                 <div class="icon icon-lg rounded-none">
                                  <i class="fas fa-undo"></i>
                                </div>
                                <h4 class="mb-3 h3">100% money-back guarantee</h4>
                                <p class="">Get back your full refund at any stage of writing, we will process your refund within 48 Hours</p>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-lg-4 my-3">
                        <div class="card">
                            <div class="card-body text-center pt-lg-5 px-lg-5">
                                 <div class="icon icon-lg  rounded-none">
                                  <i class="fas fa-list"></i>
                                </div>
                                <h4 class="mb-3 h3">Different Paper Formats</h4>
                                <p class="">Our writers are well trained to handle different paper formats such as MLA, APA, Chicago etc .</p>
                            </div>
                        </div>
                    </div>
                   
                     <div class="col-lg-4 my-3">
                        <div class="card">
                            <div class="card-body text-center pt-lg-5 px-lg-5">
                                 <div class="icon icon-lg rounded-none">
                                  <i class="fas fa-search"></i>
                                </div>
                                <h4 class="mb-3 h3">Plagiarism-free papers</h4>
                                <p class="">All papers are passed through our plagiarism checking tools to ensure originality and uniqueness.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card">
                            <div class="card-body text-center pt-lg-5 px-lg-5">
                                 <div class="icon icon-lg  rounded-none">
                                  <i class="fas fa-headphones fa-5x"></i>
                                </div>
                                <h4 class="mb-3 h3">24/7 Support</h4>
                                <p class="">The support team at EssayLoop is available 24/7 via email and chat to attend to your queries.</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 my-3">
                        <div class="card">
                            <div class="card-body text-center pt-lg-5 px-lg-5">
                                 <div class="icon icon-lg  rounded-none">
                                  <i class="fas fa-clock"></i>
                                </div>
                                <h4 class="mb-3 h3">Fast Delivery</h4>
                                <p class="">At EssayLoop we strive to deliver quality papers before the set deadlines.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'banner.php'; ?>

        <section class="section">
            <div class="container">
                <div class="row justify-content-center section-heading">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h3 class="display-6 mb-3">How It Works.</h3>
                       
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-sm-6 feature-box-1">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon border border-2 border-primary icon-lg rounded-circle mb-3">
                                    <span class="h4 m-0 lh-1 text-primary">01</span>
                                </div>
                                <h5>Order</h5>
                                <p class="m-0">We've designed our order form with good user experience in mind. Placing your order is now simple and seamless.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 feature-box-1">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon border border-2 border-primary icon-lg rounded-circle mb-3">
                                    <span class="h4 m-0 lh-1 text-primary">02</span>
                                </div>
                                <h5>Pay</h5>
                                <p class="m-0">Checkout with PayPal. PayPal facilitates secure and seamless payments between parties such as merchants and clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 feature-box-1">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon border border-2 border-primary icon-lg rounded-circle mb-3">
                                    <span class="h4 m-0 lh-1 text-primary">03</span>
                                </div>
                                <h5>Track Your Paper</h5>
                                <p class="m-0">Get notified of the progress of your paper, your paper will be delivered to you after rigorous quality checks.</p>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="row text-center g-4">
                  <div class="col-12">
                    <br> <br>
                    <a href="<?= base_url(); ?>order_now" class="btn btn-lg btn-warning mb-0 mx-2 text-nowrap">Get Started</a>
                  </div>
                </div>
            </div>
        </section>

       
        <!-- End Section -->
        <!-- Section -->
      
        <!-- End Section -->
        <!-- Section -->
        <section class="section bg-gray-100">
            <div class="container">
                <div class="row section-heading">
                    <div class="col-lg-12 pe-lg-10">
                        <h3 class="display-5 m-0 text-center">What our customers say about our services?</h3>
                    </div>
                   
                </div>
                <div class="row testimonial-carousel">
                    <div class="col-lg-4">
                        <div class="card hover-top shadow-sm-hover">
                            <div class="card-body">
                                <div class="d-flex pb-4 align-items-center">
                                   
                                    <div class="col ps-3">

                                        <div class="icon icon-lg icon-primary rounded-circle">
                                            <i class="fas fa-quote-left"></i>
                                        </div>

                                        
                                       
                                    </div>
                                </div>
                                <p class="fs-5">High quality papers delivered on time. Swift communication. Highly recommend.</p>
                                <h6 class="m-0"> ~ Peter</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card hover-top shadow-sm-hover">
                            <div class="card-body">
                                <div class="d-flex pb-4 align-items-center">
                                   
                                    <div class="col ps-3">

                                        <div class="icon icon-lg icon-primary rounded-circle">
                                            <i class="fas fa-quote-left"></i>
                                        </div>

                                        
                                       
                                    </div>
                                </div>
                                <p class="fs-5">Great Service, Experienced Writers, Always on time with their deliveries.</p>
                                <h6 class="m-0"> ~ Ann</h6>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4">
                        <div class="card hover-top shadow-sm-hover">
                            <div class="card-body">
                                <div class="d-flex pb-4 align-items-center">
                                   
                                    <div class="col ps-3">

                                        <div class="icon icon-lg icon-primary rounded-circle">
                                            <i class="fas fa-quote-left"></i>
                                        </div>

                                        
                                       
                                    </div>
                                </div>
                                <p class="fs-5">Friendly support, niche writers, affordable rates. Definitely a 5 star for me.</p>
                                <h6 class="m-0"> ~ Daniel</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card hover-top shadow-sm-hover">
                            <div class="card-body">
                                <div class="d-flex pb-4 align-items-center">
                                   
                                    <div class="col ps-3">

                                        <div class="icon icon-lg icon-primary rounded-circle">
                                            <i class="fas fa-quote-left"></i>
                                        </div>

                                        
                                       
                                    </div>
                                </div>
                                <p class="fs-5">Pretty easy to set up, excellent communication so far, highly recommend</p>
                                <h6 class="m-0"> ~ Karen</h6>
                            </div>
                        </div>
                    </div>
                      <div class="col-lg-4">
                        <div class="card hover-top shadow-sm-hover">
                            <div class="card-body">
                                <div class="d-flex pb-4 align-items-center">
                                   
                                    <div class="col ps-3">

                                        <div class="icon icon-lg icon-primary rounded-circle">
                                            <i class="fas fa-quote-left"></i>
                                        </div>

                                        
                                       
                                    </div>
                                </div>
                                <p class="fs-5">This paper was very well written and completed well above my expectations.</p>
                                <h6 class="m-0"> ~ Allen</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
        <!-- Section -->
        <section class="section counter">
            <div class="container">
                <div class="row ">
                    <div class="col-sm-6 col-lg-3 text-center py-3">
                        <div class="">
                            <h6 class="count display-5 m-0 text-warning" data-to="455" data-speed="455">455</h6>
                            <p class="lead font-weight-normal m-0">Experienced Writers</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center py-3">
                        <div class="">
                            <h6 class="count display-5 m-0 text-info" data-to="9150" data-speed="9150">9150</h6>
                            <p class="lead font-weight-normal m-0">Completed Orders</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center py-3">
                        <div class="">
                            <h6 class="count display-5 m-0 text-success" data-to="8000" data-speed="8000">8000</h6>
                            <p class="lead font-weight-normal m-0">5 Star Reviews</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center py-3">
                        <div class="">
                            <h6 class="count display-5 m-0 text-danger" data-to="1030" data-speed="1030">1030</h6>
                            <p class="lead font-weight-normal m-0">Happy Clients</p>
                        </div>
                    </div>
                </div>
                 <div class="row text-center g-4">
                  <div class="col-12">
                    <br> <br>
                    <a href="<?= base_url(); ?>order_now" class="btn btn-lg btn-warning mb-0 mx-2 text-nowrap">Get Started</a>
                  </div>
                </div>
            </div>
        </section>

        <div class="section bg-gray-100">
            <div class="container">
               <h3 class="display-5 m-0 text-center">Disciplines</h3>
                <br>
                <p class="lead">We have a team of talented writers who have masters and PhD degrees. Our onboarding process is strict and we only ensure we have best writers to help students do their homework. Our writers are specialized in different subjects areas and have good mastery of the content. Below are some of the disciplines covered in our tutoring and course work services. </p>
                <br>
                <div class="row">
                  <?php 
           // echo $h->num_rows();
                  foreach ($discipline->result_array() as $row) { 

                    if($row['discipline_id']!=69) {
                    

                    ?>        
                    <div class="col-lg-4">
                        <ul class="list-type-02">

                            <li><?= $row['discipline_name']; ?></li>
                           
                        </ul>
                    </div>

                    <?php } }?>        

                </div>
            </div>
        </div>

       


        <!-- End Section -->
        <!-- Section -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 my-3">
                       <div class="row">
                        <div class="col-7">

                        <img style="width: 90%;" src="<?= base_url('assets/images/securepaypal.webp') ?>" class="img-fluid">

                        </div>
                        <div class="col-5">

                        <img style="width: 80%;" src="<?= base_url('assets/images/ssl-encryption.webp') ?>" class="img-fluid">

                         </div>

                       </div>


                    </div>
                    <div class="col-lg-5 ps-xl-9 my-3">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <h5 class="h4 text-white">Get In Touch!</h5>
                              
                                <div class="divider-light opacity-2 mb-4"></div>
                                <div class="d-flex align-items-center py-2 py-lg-3">
                                    <div class="icon icon-light-light rounded-circle">
                                        <i class="fab fa-whatsapp"></i>
                                    </div>
                                    <div class="col ps-3">
                                        <h6 class="h4 m-0 text-white"> +1 (309) 992-1394 </h6>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center py-2 py-lg-3">
                                    <div class="icon icon-light-light rounded-circle">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="col ps-3">
                                        <h6 class="h4 m-0 text-white">support@essayloop.com</h6>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <div class="py-6 bg-gray-100">
            <div class="container text-center position-relative">
                <p class="m-0 h5">We respect your right to privacy read our privacy policy as well as our terms below </p>
                <br>
                <a class="btn btn-primary btn-sm ms-3" href="<?= base_url('privacy'); ?>">Privacy</a>
                <a class="btn btn-primary btn-sm ms-3" href="<?= base_url('terms'); ?>">Terms</a> 
 
            </div>
        </div>
        <!-- End Section -->
    </main>
    <!-- End Main -->
    <!-- Footer -->
   