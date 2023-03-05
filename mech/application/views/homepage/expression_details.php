 <main>

 <?php 
           // echo $h->num_rows();
                                       foreach($h->result() as $row){ ?>



<section class="parallax page-heading" style="background-image: url(./../static/img/home-banner-1.webp);">
      <div class="mask bg-dark opacity-8"></div>
      <div class="container position-relative">
         <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 text-center">
               
               <h1 class="display-4 text-white m-0"><?php
                                     echo  $row->title;
                                     ?></h1>
            </div>
         </div>
      </div>
   </section>




        <!-- BLOG
        ================================================== -->
       <section id="features" class="bg-light padding-top-bottom ok">
            <div class="container">

                <!-- Blog -->
                <div class="row">

                  
                    <div class="col-lg-8">
                        <div class="card border-0 rounded-lg shadow-light h-100">
                           
                            <div class="card-body p-5">
                             
                                <div class="border-light mb-4 pb-4">
                                   <p>
                                     <?php
                                           echo $row->content;
                                      ?>

                                   </p>
                                    
                                  
                                </div>

                                <a href="<?php echo base_url('order_now');  ?>" class="btn btn-sm d-none d-lg-inline-block btn-warning ml-auto">Order a similar paper</a>
                               
                            </div>

                        </div>
                        

                    </div>
                    <div class="col-lg-4">
                        
                    <?php include 'sidebar.php'; ?>

                

                   
                   

                </div>

                 <?php } ?>
                <!-- End Blog -->

               
               </div>
            </div>
        </section>

</main>

        <!-- NEWSLETTER
        ================================================== -->
       