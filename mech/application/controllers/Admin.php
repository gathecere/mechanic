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


         $this->load->view('admin/header',$data);
         $this->load->view('admin/stops',$data);
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


        $update_arr=array(
                           'stop_name'=>$stop_name,
                           'stop_details'=>$stop_details,
                         );

        $this->Adminmodel->insert_stop($update_arr);

        $data['stops']=$this->Adminmodel->get_stops();
        $data['message']="Stop successfully added";



         $this->load->view('admin/header',$data);
         $this->load->view('admin/stops',$data);
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


        

       // $this->Adminmodel->delete_stop($stop_id);

        $data['repairs']=$this->Adminmodel->get_entries();



         $this->load->view('admin/header',$data);
         $this->load->view('admin/repairs',$data);
         $this->load->view('admin/footer',$data);




  }

    

        
  
}

?>