<!-- Page Title -->
<main>
<!-- Page Title -->
<section class="section parallax effect-section" style="background-image: url(static/img/home-banner-1.webp);">
   <div class="mask bg-dark opacity-8"></div>
   <div class="container position-relative">
      <div class="row align-items-center justify-content-center">
         <div class="col-lg-8 text-center">
            <h6 class="text-white-50 font-w-500">Seamless order placement and tracking</h6>
            <h1 class="display-4 text-white m-0">How It Works</h1>
         </div>
      </div>
   </div>
</section>
<section id="feature" class="section">
   <div class="container">
      <div class="row section-heading justify-content-center text-center wow fadeInUp" data-wow-duration=".4s" data-wow-delay="0.1s">
         <div class="col-lg-8 col-xl-6">
            <h3 class="h1 bg-">How It Works</h3>
            <div class="lead">Placing an order here at EssayLoop.com is simple and straightforward. Follow the steps below if you want to buy a custom paper on this platform. Note that if you are a new client, you need to login into your client’s account and follow the steps below:</div>
         </div>
      </div>
      <div class="container">
         <div class="tab-style-3 mt-3">
            <ul class="nav nav-fill nav-tabs shadow-lg wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.2s; animation-name: fadeInUp;">
               <li class="nav-item">
                  <a href="#tab3_sec1" data-bs-toggle="tab" class="active">
                     <div class="only-icon only-icon-lg mb-3"><i class="fa fa-plus"></i></div>
                     <span class="w-100 d-block">Order</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="#tab3_sec2" data-bs-toggle="tab">
                     <div class="only-icon only-icon-lg mb-2"><i class="fa fa-credit-card"></i></div>
                     <span class="w-100 d-block">Pay</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="#tab3_sec3" data-bs-toggle="tab">
                     <div class="only-icon only-icon-lg mb-3"><i class="fa fa-location-arrow"></i></div>
                     <span class="w-100 d-block">Track Your Paper</span>
                  </a>
               </li>
            </ul>
            <div class="tab-content wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.25s; animation-name: fadeInUp;">
               <!-- start tab content -->
               <div id="tab3_sec1" class="tab-pane fade in active show">
                  <div class="row align-items-center pt-3 pt-lg-5">
                     <div class="col-lg-6 offset-lg-3 ps-lg-7 ps-xl-10 my-3">
                        <h2 class="h1 mb-3">Fill in the order form</h2>
                        <p class="mb-2 lead">We've designed our order form with good user experience in mind. Placing your order is now simple and seamless. 
                        </p>
                        <!-- row -->
                        <div class="btn-bar pt-3">
                           <a class="btn btn-primary" href="<?= base_url('home/order_now') ?>">Order Now</a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end tab content -->
               <!-- start tab content -->
               <div id="tab3_sec2" class="tab-pane fade in">
                  <div class="row align-items-center pt-3 pt-lg-5">
                     <div class="col-lg-6 offset-lg-3 ps-lg-7 ps-xl-10 my-3">
                        <h2 class="h1 mb-4">
                           Submit payment<!--<u class="text-primary">Digital Marketing</u>-->
                        </h2>
                        <p class="mb-2 lead">Checkout with PayPal. PayPal facilitates secure and seamless payments between parties such as merchants and clients 
                        </p>
                        <div class="btn-bar pt-3">
                           <a class="btn btn-primary" href="<?php echo base_url('home/order_now'); ?>">Order Now</a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end tab content -->
               <!-- start tab content -->
               <div id="tab3_sec3" class="tab-pane fade in">
                  <div class="row align-items-center pt-3 pt-lg-5">
                     <div class="col-lg-6 offset-lg-3 ps-lg-7 ps-xl-10 my-3">
                        <h2 class="h1 mb-4">Track progress</h2>
                        <p class="mb-2 lead">Get notified of the progress of your paper, your paper will be delivered to you after rigorous quality checks.
                        </p>
                        <div class="btn-bar pt-3">
                           <a class="btn btn-primary" href="<?php echo base_url('home/order_now'); ?>">Order Now</a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end tab content -->
               <!-- end tab content -->
            </div>
         </div>
      </div>
   </div>
</section>
<?php include 'banner.php' ?>
<!-- Section -->

