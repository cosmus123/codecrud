<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function index()
	{   
           
       // $this->output->enable_profiler(TRUE);
    }

    public function __construct()
	{
            parent::__construct();
                
            /*load Model*/
            $this->load->model('Crud_model');
    }
    
	public function insert() {
        
        $first_name=$this->input->post('fname');
        $last_name=$this->input->post('lname');
        $gender=$this->input->post('gender');
        $age=$this->input->post('age');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $education = $this->input->post('education');

        $this->form_validation->set_rules('fname', 'First name', 'required');
        $this->form_validation->set_rules('lname', 'Last name', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('age', 'Age', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('education', 'Education', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('index.php/table_data/'));
        }else{ 
            $this->session->set_flashdata('success', 'Information validated and created into form !');
            
            $this->Crud_model->create_users([
                'first_name' => $first_name,
                'last_name' => $last_name,
                'gender' => $gender,
                'age' => $age,
                'email' => $email,
                'phone' => $phone,
                'education' => $education
            ]);
            redirect(base_url('index.php/table_data/'));

        }
        // $this->output->enable_profiler(TRUE);
	}
    
    public function update($id){
       
        $data['datas'] = $this->Crud_model->get_data_row_id($id);

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        $this->load->view('update_view',$data);

        $this->output->enable_profiler(true);

    }

    public function update_data($id){

        $data_table = array(
            'first_name' => $this->input->post('fname'),
            'last_name' => $this->input->post('lname'),
            'gender' => $this->input->post('gender'),
            'age' => $this->input->post('age'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'education' =>  $this->input->post('education')
                    );

            $this->form_validation->set_rules('fname', 'First name', 'required');
            $this->form_validation->set_rules('lname', 'Last name', 'required');
            $this->form_validation->set_rules('gender', 'Gender', 'required');
            $this->form_validation->set_rules('age', 'Age', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('education', 'Education', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('index.php/crud/update/'.$id));
        }else{ 
            $this->session->set_flashdata('success', 'The form has been validated and updated !');

            $this->db->where('id', $id);
            $this->db->update('users', $data_table);

            redirect(base_url('index.php/crud/update/'.$id));

        }
    }

    // public function read(){
    //     $data['data'] = $this->Crud_model->get_data();

    //     $this->load->view('inc/header_view');
    //     $this->load->view('read_view',$data);

    //     $this->load->view('inc/footer_view');
    // }

    public function delete($id)
   {
       $item = $this->Crud_model->delete_data($id);
       
       $this->session->set_flashdata('delete', 'The row has been deleted!');

       $this->output->set_header('Location: ' . site_url('table_data'));


      // redirect('table_data');
   }

}

?>