<?php
session_start();
defined('BASEPATH') or exit('No direct script access allowed');
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
          $this->load->model('Projects_model', '', true);
        $this->load->model('Users_model', '', true);
        $this->load->model('Notices_model', '', true);
        $this->load->model('Main_model', '', true);
    }
    public function All()
    {
        if ($this->session->userdata('logged_in2')) {
            $data['subview'] = 'main/users';
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data['result'] = $this->Users_model->AllUsers();
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }
    public function NewUser()
    {
        if ($this->session->userdata('logged_in2')) {
            $data['subview'] = 'main/users';
            if ($this->input->post('save')) {
                $this->Users_model->NewUser();
                redirect('Users/All');
            }
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }
    public function Profile($admin_id)
    {
        if ($this->session->userdata('logged_in2')) {
            //`account_id`, `fullname`, `register_date`, `email`, `phone`, `password`, `active`, `pwd`, `username`, `role_id`
            $admin_id = $this->uri->segment(3);
            $data['subview'] = 'main/profile';
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['result'] = $this->Users_model->GetUserDetails($admin_id);
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }
    public function UpdateProfile($admin_id)
    {
        if ($this->session->userdata('logged_in2')) {
            $admin_id = $this->uri->segment(3);
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            if ($this->input->post('save_update')) {
                $this->Users_model->UpdateProfile($admin_id);
                redirect('Users/All/');
            }
        } else {
            $this->load->view('main/login');
        }
    }
    public function DeleteUser($admin_id)
    {
        if ($this->session->userdata('logged_in2')) {
            $admin_id = $this->uri->segment(3);
            $this->Users_model->DeleteUser($admin_id);
            redirect('Users/All');
        } else {
            $this->load->view('main/login');
        }
    }
}
