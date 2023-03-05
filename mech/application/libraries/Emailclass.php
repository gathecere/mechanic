<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emailclass {

	    protected $CI;

        // We'll use a constructor, as you can't directly call a function
        // from a property definition.
        public function __construct()
        {
                // Assign the CodeIgniter super-object
                $this->CI =& get_instance();
        }



        public function send_mail($to,$subject,$message)
        {
        	    $html_mail =  file_get_contents(base_url()."assets/templates/contact-us.html");

			    //Replacing Data with Keys
			    $data = array(
			       
			        "message" => $message,
			    );

			    $placeholders = array(
			       
			        "%MESSAGE%"
			    );
			    $final_mail = str_replace($placeholders, $data, $html_mail);



			   $config = Array(

			          'protocol' => 'smtp',
			          'smtp_host' => 'ssl://smtp.zoho.com',
			          'smtp_port' => 465,
			          'smtp_user' => 'dispatch@essayloop.com',
			          'smtp_pass' => 'essayloop2020',
			          'mailtype'  => 'html', 
			          'charset'   => 'utf-8'
			      );

			      $this->CI->load->library('email');
			      //$this->load->library('email');
			      //$this->CI->load->helper('url');

			      $this->CI->email->initialize($config);
			      $this->CI->email->set_newline("\r\n");

			      $this->CI->email->from('dispatch@essayloop.com');
			      $this->CI->email->to($to); 
			      $this->CI->email->bcc('essayloopwriters@gmail.com'); 

			      $this->CI->email->reply_to('support@essayloop.com'); 

			      $this->CI->email->subject($subject);
			      $this->CI->email->message($final_mail);  

			      // Set to, from, message, etc.

			      //$this->load->library('encrypt');

			      $this->CI->email->send();


        }
}