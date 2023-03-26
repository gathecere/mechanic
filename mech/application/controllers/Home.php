<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
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
         public function index()
  {
        // $data['stops']=$this->Adminmodel->get_stops();


         $this->load->view('homepage/index');
             
  }

}

?>