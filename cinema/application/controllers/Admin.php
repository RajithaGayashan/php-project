<?php


class Admin extends CI_Controller{
    public function index()
    {
        $this->load->view('Admin/dashboard');
    }
    public function AddPost()
    {
        $this->load->view('Admin/Add');
    }
 
    public function addfilm()
    {
        $this->form_validation->set_rules('film', 'Movie Name', 'required');
        $this->form_validation->set_rules('time', 'Time', 'required');
        $this->form_validation->set_rules('cata', 'Movie Catagory', 'required');


        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('Add');
        }
        else
        {
            $this->load->model('Model_user');
            $response = $this->Model_user->add();
            if($response){
                $this->session->set_flashdata('msg','Movie added successfully..please Login');
                redirect('Home/login');
            }else{
                $this->session->set_flashdata('msg','Something went wrong');
                redirect('Admin/Addpost');
            }
        }
    }


    public function films()
    {
        $this->load->model('Model_user');
        $data['data'] = $this->Model_user->getitem();

        $this->load->view('Admin/films',$data);
    }


}