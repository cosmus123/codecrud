<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
	{   
        $this->load->view('first_page_view');
    }

    public function home_page(){

        $this->load->view('inc/header_view');
        $this->load->view('home_view');

        $this->load->view('inc/footer_view');
        
       // $this->output->enable_profiler(TRUE);

    }
    
    public function welcome_user(){
       
        $name = $this->input->post('name');
        $this->session->set_userdata(array('name' => $name ));

        $this->load->view('startuser_view');
        //$this->output->enable_profiler(TRUE);

    }

    public function user(){
        $this->load->view('humans_view');
    }

    public function user_logout(){
			
        $this->session->unset_userdata('name'); 
        $this->load->view('first_page_view');
    }

    
}

?>