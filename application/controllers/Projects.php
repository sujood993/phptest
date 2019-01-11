<?php
session_start();
defined('BASEPATH') or exit('No direct script access allowed');
class Projects extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('Main_model', '', true);
        $this->load->model('Projects_model', '', true);
         $this->load->model('Accounts_model', '', true);
    }
    public function ALL_Projects()
    {
        if ($this->session->userdata('logged_in')) {
            $data['msgread'] = $this->Accounts_model->MsgRows();
            $data['Notifrows'] = $this->Accounts_model->Notifrows();
            $data['contact'] = $this->Main_model->contact();
            $data['result'] = $this->Projects_model->projects();
            $data['subview'] = 'main/Projects';
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }
    public function Search()
    {
        if ($this->session->userdata('logged_in')) {
            $data['msgread'] = $this->Accounts_model->MsgRows();
            $data['Notifrows'] = $this->Accounts_model->Notifrows();
            $data['contact'] = $this->Main_model->contact();
            $data['result'] = $this->Projects_model->search();
            $data['subview'] = 'main/Projects';
            if ($data['result']) {
                $this->load->view('index', $data);
            } else {
                $data['error'] = "No results found";
                $this->load->view('index', $data);
            }
        } else {
            redirect('Projects/Error');
        }
    }
    function delete_project($id)
    {
        if ($this->session->userdata('logged_in')) {
            $id = $this->uri->segment(3);
            $result = $this->Projects_model->delete_project($id);
            if ($result) {
                redirect('Projects/My_Projects/');
            }
        } else {
            $this->load->view('main/login');
        }
    }
    public function Projects_Details()
    {
        if ($this->session->userdata('logged_in')) {
            $data['msgread'] = $this->Accounts_model->MsgRows();
            $data['Notifrows'] = $this->Accounts_model->Notifrows();
            $data['contact'] = $this->Main_model->contact();
            $data['subview'] = 'main/project-details';
            $this->load->view('index', $data);
        } else {
            redirect('Projects/Error');
        }
    }
    public function My_Projects()
    {
        if ($this->session->userdata('logged_in')) {
            $data['msgread'] = $this->Accounts_model->MsgRows();
            $data['Notifrows'] = $this->Accounts_model->Notifrows();
            $data['contact'] = $this->Main_model->contact();
            $data['result'] = $this->Projects_model->My_Projects();
            $data['subview'] = 'main/my_projects';
            $this->load->view('index', $data);
        } else {
            redirect('Projects/Error');
        }
    }
    public function New_Project()
    {
        if ($this->session->userdata('logged_in')) {
            $data['msgread'] = $this->Accounts_model->MsgRows();
            $data['Notifrows'] = $this->Accounts_model->Notifrows();
            $data['contact'] = $this->Main_model->contact();
            $data['subview'] = 'main/new_project';
            $this->load->view('index', $data);
        } else {
            redirect('Projects/Error');
        }
    }
    public function Join_Project()
    {
        if ($this->session->userdata('logged_in')) {
            $project_id = $this->uri->segment(3);
            $data['msgread'] = $this->Accounts_model->MsgRows();
            $data['Notifrows'] = $this->Accounts_model->Notifrows();
            $data['contact'] = $this->Main_model->contact();
            if ($this->input->post('save')) {
                $data['result'] = $this->Projects_model->JoinProject($project_id);
                redirect('Projects/ALL_Projects');
            }
            $data['subview'] = 'main/join_project';
            $this->load->view('index', $data);
        } else {
            redirect('Projects/Error');
        }
    }
    public function Participate()
    {
        if ($this->session->userdata('logged_in')) {
            $data['subview'] = 'main/participate_projects';
            $data['msgread'] = $this->Accounts_model->MsgRows();
            $data['Notifrows'] = $this->Accounts_model->Notifrows();
            $data['contact'] = $this->Main_model->contact();
            if ($this->input->post('save')) {
                $data['result'] = $this->Projects_model->Participate();
                redirect('Projects/ALL_Projects');
            }
            $this->load->view('index', $data);
        } else {
            redirect('Projects/Error');
        }
    }
    public function SucessProject()
    {
        if ($this->session->userdata('logged_in')) {
            $data['contact'] = $this->Main_model->contact();
            $data['msgread'] = $this->Accounts_model->MsgRows();
            $data['Notifrows'] = $this->Accounts_model->Notifrows();
            $data['Sucess'] = "You submitted the form,waiting to approve from crane ";
            $data['subview'] = 'main/new_project';
            $this->load->view('index', $data);
        } else {
            redirect('Projects/Error');
        }
    }
    public function Add_Project()
    {
        if ($this->session->userdata('logged_in')) {
            $data['msgread'] = $this->Accounts_model->MsgRows();
            $data['Notifrows'] = $this->Accounts_model->Notifrows();
            $data['contact'] = $this->Main_model->contact();
            if ($this->input->post('save')) {
                $data['result'] = $this->Projects_model->AddProject();
                redirect('Projects/SucessProject');
            }
        } else {
            redirect('Projects/Error');
        }
    }
    public function Add_Comment()
    {
        if ($this->session->userdata('logged_in')) {
            $project_id = $this->uri->segment(3);
            $data['msgread'] = $this->Accounts_model->MsgRows();
            $data['Notifrows'] = $this->Accounts_model->Notifrows();
            $data['contact'] = $this->Main_model->contact();
            if ($this->input->post('save')) {
                $data['result'] = $this->Projects_model->Add_Comment();
                redirect('Projects/Projects_Details/' . $project_id);
            }
        } else {
            redirect('Projects/Error');
        }
    }
    public function Sucess()
    {
        if ($this->session->userdata('logged_in')) {
            $data['msgread'] = $this->Accounts_model->MsgRows();
            $data['Notifrows'] = $this->Accounts_model->Notifrows();
            $data['contact'] = $this->Main_model->contact();
            $data['subview'] = 'main/new_project';
            $this->load->view('index', $data);
        } else {
            redirect('Projects/Error');
        }
    }
    public function Error()
    {
        $data['subview'] = 'main/error';
        $data['msgread'] = $this->Accounts_model->MsgRows();
        $data['Notifrows'] = $this->Accounts_model->Notifrows();
        $data['contact'] = $this->Main_model->contact();
        $this->load->view('index', $data);
    }
}
