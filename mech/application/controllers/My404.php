   <?php
defined('BASEPATH') OR exit('No direct script access allowed');
class My404 extends CI_Controller {
function __construct()
  {
           parent::__construct();

         $this->load->helper(array('form','url'));

         $this->load->database();

         $this->load->library('form_validation');

         $this->load->library('session');

         $this->load->library('pagination');

         $this->load->library('paypal_lib');

         $this->load->database();

         $this->load->model('Designmodel');
       }
       public function index()
       {
           $this->output->set_status_header('404');

            $data="";

           $this->load->view('homepage/header',$data);    
           $this->load->view('homepage/err404',$data); 
           $this->load->view('homepage/footer');       

       }

      public function check_log_activity(){


            if($this->session->userdata('userData')){

                 
                 redirect('client/index');

             }


           

         



    }



    


    }