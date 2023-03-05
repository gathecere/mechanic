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
        


      //  $data['userData'] = $data;

        //print_r($data['discipline']->num_rows()); die();
              
        $this->load->view('buyer/header',$data);     
        $this->load->view('buyer/repair',$data);
        $this->load->view('buyer/footer',$data);
  }


  // end here
   public function update_repair_process()
  {

       $stop=$this->input->post('stop');
       $spares=$this->input->post('spare');
       $time=$this->input->post('time');
       $status=$this->input->post('status');

        $insert_arr=array(
                           'stop_id'=>$stop,
                           'time'=>$time,
                           'status'=>$status,

                         );

       $insert_id=$this->Designmodel->update_repair_process($insert_arr);

       //insert spares
        foreach($spares as $spare){

                  $arr=array(

                              'inventory_id'=>$spare,
                              'entry_id'=>$insert_id,

                            );

                  $this->Designmodel->update_spares($arr);


                   $oz=array(

                              'inventory_id'=>$spare,
                              'quantity_out'=>1,

                            );

                  $this->Designmodel->update_inventory($oz);




        }

        $this->load->view('buyer/header');     
        $this->load->view('buyer/notification');
        $this->load->view('buyer/footer');



    }

       
}
