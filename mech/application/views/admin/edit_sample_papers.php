<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Edit Sample</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit Sample</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Edit Sample</h6>
            <hr/>
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
                                        <h4 class="header-title">Update Sample</h4> <br>
                                       
                                        <div class="row">
                                            <div class="col-xl-9">
                                             <?php if(!empty($error)){ ?>

                                                 <div class="alert alert-warning">
                                                   <?php echo $error; ?>
                                                  </div>

                                               <?php     } ?>
                                             <form action="<?php echo base_url('admin/edit_sample_papers_process') ?>" method="post">

             <div class="box-body">
                                 
                                

                                                    
                            <!-- Tab panes -->

                                 
                                <?php

                                     foreach ($h->result() as $row) {

                                      //print_r($level->result_array()); die();
                                       # code...
                                      $levely=$row->sample_level;

                                    //  echo $level; die();


                                 ?>  

                             
                                 <input type="hidden" name="sample_id"  value="<?= $row->sample_id;?>">

                                  <div class="form-group mb-3">
                                   
                                      
                                        
                                        <label for="inputEmail" class="col-xl-8 form-control-label">Title</label>
                                        <div class="col-xl-10">
                                            <input class="form-control" value="<?= $row->sample_title;?>" name="title" id="title"  type="text" required>
                                        </div>
                                        
                                        
                                  </div>
                                    <div class="form-group mar-btm mb-3">
                                   
                                      
                                        
                                        <label for="inputEmail" class="col-xl-8 form-control-label">Brief Description(150-200 Characters)</label>
                                        <div class="col-xl-10">
                                           <textarea class="form-control"  rows="7" name="sample_description"><?php if(isset($row->sample_description)){ echo $row->sample_description; } ?></textarea>
                                        </div>
                                        
                                        
                                  </div>
                                   <div class="form-group mar-btm mb-3">
                                   
                                      
                                        
                                        <label for="inputEmail" class="col-xl-8 form-control-label">2 Pararaphs</label>
                                        <div class="col-xl-10">
                                           <textarea class="form-control" rows="7" id="editor" name="sample_paragraph"><?= $row->sample_paragraph;?></textarea>
                                        </div>
                                        
                                        
                                  </div>
                                   

                                    <div class="form-group mb-3">
                                   
                                      
                                        
                                        <label for="inputEmail" class="col-xl-8 form-control-label">Price</label>
                                        <div class="col-xl-10">
                                            <input class="form-control" value="<?= $row->sample_price;?>" name="price" id="title"  type="text" required>
                                        </div>
                                        
                                        
                                  </div>
                                   

                                 

                                   

                                  <div class="form-group mb-3">
                                    
                                       
                                        <label for="inputEmail" class="col-xl-8 form-control-label">Pages</label>
                                        <div class="col-xl-10">
                                            <input class="form-control" value="<?= $row->sample_pages;?>" name="sample_pages" id="title"  type="text" required>
                                        </div>
                                     
                                    
                                  </div>

                                    <div class="form-group mb-3">
                                    
                                       
                                        <label for="inputEmail" class="col-xl-8 form-control-label">Words</label>
                                        <div class="col-xl-10">
                                            <input class="form-control" value="<?= $row->sample_words;?>" name="sample_words" id="title"  type="text" required>
                                        </div>
                                     
                                    
                                  </div>

                                   <div class="form-group mb-3">
                                    
                                       
                                        <label for="inputEmail" class="col-xl-8 form-control-label">Sources</label>
                                        <div class="col-xl-10">
                                            <input class="form-control" value="<?= $row->sample_sources;?>" name="sources" id="title"  type="text" required>
                                        </div>
                                     
                                    
                                  </div>
                                   <div class="form-group mar-btm mb-3">
                                   
                                      
                                        
                                        <label for="inputEmail" class="col-xl-8 form-control-label">Price(USD)</label>
                                        <div class="col-xl-10">
                                            <input class="form-control" id="price" value="<?= $row->sample_price;?>" name="price" id="title"  type="text" required>
                                        </div>
                                        
                                        
                                  </div>
                                   <div class="form-group mar-btm mb-3">
                                                        <label class="col-md-3 col-form-label" for="example-email">Topic</label>
                                                        <div class="col-md-9">
                                                            <select  class="form-control selector mb-3" value="<?= $row->sample_paper_type;?>" name="sample_paper_type" required>
                                                               
                                                                 <?php

                                                                  foreach ($topic->result_array() as $rowa)         

                                                                    { ?>

                                                                    <option  value="<?php echo $rowa['paper_id']; ?>"  <?php if($rowa['paper_id']==$row->sample_paper_type){ echo "selected"; } ?>><?php echo $rowa['paper_name']; ?></option>

                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                  </div>

                                   <div class="form-group mar-btm mb-3">
                                                        <label class="col-md-3 col-form-label" for="example-email">Language</label>
                                                        <div class="col-md-9">
                                                            <select value="<?= $row->sample_language;?>" class="form-control selector mb-3" name="sample_language" required>
                                                               
                                                                 <?php

                                                                  foreach ($language->result_array() as $rowk)         

                                                                    { ?>

                                                                    <option  value="<?php echo $rowk['language_id']; ?>"  <?php if($rowk['language_id']==$row->sample_language){ echo "selected"; } ?>><?php echo $rowk['language_name']; ?></option>

                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                  </div>

                                    <div class="form-group mb-3">
                                                        <label class="col-md-3 col-form-label" for="example-email">Format</label>
                                                        <div class="col-md-9">
                                                            <select id="discipline" value="<?= $row->sample_style;?>" class="form-control selector mb-3" name="format_id" required>
                                                               
                                                                 <?php

                                                                  foreach ($format->result_array() as $rowz)         

                                                                    { ?>

                                                                    <option  value="<?php echo $rowz['format_id']; ?>" <?php if($rowz['format_id']==$row->sample_style){ echo "selected"; } ?>><?php echo $rowz['format_name']; ?></option>

                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                  </div>



                                  <div class="form-group mar-btm mb-3">
                                                        <label class="col-md-3 col-form-label" for="example-email">Document</label>
                                                        <div class="col-md-9">
                                                            <select  value="<?= $row->sample_document_type;?>" class="form-control selector mb-3" name="sample_document_type" required>
                                                               
                                                                 <?php

                                                                  foreach ($document->result_array() as $rowj)         

                                                                    { ?>

                                                                    <option  value="<?php echo $rowj['document_id']; ?>" <?php if($rowj['document_id']==$row->sample_document_type){ echo "selected"; } ?>><?php echo $rowj['document_name']; ?></option>

                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                  </div>

                                          <div class="form-group mb-3">
                                                        <label class="col-md-3 col-form-label" for="example-email">Level</label>
                                                        <div class="col-md-9">
                                                            <select id="discipline" value="<?php echo $levely; ?>" class="form-control mb-3" name="level_id" required>
                                                               
                                                                 <?php

                                                                  foreach ($level->result_array() as $rowy)         

                                                                    { ?>

                                                                    <option  value="<?php echo $rowy['level_id']; ?>" <?php if($rowy['level_id']==$levely){ echo "selected"; } ?>><?php echo $rowy['level_name']; ?></option>

                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                  </div>

                                   <div class="form-group mb-3">
                                                        <label class="col-md-3 col-form-label" for="example-email">Discipline</label>
                                                        <div class="col-md-9">
                                                            <select id="discipline" value="<?= $row->sample_discipline;?>" class="form-control selector mb-3" name="discipline_id" required>
                                                               
                                                                 <?php

                                                                  foreach ($discipline->result_array() as $rowk)         

                                                                    { ?>

                                                                    <option  value="<?php echo $rowk['discipline_id']; ?>" <?php if($rowk['discipline_id']==$row->sample_discipline){ echo "selected"; } ?>><?php echo $rowk['discipline_name']; ?></option>

                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                  </div>

                                <?php } ?>
                                    
                                 
                                 
                                    
                                   

                                  
                                    
                                                                       
                               

                                 <div class="form-group">
                                   
                                   <div class="col-xl-10">
                                     <input type="submit" style="color:#fff;" name="submit" class="submit btn btn-primary btn-md" value="Update Sample" />
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
               
