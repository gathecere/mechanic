<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mechanic extends CI_Controller {
    
        function __construct()
	{
    
                 parent::__construct();
    
        
		            $this->load->helper(array('form', 'url'));
                
             
                 $this->load->library("pagination");

                 $this->load->database();

                // Load form helper library


                // Load form validation library
                 $this->load->library('form_validation');

                // Load session library
                 $this->load->library('session');

                 $this->load->helper('date_helper');

                 $this->load->helper('download');


               // $this->load->library('facebook');

               // $this->load->library('google');

                // Load database
                $this->load->model('Designmodel');

                 $this->load->model('Adminmodel');


                 $this->load->model('Mahana_model');

                $this->load->library('mahana_messaging');
  }



   public function index()
  {
       
         
       
        $data['title']="Mechanic"; 
        $data['stops'] = $this->Designmodel->get_stops();
        $data['spares'] = $this->Designmodel->get_spares();
        $data['status'] = $this->Designmodel->get_repair_status();
        $data['mechanics'] = $this->Designmodel->get_mechanics();
        $data['service'] = $this->Designmodel->get_service();



        


        $data['types'] = $this->Designmodel->get_repair_types();

        $data['repair_details'] = $this->Designmodel->get_repair_details();


          $i=0;

          foreach($data['repair_details'] as $lob){

                $entry_id=$lob->entry_id;

                $data['mechs']=$this->Adminmodel->get_mechs($entry_id);
                $data['repair_types']=$this->Adminmodel->get_repair_types($entry_id);

               
                $data['repair_details'][$i]->mechs= $data['mechs'];
                $data['repair_details'][$i]->repair_types= $data['repair_types'];


                $i++;

               // print_r($data['mechanics']); die();



          }

        


      //  $data['userData'] = $data;

        //print_r($data['discipline']->num_rows()); die();
              
        $this->load->view('buyer/header',$data);     
        $this->load->view('buyer/repair',$data);
        $this->load->view('buyer/footer',$data);
  }


    public function edit_entry()
  {
        $entry_id=$this->uri->segment(3);
         
       
        $data['title']="Mechanic"; 
        $data['stops'] = $this->Designmodel->get_stops();
        $data['spares'] = $this->Designmodel->get_spares();
        $data['status'] = $this->Designmodel->get_repair_status();
        $data['service'] = $this->Designmodel->get_service();

        $data['mechanics'] = $this->Designmodel->get_mechanics();
        $data['mechs'] = $this->Designmodel->get_mechs($entry_id);
        $data['tys'] = $this->Designmodel->get_tys($entry_id);

        $data['types'] = $this->Designmodel->get_repair_types();

        $data['h'] = $this->Designmodel->get_repair_details_edit($entry_id);

        


      //  $data['userData'] = $data;

        //print_r($data['discipline']->num_rows()); die();
              
        $this->load->view('buyer/header',$data);     
        $this->load->view('buyer/edit_entry',$data);
        $this->load->view('buyer/footer',$data);
  }


    public function edit_repair_process()
  {

       $stop=$this->input->post('stop');
       $spares=$this->input->post('spare');
       $time=$this->input->post('time');
       $status=$this->input->post('status');

        $entry_id=$this->input->post('entry_id');


        $mechanics=$this->input->post('mechanic');
        $type_of_repair=$this->input->post('type_of_repair');

        $insert_arr=array(

                           'bib_number'=>$this->input->post('bib_number'),
                           'service'=>$this->input->post('service'),
                          // 'type_id'=>$this->input->post('type_of_repair'),
                           'stop_id'=>$stop,
                           'time'=>$time,
                           'status'=>$status,

                         );

       $this->Designmodel->edit_repair_process($entry_id,$insert_arr);

        $this->Designmodel->del_mechs($entry_id);
        $this->Designmodel->del_types($entry_id);


          foreach($mechanics as $mechanic){

                  $arr=array(

                              'mechanic_id'=>$mechanic,
                              'repair_id'=>$entry_id,

                            );

                  $this->Designmodel->update_spares($arr);


                 




        }


        foreach($type_of_repair as $type){

                  $arr=array(

                              'type_of_work_id'=>$type,
                              'repair_id'=>$entry_id,

                            );

                  $this->Designmodel->update_ok($arr);


                 




        }




         $data['message'] = "Repair details edited successfully";

        $data['stops'] = $this->Designmodel->get_stops();
        $data['spares'] = $this->Designmodel->get_spares();
        $data['status'] = $this->Designmodel->get_repair_status();
        $data['mechanics'] = $this->Designmodel->get_mechanics();
        $data['types'] = $this->Designmodel->get_repair_types();
        $data['service'] = $this->Designmodel->get_service();


        $data['repair_details'] = $this->Designmodel->get_repair_details();

           $i=0;

          foreach($data['repair_details'] as $lob){

                $entry_id=$lob->entry_id;

                $data['mechs']=$this->Adminmodel->get_mechs($entry_id);
                $data['repair_types']=$this->Adminmodel->get_repair_types($entry_id);

               
                $data['repair_details'][$i]->mechs= $data['mechs'];
                $data['repair_details'][$i]->repair_types= $data['repair_types'];


                $i++;

               // print_r($data['mechanics']); die();



          }


         $this->load->view('buyer/header');     
        $this->load->view('buyer/repair',$data);
        $this->load->view('buyer/footer');



     }


  // end here
   public function update_repair_process()
  {

       $stop=$this->input->post('stop');
       $spares=$this->input->post('spare');
       $time=$this->input->post('time');
       $status=$this->input->post('status');
       $mechanics=$this->input->post('mechanics');
       $type_of_repair=$this->input->post('type_of_repair');

        $insert_arr=array(

                           'rider_name'=>$this->input->post('name'),
                           'bib_number'=>$this->input->post('bib_number'),
                           'service'=>$this->input->post('service'),
                           'stop_id'=>$stop,
                           'time'=>$time,
                           'status'=>$status,

                         );

       $insert_id=$this->Designmodel->update_repair_process($insert_arr);

      // insert spares
        foreach($mechanics as $mechanic){

                  $arr=array(

                              'mechanic_id'=>$mechanic,
                              'repair_id'=>$insert_id,

                            );

                  $this->Designmodel->update_spares($arr);


                 




        }


        foreach($type_of_repair as $type){

                  $arr=array(

                              'type_of_work_id'=>$type,
                              'repair_id'=>$insert_id,

                            );

                  $this->Designmodel->update_ok($arr);


                 




        }

        $data['message'] = "Repair details added successfully";

        $data['stops'] = $this->Designmodel->get_stops();
        $data['spares'] = $this->Designmodel->get_spares();
        $data['status'] = $this->Designmodel->get_repair_status();
        $data['mechanics'] = $this->Designmodel->get_mechanics();
        $data['types'] = $this->Designmodel->get_repair_types();

        $data['repair_details'] = $this->Designmodel->get_repair_details();

           $i=0;

          foreach($data['repair_details'] as $lob){

                $entry_id=$lob->entry_id;

                $data['mechs']=$this->Adminmodel->get_mechs($entry_id);
                $data['repair_types']=$this->Adminmodel->get_repair_types($entry_id);

               
                $data['repair_details'][$i]->mechs= $data['mechs'];
                $data['repair_details'][$i]->repair_types= $data['repair_types'];


                $i++;

               // print_r($data['mechanics']); die();



          }



        $this->load->view('buyer/header');     
        $this->load->view('buyer/repair',$data);
        $this->load->view('buyer/footer');



    }

       
}
