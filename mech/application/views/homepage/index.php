<main>
   <!-- Home Banner -->
   <section class="effect-section parallax theme-bg" id="here">
      <div class="mask"></div>
      <div class="effect-5 opacity-1">
         <img src="static/img/effect/style-1.svg" title="" alt="" class="svg_img" style="color: #152c5b;">
      </div>
      <div class="effect-6 opacity-1">
         <img src="static/img/effect/style-2.svg" title="" alt="" class="svg_img" style="color: #152c5b;">
      </div>
      <div class="svg-bottom" style="color: #f2f3fa;">
         <img src="static/img/effect/divider-2.svg" title="" alt="" class="svg_img gray-color">
      </div>



      <div class="container position-relative">
                  <div class="table-responsive">

         <div class="row justify-content-center align-items-center min-vh-100 oly">
            <div class="col-lg-7 my-3">
               <h6 class="mb-3 text-white">A+ Custom Essays</h6>
               <h1 class="display-4 mb-3 text-white"><span class="font-w-300">Custom Paper Writing Service</h1>
               <!--<p class="lead text-white-50">Moxom is a HTML5 template based on Sass and Bootstrap 4 with modern and creative multipurpose design you can use it as a startups.</p>-->
               <div class="pt-3">
                  <a class="btn btn-outline-light me-2" href="<?php echo base_url('pricing'); ?>">
                  <span class="btn--text">Pricing</span>
                  </a>
                  <a class="btn btn-warning" href="<?php echo base_url('order_now'); ?>">
                  <span class="btn--text">Order Now</span>
                  </a>
               </div>
            </div>
            <div class="col-lg-5 my-3">
                   <div class="custom-form">
                        <form id="loginform" method="post" action="<?= base_url('order_now'); ?>">


                                   <h5 class="text-center">Calculator</h5>
                                   <br>
                              
                            
                             
                                          <input style="display: none;"  type="radio" onchange="get_tols()" onclick="get_tols()" class="stv-radio-button"  name="service" value="1" id="button1" checked />
                                         
                                      

                             
                              
                              <div class="form-group col-lg-12">
                                 
                                   <!--  <label class="left" style="float:left">Discipline</label>  -->
                                   
                                    
                                    <select class="form-control" id="discipline" onchange="get_other()" name="discipline">
                                        <option value="" disabled selected hidden>Discipline</option>
                                       
                                         <?php

                                          foreach ($discipline->result_array() as $row)         

                                            { ?>

                                            <option  value="<?php echo $row['discipline_id']; ?>"><?php echo $row['discipline_name']; ?></option>

                                       <?php } ?>
                                    </select>
                                 
                               
                              </div>
                               
                                <div class="form-group col-lg-12" id="other">
                                    <input id="thatinput" type="text" class="form-control"  name="other" placeholder="Enter Discipline">
                                </div>
                                
                               
                                
                               

                              
                               
 
                                <div class="form-group col-lg-12">
                                  
                                  
                                   
                                    <select class="form-control" id="level" onchange="get_tols()" name="level">
                                        <option value="" disabled selected hidden>Academic Level</option>

                                      
                                      
                                         <?php

                                          foreach ($level->result_array() as $row)

         

                                            { ?>

                                            <option  value="<?php echo $row['level_id']; ?>"  <?php if($row['level_id']==1){ echo 'selected'; } ?>><?php echo $row['level_name']; ?></option>

                                       <?php } ?>
                                    </select>
                                  
                                 
                                </div><!-- / sub-col -->

                                <div class="form-group col-lg-12" id="sammy">
                                 
                                <div class="input-group mb-3">
                                   <div class="input-group-prepend">
                                      <span class="input-group-text"  style="height: 48px;"><i class="fa fa-calendar"></i></span>
                                    </div>
                                   <input class="form-control readonly" placeholder="Deadline" onchange="get_tols()"  type="text" id="deadline" name="order_deadline_id" required/>
                                  
                                  </div>
                               

                                

                                 
                                </div><!-- / sub-col -->
                                 
                              

                              
                                <div class="form-group row">
                                   
                                
                                <div class="col-lg-7">
                                 
                                 <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number"  disabled="disabled" data-type="minus" data-field="quant[1]">
                                            <span class="fa fa-minus"></span>
                                        </button>
                                    </span>
                                    <input type="text" style="text-align: center;" name="quant[1]" onchange="get_words(),get_tols()" id="pages" class="form-control input-number" value="1" min="1"  max="100">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number"  data-type="plus" data-field="quant[1]">
                                            <span class="fa fa-plus"></span>
                                        </button>
                                    </span>
                                 </div>
                                </div>
                                <div class="col-lg-5">
                                  <input style="border: none; background: transparent;" class="form-control" value="275 words" type="text" id="words" name="" readonly>
                                </div>

                                 

                               </div>
                                



                                <div class="form-group col-lg-12">
                                
                                 
                                    <span class="prefix">$</span>
                                  
                                    <input type="text" style="background: transparent;" min="0"  class="form-control" id="total">
                                    
                                   
                                 
                                 


                                </div>
                                <div class="form-group col-lg-12">
                                 
                                  

                                 <button id="crew" type="submit" class="btn btn-warning btn-md white"><i class="fa fa-shopping-cart"></i> Place your order</button>

                                    

                                 </div>
                                  
                                  
                               
                               </form>
                              </div>
            </div>
          </div>
         </div>
      </div>
   </section>

   <section class="py-7 bg-gray-100">
            <div class="container">
               <h2 class="h1 font-w-700 text-center">
                  We value our clients
               </h2>
                <div class="row">

                    <div class="col-lg-4 my-3">
                        <div class="card card-body theme-hover-bg hover-top text-center h-100">
                            <a class="stretched-link" href="#"></a>
                            <div class="only-icon only-icon-lg mb-3 text-primary mx-auto">
                                <i class="ti-angle-down"></i>
                            </div>
                            <h6 class="m-0 lead font-w-600">Affordable Pricing</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card card-body theme-hover-bg hover-top text-center h-100">
                            <a class="stretched-link" href="#"></a>
                            <div class="only-icon only-icon-lg mb-3 text-primary mx-auto">
                                <i class="ti-headphone"></i>
                            </div>
                            <h6 class="m-0 lead font-w-600">Listen to our clients</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card card-body theme-hover-bg hover-top text-center h-100">
                            <a class="stretched-link" href="#"></a>
                            <div class="only-icon only-icon-lg mb-3 text-primary mx-auto">
                                <i class="ti-money"></i>
                            </div>
                            <h6 class="m-0 lead font-w-600">Discounts & Coupons</h6>
                        </div>
                    </div>
                   
                </div>
                <br>
                <div class="container text-center">

                    <a class="btn btn-primary" href="<?= base_url('reviews'); ?>">Read our customer reviews</a>

                </div>
            </div>
        </section>


        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-3">
                        <div class="card overflow-hidden">
                            <div class="card-img-overlay d-flex align-items-center justify-content-center z-index-1">
                               
                            </div>
                            <img src="<?= base_url('static/img/success.webp'); ?>" title="" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 my-3">
                        <div class="ps-lg-8">
                            
                            <h2 class="h1 mb-3">Let EssayLoop Experts Assist you get Top grades</h2>
                            <p>College life can be difficult sometimes. Our company recognizes this fact and that is why our team of experts is ready to assist you in writing top quality essays and research papers within the provided time. You got a difficult assignment with a very short deadline? Worry no more. Our experts will write you a 100% original and quality paper within the tight deadline. Before you get your paper, we will have checked it for plagiarism using Turnitin, Plagscan, and copyscape. Be rest assured that you will get value for your money. Order your paper today and get a 20% discount on your first order.</p>
                            <div class="pt-2">
                                <a class="btn btn-primary" href="<?= base_url('order_now'); ?>">
                                    <span class="btn--text">Place your order</span>
                                    <span class="arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   <!-- End Home Banner -->
   <!-- Section -->
   
   <!-- End Section -->
   <!-- Section -->
   


   <!-- End Section -->
   <!-- Section -->
   <section class="section bg-dark">
      <div class="container">
         <div class="row justify-content-center section-heading">
            <div class="col-lg-8 col-xl-7 text-center">
               <h3 class="h1 text-white">Our Advantages.</h3>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-6 col-lg-4 my-3">
               <div class="card hover-top">
                  <div class="card-body text-center py-4">
                     <div class="icon icon-xl bg-primary rounded-circle text-white mb-3">

                        <img src="<?= base_url('static/img/blogger.png'); ?>" title="" alt="essay writers">

                     </div>
                     <h6>Professional Writers</h6>
                     <p class="m-0px left">At EssayLoop we train and hire experienced writers who can deliver unique and quality papers on short notice.</p>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-4 my-3">
               <div class="card hover-top">
                  <div class="card-body text-center py-4">
                     <div class="icon icon-xl bg-primary rounded-circle text-white mb-3">
                        <img src="<?= base_url('static/img/test.png'); ?>" title="" alt="essay format">
                     </div>
                     <h6>Different Paper Formats</h6>
                     <p class="m-0px left">Our writers are well trained to handle different paper formats such as MLA, APA, Chicago etc .</p>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-4 my-3">
               <div class="card hover-top">
                  <div class="card-body text-center py-4">
                     <div class="icon icon-xl bg-primary rounded-circle text-white mb-3">
                        <img src="<?= base_url('static/img/money-back-guarantee.png'); ?>" title="" alt="money back guarantee">
                     </div>
                     <h6>100% money-back guarantee</h6>
                     <p class="m-0px left">Get back your full refund at any stage of writing, we will process your refund within 48 Hours</p>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-4 my-3">
               <div class="card hover-top">
                  <div class="card-body text-center py-4">
                     <div class="icon icon-xl bg-primary rounded-circle text-white mb-3">
                          <img src="<?= base_url('static/img/technical-support.png'); ?>" title="" alt="24/7 Support">

                     </div>
                     <h6>24/7 Support</h6>
                     <p class="m-0px left">The support team at EssayLoop is available 24/7 via email and chat to attend to your queries.</p>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-4 my-3">
               <div class="card hover-top">
                  <div class="card-body text-center py-4">
                     <div class="icon icon-xl bg-primary rounded-circle text-white mb-3">

                        <img src="<?= base_url('static/img/fast-delivery.png'); ?>" title="" alt="Fast Delivery">

                     </div>
                     <h6>Fast Delivery</h6>
                     <p class="m-0px left">At EssayLoop we strive to deliver quality papers way before the set deadlines whilst maintaining quality</p>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-4 my-3">
               <div class="card hover-top">
                  <div class="card-body text-center py-4">
                     <div class="icon icon-xl bg-primary rounded-circle text-white mb-3">

                        <img src="<?= base_url('static/img/seo.png'); ?>" title="" alt="Plagiarism free">

                     </div>
                     <h6>Plagiarism-free papers</h6>
                     <p class="m-0px left">All papers are passed through our plagiarism checking tools to ensure originality and uniqueness.</p>
                  </div>
               </div>
            </div>
         </div>
         <br>
          <div class="container text-center">

                    <a class="btn btn-warning" href="<?= base_url('order_now'); ?>">Order with a 20% discount</a>

                </div>
      </div>
   </section>

    <section class="counter section">
            <div class="container">
                <div class="row">
                    <div class=" col-6 col-lg-3 col-md-6 my-3">
                        <div class="border bg-white line-hover p-4 rounded text-center">
                            <div class="only-icon only-icon-lg d-inline-block mb-3">
                                <i class="ti-pencil-alt"></i>
                            </div>
                            <h6 class="count h3 m-5px-b" data-to="1000" data-speed="1000">1000</h6>
                            <span>Experienced Writers</span>
                        </div>
                    </div>
                    <div class=" col-6 col-lg-3 col-md-6 my-3">
                        <div class="border bg-white line-hover p-4 rounded text-center">
                            <div class="only-icon only-icon-lg d-inline-block mb-3">
                                <i class="ti-layers-alt"></i>
                            </div>
                            <h6 class="count h3 m-5px-b" data-to="15000" data-speed="15000">15000</h6>
                            <span>Completed Orders</span>
                        </div>
                    </div>
                    <div class=" col-6 col-lg-3 col-md-6 my-3">
                        <div class="border bg-white line-hover p-4 rounded text-center">
                            <div class="only-icon only-icon-lg d-inline-block mb-3">
                                <i class="ti-star"></i>
                            </div>
                            <h6 class="count h3 m-5px-b" data-to="14500" data-speed="14500">14500</h6>
                            <span>5 Star Reviews</span>
                        </div>
                    </div>
                    <div class=" col-6 col-lg-3 col-md-6 my-3">
                        <div class="border bg-white line-hover p-4 rounded text-center">
                            <div class="only-icon only-icon-lg d-inline-block mb-3">
                                <i class="ti-user"></i>
                            </div>
                            <h6 class="count h3 m-5px-b" data-to="1500" data-speed="1500">1500</h6>
                            <span>Happy Clients</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   <!-- End Section -->
   <!-- Section -->
   <section class="section bg-dark" id="momo">
      <div class="container">
         <div class="row align-items-center justify-content-around">
            <div class="col-lg-6 my-3">
               <img src="static/img/ai-16.png" title="" alt="">
            </div>
            <div class="col-lg-6 col-xl-5 my-3">
               <h3 class="h2 mb-4 momo" style="color: #F7F7F7;">Stay focused on your Studies. Let us handle Your Assignment.</h3>
               <p class="lead">EssayLoop.com is an academic writing service that was started by unemployed professors to help students achieve their academic goals. We have a team of highly qualified writers in any field that is dedicated to helping students with their custom essays.</p>
               <div class="row counter pt-3">
                  <div class="col-4 col-lg-3  border-end">
                     <div class="count-data">
                        <h6 class="count h4 text-primary after-k mb-2" data-to="2" data-speed="2">2</h6>
                        <span class="font-w-400">Experienced Writers</span>
                     </div>
                  </div>
                  <div class="col-4 col-lg-3  border-end">
                     <div class="count-data">
                        <h6 class="count h4 text-primary after-k mb-2" data-to="15" data-speed="15">15</h6>
                        <span class="font-w-400">Completed Orders</span>
                     </div>
                  </div>
                  <div class="col-4 col-lg-3">
                     <div class="count-data">
                        <h6 class="count h4 text-primary after-p mb-2" data-to="99" data-speed="99">99</h6>
                        <span class="font-w-400">Happy Clients</span>
                     </div>
                  </div>
               </div>
               <br>
               <div class="pt-2">
                  <a class="btn btn-warning" href="<?php echo base_url('order_now'); ?>">
                  <span class="btn--text">Order Now</span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- End Section -->

   <section class="section bg-gray-100">
            <div class="container">
                <div class="row justify-content-center section-heading">
                    <div class="col-lg-8 col-xl-7 text-center">
                        <h6 class="text-danger">Testimonials</h6>
                        <h3 class="h1">Customers Feedback</h3>
                       
                    </div>
                </div>

                  <div style="text-align: center;">

                    <button class="pp2 btn btn-success btn-sm"><<</button>
                      &nbsp; &nbsp; &nbsp; 
                    <button class="nn2 btn btn-success btn-sm">>></button>

                  </div>

                  <br>  

               
                  <div class="car">

                  
                    <div class="card card-body shadow mb-4 rounded-2 ak">
                        <p class="m-0">High quality papers delivered on time. Swift communication. Highly recommend.</p>
                        <div class="media mt-4">
                            <div class="avatar rounded-circle overflow-hidden">
                                <img src="static/img/user.png" alt="" title="">
                            </div>
                            <div class="media-body ps-3 align-self-center">
                                <h6 class="m-0">Peter</h6>
                               
                            </div>
                        </div>
                    </div>
                 
                  <div class="card card-body shadow mb-4 rounded-2 ak">
                        <p class="m-0">Great Service, Experienced Writers, Always on time with their deliveries. A+ service</p>
                        <div class="media mt-4">
                            <div class="avatar rounded-circle overflow-hidden">
                                <img src="static/img/user.png" alt="" title="">
                            </div>
                            <div class="media-body ps-3 align-self-center">
                                <h6 class="m-0">Anne</h6>
                               
                            </div>
                        </div>
                    </div>
                   
                  <div class="card card-body shadow  mb-4 rounded-2">
                        <p class="m-0">Friendly support, niche writers, unlimited revisions, affordable rates. Definitely a 5 star for me</p>
                        <div class="media mt-4">
                            <div class="avatar rounded-circle overflow-hidden ">
                                <img src="static/img/user.png" alt="" title="">

                            </div>
                            <div class="media-body ps-3 align-self-center">
                                <h6 class="m-0">Dan</h6>
                            </div>
                        </div>
                    </div>

                    <div class="card card-body shadow mb-4 rounded-2">
                        <p class="m-0">Pretty easy to set up, seamless payments, excellent communication so far, highly recommend</p>
                        <div class="media mt-4">
                            <div class="avatar rounded-circle overflow-hidden">
                                    <img src="static/img/user.png" alt="" title="">

                            </div>
                            <div class="media-body ps-3 align-self-center">
                                <h6 class="m-0">Karen</h6>
                            </div>
                        </div>
                    </div>

                   <div class="card card-body shadow mb-4 rounded-2">
                        <p class="m-0">This paper was very well written and completed well above my expectations.</p>
                        <div class="media mt-4">
                            <div class="avatar rounded-circle overflow-hidden">
                                  <img src="static/img/user.png" alt="" title="">

                            </div>
                            <div class="media-body ps-3 align-self-center">
                                <h6 class="m-0">Allen</h6>
                            </div>
                        </div>
                    
                   </div>

                  </div>
                </div>
                 <br>
                 <div class="container text-center">

                    <a class="btn btn-warning" href="<?= base_url('reviews'); ?>">Read More Reviews</a>

                </div>
               
        </section>


   <!-- Section -->
   
   <!-- End Section -->
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
      <?php include 'banner.php'; ?>

</main>
<!-- End Main -->
