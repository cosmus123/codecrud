<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table_data extends CI_Controller {

    public function index(){

        $data['data'] = $this->Crud_model->get_data();

        //$this->load->view('inc/header_view');
        
        $this->load->view('table_view',$data);

       //$this->load->view('inc/footer_view');

        //$this->output->enable_profiler(TRUE);
    }

    public function __construct()
	{
	parent::__construct();
		
	$this->load->model('Crud_model');
    }
    
        /*Insert*/
	public function show() {
        
        $this->Crud_model->get_data();
        echo 'it works';
	
    }
	
}
?>