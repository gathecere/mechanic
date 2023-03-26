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
        $data['types'] = $this->Designmodel->get_repair_types();

        $data['repair_details'] = $this->Designmodel->get_repair_details();

        


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
        $data['mechanics'] = $this->Designmodel->get_mechanics();
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

        $insert_arr=array(

                           'rider_name'=>$this->input->post('name'),
                           'mechanic_id'=>$this->input->post('mechanic'),
                           'type_id'=>$this->input->post('type_of_repair'),
                           'stop_id'=>$stop,
                           'time'=>$time,
                           'status'=>$status,

                         );

       $this->Designmodel->edit_repair_process($entry_id,$insert_arr);


         $data['message'] = "Repair details edited successfully";

        $data['stops'] = $this->Designmodel->get_stops();
        $data['spares'] = $this->Designmodel->get_spares();
        $data['status'] = $this->Designmodel->get_repair_status();
        $data['mechanics'] = $this->Designmodel->get_mechanics();
        $data['types'] = $this->Designmodel->get_repair_types();

        $data['repair_details'] = $this->Designmodel->get_repair_details();

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

        $insert_arr=array(

                           'rider_name'=>$this->input->post('name'),
                           'mechanic_id'=>$this->input->post('mechanic'),
                           'type_id'=>$this->input->post('type_of_repair'),
                           'stop_id'=>$stop,
                           'time'=>$time,
                           'status'=>$status,

                         );

       $insert_id=$this->Designmodel->update_repair_process($insert_arr);

       //insert spares
        // foreach($spares as $spare){

        //           $arr=array(

        //                       'inventory_id'=>$spare,
        //                       'entry_id'=>$insert_id,

        //                     );

        //           $this->Designmodel->update_spares($arr);


        //            $oz=array(

        //                       'inventory_id'=>$spare,
        //                       'quantity_out'=>1,

        //                     );

        //           $this->Designmodel->update_inventory($oz);




        // }

        $data['message'] = "Repair details added successfully";

        $data['stops'] = $this->Designmodel->get_stops();
        $data['spares'] = $this->Designmodel->get_spares();
        $data['status'] = $this->Designmodel->get_repair_status();
        $data['mechanics'] = $this->Designmodel->get_mechanics();
        $data['types'] = $this->Designmodel->get_repair_types();

        $data['repair_details'] = $this->Designmodel->get_repair_details();


        $this->load->view('buyer/header');     
        $this->load->view('buyer/repair',$data);
        $this->load->view('buyer/footer');



    }

       
}
