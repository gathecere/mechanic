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
        <!-- End Home Banner -->
        <!-- Section -->
        <section class="section bg-gray-100">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12">
                       
                        	<div class="row pb-6">
                        	 <?php 
           // echo $h->num_rows();
                                 foreach($h->result() as $row){ ?>

			                    <div class="col-lg-9 my-3">
			                        <div class="card hover-top shadow-sm-hover">
			                            <div class="card-body position-relative">
			                                <h4><?php
									          echo  $row->post_title;
									          ?></h4>
			                                <p class="lead m-0"> <?php
									          echo  $row->post_content;
									          ?> </p>
			                                <div class="d-flex pt-4 align-items-center">

                                                   
			                                    
			                                        <a  href="<?php echo base_url('order_now'); ?>" class="btn btn-sm btn-primary mb-0 mx-2 text-nowrap">Order A Similar Paper</a>
			                                    
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                    <div class="col-lg-3 my-3">
                                  <?php include 'sidebar.php'; ?>
			                    </div>
			                   <?php } ?>
			                   
			                   
			                </div>

			                


                
                        </div>
                      
                    
                    
                </div>
            </div>
        </section>
        
        <?php include 'banner.php' ?>
        <!-- End Section -->
        <!-- Section -->
       
        <!-- End Section -->
        <!-- Section -->
        <!-- End Section -->
        <!-- Section -->
        <!-- End Section -->
    </main>