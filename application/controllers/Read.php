<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Read extends CI_Controller {
    public function __construct()
	{
            parent::__construct();
                
            /*load Model*/
            $this->load->model('Crud_model');
    }

    public function index()
	{   
        $data['data'] = $this->Crud_model->get_data();

        $this->load->view('inc/header_view');
        $this->load->view('read_view',$data);

        $this->load->view('inc/footer_view');
        
       // $this->output->enable_profiler(TRUE);
    }
    
}

?>