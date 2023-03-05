<div class="business-banner">                 
        <div class="hvrbox">
            <img src="<?php echo base_url('loop/images/essayloopcollege.webp') ?>" alt="student essays" class="hvrbox-layer_bottom">
            <div class="hvrbox-layer_top">
                <div class="container">
                    <div class="overlay-text text-left">            
                        <h3>Sample Papers</h3>
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sample Papers</li>
                          </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>                       
    </div>      
     
    <div class="bussiness-about-company blog-list-layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="padding-top-large"></div>

         <?php
               foreach($samples->result() as $row) {  ?>
                    
          <div class="single-bolg hover01 brainer party">
            <div class="blog-content">
              <a href="#"><?php echo $row->sample_title; ?></a>
                          
                            <p><?php echo $row->sample_paragraph; ?></p>                        
            </div>
                        <a href="<?php echo base_url() ?>home/paper_details_samples/<?php echo $row->sample_slug; ?>" class="bussiness-btn-larg">Read More</a>
          </div>

        <?php } ?>
        
         

                  
                    
                   

 
                </div>
                
                
            </div>
        </div>
    </div>  
      
   <div class="padding-top-large"></div>
      
    <div class="business-cta-2x">
    <div class="business-cta-2-content">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="business-cta-left-2">
              <h2>Get quality writing services </h2>
            </div>
          </div>  
          <div class="col-md-4">
            <div class="business-cta-right-2">
              <a href="<?php echo base_url('home/order_now') ?>" class=" btn bussiness-btn-larg">Place order <i class="fa fa-angle-right"></i> </a>
            </div>
          </div>  
        </div>  
      </div>  
    </div>  
  </div>
      
