<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Create Past Paper</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Create Past Paper</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Create Past Paper</h6>
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
                                        <h4 class="header-title">Add Past Paper</h4> <br>
                                       
                                        <div class="row">
                                            <div class="col-xl-11">
                                             <?php if(!empty($error)){ ?>

                                                 <div class="alert alert-warning">
                                                   <?php echo $error; ?>
                                                  </div>

                                               <?php     } ?>
                                             <form action="<?php echo base_url('admin/add_sample_paper_process') ?>" method="post"  enctype="multipart/form-data">

             <div class="box-body">
                                 
                                

                                                    
                            <!-- Tab panes -->

                                 
                                  

                             


                                  <div class="form-group mar-btm mb-3">
                                   
                                      
                                        
                                        <label for="inputEmail" class="col-xl-8 form-control-label">Title</label>
                                        <div class="col-xl-10">
                                            <input class="form-control" value="" name="title" id="title"  type="text" required>
                                        </div>
                                        
                                        
                                  </div>
                                    <div class="form-group mar-btm mb-3">
                                   
                                      
                                        
                                        <label for="inputEmail" class="col-xl-8 form-control-label">Brief Description(150-200 characters)</label>
                                        <div class="col-xl-10">
                                           <textarea class="form-control" rows="7" name="sample_description"></textarea>
                                        </div>
                                        
                                        
                                  </div>
                                  <div class="form-group mar-btm mb-3">
                                   
                                      
                                        
                                        <label for="inputEmail" class="col-xl-8 form-control-label">2 Paragraphs</label>
                                        <div class="col-xl-10">
                                           <textarea class="form-control" id="editor" rows="7" name="sample_paragraph"></textarea>
                                        </div>
                                        
                                        
                                  </div>

                               

                                 

                                   

                                  <div class="form-group mar-btm mb-3">
                                    
                                       
                                        <label for="inputEmail" class="col-xl-8 form-control-label">Pages</label>
                                        <div class="col-xl-10">
                                            <input class="form-control" onkeyup="get_words()" value="0" id="pages" name="sample_pages" id="title"  type="text" required>
                                        </div>
                                     
                                    
                                  </div>

                                    <div class="form-group mar-btm mb-3">
                                    
                                       
                                        <label for="inputEmail" class="col-xl-8 form-control-label">Words</label>
                                        <div class="col-xl-10">
                                            <input class="form-control" value="0" id="words" name="sample_words" id="title"  type="text" required>
                                        </div>
                                     
                                    
                                  </div>

                                   <div class="form-group mar-btm mb-3">
                                   
                                      
                                        
                                        <label for="inputEmail" class="col-xl-8 form-control-label">Price(USD)</label>
                                        <div class="col-xl-10">
                                            <input class="form-control" id="price" value="0" name="price" id="title"  type="text" required>
                                        </div>
                                        
                                        
                                  </div>
                                   

                                   <div class="form-group mar-btm mb-3">
                                    
                                       
                                        <label for="inputEmail" class="col-xl-8 form-control-label">Sources</label>
                                        <div class="col-xl-10">
                                            <input class="form-control" value="" name="sources" id="title"  type="text" required>
                                        </div>
                                     
                                    
                                  </div>

                                   <div class="form-group mar-btm mb-3">
                                                        <label class="col-md-3 col-form-label" for="example-email">Topic</label>
                                                        <div class="col-md-9">
                                                            <select  class="form-control selector mb-3" name="sample_paper_type" required>
                                                               
                                                                 <?php

                                                                  foreach ($topic->result_array() as $row)         

                                                                    { ?>

                                                                    <option  value="<?php echo $row['paper_id']; ?>"><?php echo $row['paper_name']; ?></option>

                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                  </div>

                                    <div class="form-group mar-btm mb-3">
                                                        <label class="col-md-3 col-form-label" for="example-email">Format</label>
                                                        <div class="col-md-9">
                                                            <select id="discipline" class="form-control selector mb-3" name="format_id" required>
                                                               
                                                                 <?php

                                                                  foreach ($format->result_array() as $row)         

                                                                    { ?>

                                                                    <option  value="<?php echo $row['format_id']; ?>"><?php echo $row['format_name']; ?></option>

                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                  </div>

                                  <div class="form-group mar-btm mb-3">
                                                        <label class="col-md-3 col-form-label" for="example-email">Level</label>
                                                        <div class="col-md-9">
                                                            <select id="discipline" class="form-control selector mb-3" name="level_id" required>
                                                               
                                                                 <?php

                                                                  foreach ($level->result_array() as $row)         

                                                                    { ?>

                                                                    <option  value="<?php echo $row['level_id']; ?>"><?php echo $row['level_name']; ?></option>

                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                  </div>

                                  <div class="form-group mar-btm mb-3">
                                                        <label class="col-md-3 col-form-label" for="example-email">Discipline</label>
                                                        <div class="col-md-9">
                                                            <select id="discipline" class="form-control selector mb-3" name="discipline_id" required>
                                                               
                                                                 <?php

                                                                  foreach ($discipline->result_array() as $row)         

                                                                    { ?>

                                                                    <option  value="<?php echo $row['discipline_id']; ?>"><?php echo $row['discipline_name']; ?></option>

                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                  </div>

                                   <div class="form-group mar-btm mb-3">
                                                        <label class="col-md-3 col-form-label" for="example-email">Language</label>
                                                        <div class="col-md-9">
                                                            <select id="discipline" class="form-control selector mb-3" name="sample_language" required>
                                                               
                                                                 <?php

                                                                  foreach ($language->result_array() as $row)         

                                                                    { ?>

                                                                    <option  value="<?php echo $row['language_id']; ?>"><?php echo $row['language_name']; ?></option>

                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                  </div>
                                  <div class="form-group mar-btm mb-3">
                                                        <label class="col-md-3 col-form-label" for="example-email">Document</label>
                                                        <div class="col-md-9">
                                                            <select id="discipline" class="form-control selector mb-3" name="sample_document_type" required>
                                                               
                                                                 <?php

                                                                  foreach ($document->result_array() as $row)         

                                                                    { ?>

                                                                    <option  value="<?php echo $row['document_id']; ?>"><?php echo $row['document_name']; ?></option>

                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                  </div>
                                  <br>

                                    <div class="form-group mar-btm">
                                    
                                       
                                        <label for="inputEmail" class="col-xl-8 form-control-label">Upload Sample</label>
                                        <div class="col-xl-10">
                                            <input class="form-control" value="" name="userfile" type="file" required>
                                        </div>
                                     
                                    
                                  </div>
                                    
                                 
                                 
                                    
                                   

                                  
                                    
                                                                       
                               

                                 <div class="form-group mar-btm"  style="margin-top: 20px;">
                                   
                                   <div class="col-xl-10">
                                     <input type="submit" style="color:#fff;" name="submit" class="submit btn btn-primary btn-md" value="Add Past Paper" />
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
               <script type="text/javascript">


                 function get_words(){

                      var pages=$("#pages").val();
                      var price=pages*5;
                      var words=pages*275;
                      $("#words").val(words+" words");


                      $("#price").val(price);



                    }
                     
               </script>
