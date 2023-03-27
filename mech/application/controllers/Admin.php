<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
function __construct()
  {
    
                parent::__construct();
                $this->load->helper('url');
                
             
                //$this->load->library("pagination");

                $this->load->database();

                $this->load->library('mahana_messaging');

                // Load form helper library
                //$this->load->library('cart');

                // Load form validation library
                $this->load->library('form_validation');

                // Load session library
                $this->load->library('session');

                // Load database
                $this->load->model('Adminmodel');

                 $this->load->model('Designmodel');
                
                $this->load->helper('form');

                $this->load->helper('download');


                

  }



  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
         public function stops()
  {
         $data['stops']=$this->Adminmodel->get_stops();

         $i=0;

          foreach($data['stops'] as $lob){

                $stop_id=$lob->stop_id;

                //get days

                $data['days']=$this->Adminmodel->get_stop_days($stop_id);
                //$data['available']=$this->Adminmodel->get_mechanic_availability($mechanic_id);

               
                $data['stops'][$i]->days= $data['days'];
              //  $data['mechanics'][$i]->available= $data['available'];

                $i++;

               // print_r($data['mechanics']); die();



          }


         $this->load->view('admin/header',$data);
         $this->load->view('admin/stops',$data);
         $this->load->view('admin/footer',$data);
             
  }

     public function mechanics()
  {
         $data['mechanics']=$this->Adminmodel->get_mechanics();

       
           $i=0;

          foreach($data['mechanics'] as $lob){

                $mechanic_id=$lob->id;

                $data['stops']=$this->Adminmodel->get_mechanic_stops($mechanic_id);
                $data['available']=$this->Adminmodel->get_mechanic_availability($mechanic_id);

               
                $data['mechanics'][$i]->stops= $data['stops'];
                $data['mechanics'][$i]->available= $data['available'];

                $i++;

               // print_r($data['mechanics']); die();



          }

          $data['stops']=$this->Adminmodel->get_stops();
          $data['days']=$this->Adminmodel->get_days();



         $this->load->view('admin/header',$data);
         $this->load->view('admin/mechanics',$data);
         $this->load->view('admin/footer',$data);
             
  }


    public function inventory()
  {
         $data['inventory']=$this->Adminmodel->get_inventory();


         $this->load->view('admin/header',$data);
         $this->load->view('admin/inventories',$data);
         $this->load->view('admin/footer',$data);
             
  }

   public function stock_report()
  {
         $data['inventory']=$this->Adminmodel->get_inventory_usage();


         $this->load->view('admin/header',$data);
         $this->load->view('admin/stock_report',$data);
         $this->load->view('admin/footer',$data);
             
  }

   public function add_stop(){
     

        $stop_name=$this->input->post('stop_name');
        $stop_details=$this->input->post('stop_details');
        $sequence=$this->input->post('sequence');

        $res=$this->Adminmodel->check_sequence($sequence);

        if($res=='ok'){



        $update_arr=array(
                           'stop_name'=>$stop_name,
                           'stop_details'=>$stop_details,
                           'city'=>$this->input->post('city'),
                           'state'=>$this->input->post('state'),
                           'zipcode'=>$this->input->post('zip'),

                           'sequence'=>$sequence,
                         );

        $this->Adminmodel->insert_stop($update_arr);

        $data['stops']=$this->Adminmodel->get_stops();
        $data['message']="Stop successfully added";



         $this->load->view('admin/header',$data);
         $this->load->view('admin/stops',$data);
         $this->load->view('admin/footer',$data);

        }
        else
        {

             $data['stops']=$this->Adminmodel->get_stops();
             $data['message']="Rest sequence already in the system";



             $this->load->view('admin/header',$data);
             $this->load->view('admin/stops',$data);
             $this->load->view('admin/footer',$data);


        }




  }

   public function add_mechanic(){
     

        $mechanic_name=$this->input->post('mechanic_name');
        $level=$this->input->post('experience');
        $phone=$this->input->post('phone');
        $stop_ids=$this->input->post('stop_id');
        $days=$this->input->post('days');

       // $ins=array();





      // print_r($stops); die();



        $update_arr=array(
                           'name'=>$mechanic_name,
                           'level'=>$level,
                           'phone'=>$phone,
                         );

        $mechanic_id=$this->Adminmodel->insert_mechanic($update_arr);


           foreach($days as $day){

                $ins=array(
                             'day_id'=>$day,
                             'mechanic_id'=>$mechanic_id,
                          );


             $this->Adminmodel->insert_mechanic_days($ins);



        }


         foreach($stop_ids as $stop_id){

                $ins=array(
                             'stop_id'=>$stop_id,
                             'mechanic_id'=>$mechanic_id,
                          );


             $this->Adminmodel->insert_mechanic_stops($ins);



        }



        $data['mechanics']=$this->Adminmodel->get_mechanics();
         $i=0;

          foreach($data['mechanics'] as $lob){

                $mechanic_id=$lob->id;

                $data['stops']=$this->Adminmodel->get_mechanic_stops($mechanic_id);
                $data['available']=$this->Adminmodel->get_mechanic_availability($mechanic_id);

               
                $data['mechanics'][$i]->stops= $data['stops'];
                $data['mechanics'][$i]->available= $data['available'];


                $i++;

               // print_r($data['mechanics']); die();



          }

        $data['stops']=$this->Adminmodel->get_stops();

        $data['message']="mechanic successfully added";



         $this->load->view('admin/header',$data);
         $this->load->view('admin/mechanics',$data);
         $this->load->view('admin/footer',$data);




  }

   public function stop_performance(){
     

        

        $data['stops']=$this->Adminmodel->get_stop_performance();
       // $data['message']="Stop successfully added";



         $this->load->view('admin/header',$data);
         $this->load->view('admin/stop_performance',$data);
         $this->load->view('admin/footer',$data);




  }

   public function technical_performance(){
     

        

        $data['completed']=$this->Adminmodel->get_completedd();
        $data['failed']=$this->Adminmodel->get_failedd();
       // $data['message']="Stop successfully added";



         $this->load->view('admin/header',$data);
         $this->load->view('admin/technical_performance',$data);
         $this->load->view('admin/footer',$data);




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


         $this->load->view('admin/header');     
        $this->load->view('admin/repairs',$data);
        $this->load->view('admin/footer');



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
              
        $this->load->view('admin/header',$data);     
        $this->load->view('admin/edit_entry',$data);
        $this->load->view('admin/footer',$data);
  }

   public function repair_details(){
     
        $entry_id=$this->uri->segment(3);
        

        $data['h']=$this->Adminmodel->get_entry_details($entry_id);
        $data['spares']=$this->Adminmodel->get_spares($entry_id);



         $this->load->view('admin/header',$data);
         $this->load->view('admin/repair_details',$data);
         $this->load->view('admin/footer',$data);




  }


   public function edit_stop_process(){
     

        $stop_name=$this->input->post('stop_name');
        $stop_details=$this->input->post('stop_details');
        $stop_id=$this->input->post('stop_id');


        $update_arr=array(
                           'stop_name'=>$stop_name,
                           'stop_details'=>$stop_details,
                         );

        $this->Adminmodel->update_stop($stop_id,$update_arr);

        $data['stops']=$this->Adminmodel->get_stops();


        $data['message']="Stop successfully updated";



         $this->load->view('admin/header',$data);
         $this->load->view('admin/stops',$data);
         $this->load->view('admin/footer',$data);




  }


  public function add_spare(){

     

        $spare_name=$this->input->post('spare_name');



        $update_arr=array(
                           'spare_name'=>$spare_name,
                         );

        $this->Adminmodel->insert_spare($update_arr);

        $data['inventory']=$this->Adminmodel->get_inventory();

        $data['message']="Spare successfully added";



         $this->load->view('admin/header',$data);
         $this->load->view('admin/inventories',$data);
         $this->load->view('admin/footer',$data);




  }

   public function add_inventory(){

     

        $quantity=$this->input->post('quantity');
        $inventory_id=$this->input->post('inventory_id');



        $update_arr=array(
                           'quantity_in'=>$quantity,
                           'inventory_id'=>$inventory_id,
                         );

        $this->Adminmodel->insert_inventory($update_arr);

        $data['inventory']=$this->Adminmodel->get_inventory();

        $data['message']="Inventory successfully added";



         $this->load->view('admin/header',$data);
         $this->load->view('admin/inventories',$data);
         $this->load->view('admin/footer',$data);




  }

  public function delete_stop(){
     

        $stop_id=$this->uri->segment(3);


        

        $this->Adminmodel->delete_stop($stop_id);

        $data['stops']=$this->Adminmodel->get_stops();
        $data['message']="Stop successfully deleted";



         $this->load->view('admin/header',$data);
         $this->load->view('admin/stops',$data);
         $this->load->view('admin/footer',$data);




  }

  public function delete_mechanic(){
     

        $mech_id=$this->uri->segment(3);


        

        $this->Adminmodel->delete_mechanic($mech_id);

        $data['mechanics']=$this->Adminmodel->get_mechanics();

         $i=0;

          foreach($data['mechanics'] as $lob){

                $mechanic_id=$lob->id;

                $data['stops']=$this->Adminmodel->get_mechanic_stops($mechanic_id);

               
                $data['mechanics'][$i]->stops= $data['stops'];

                $i++;

               // print_r($data['mechanics']); die();



          }
        $data['message']="mechanic successfully deleted";
                  $data['stops']=$this->Adminmodel->get_stops();




         $this->load->view('admin/header',$data);
         $this->load->view('admin/mechanics',$data);
         $this->load->view('admin/footer',$data);




  }

   public function delete_entry(){
     

        $entry_id=$this->uri->segment(3);


        

        $this->Adminmodel->delete_entry($entry_id);

       
        $data['stops'] = $this->Designmodel->get_stops();
        $data['spares'] = $this->Designmodel->get_spares();
        $data['status'] = $this->Designmodel->get_repair_status();
        $data['mechanics'] = $this->Designmodel->get_mechanics();
        $data['types'] = $this->Designmodel->get_repair_types();

        $data['repair_details'] = $this->Designmodel->get_repair_details();

        $data['message']="entry successfully deleted";



         $this->load->view('admin/header',$data);
         $this->load->view('admin/repairs',$data);
         $this->load->view('admin/footer',$data);




  }

  public function edit_stop(){
     

        $stop_id=$this->uri->segment(3);


        

        $data['h']=$this->Adminmodel->get_stop_details($stop_id);

        $data['stops']=$this->Adminmodel->get_stops();


       // $data['stops']=$this->Adminmodel->get_stops();
       // $data['message']="Stop successfully deleted";



         $this->load->view('admin/header',$data);
         $this->load->view('admin/edit_stop',$data);
         $this->load->view('admin/footer',$data);




  }

  public function index(){
     

        //$stop_id=$this->uri->segment(3);

         ///echo "here"; die();
        

       // $this->Adminmodel->delete_stop($stop_id);
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
              
        $this->load->view('admin/header',$data);     
        $this->load->view('admin/repairs',$data);
        $this->load->view('admin/footer',$data);




  }

    

        
  
}

?>