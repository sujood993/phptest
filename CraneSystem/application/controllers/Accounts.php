


<?php
session_start();
defined('BASEPATH') or exit('No direct script access allowed');
class Accounts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('Projects_model', '', true);
        $this->load->model('Main_model', '', true);
        $this->load->model('Notices_model', '', true);
        $this->load->model('Accounts_model', '', true);
    }
    public function Organizations_Accounts()
    {
        if ($this->session->userdata('logged_in2')) {
            $data['subview'] = 'main/organization_accounts';
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data['result'] = $this->Accounts_model->Organizations();
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }

    public function Persons_Accounts()
    {
        if ($this->session->userdata('logged_in2')) {
            $data['subview'] = 'main/person_accounts';
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data['result'] = $this->Accounts_model->Persons();
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }


    public function Delete_AccountPerson()
    {
        if ($this->session->userdata('logged_in2')) {
            $id = $this->uri->segment(3);
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['result'] = $this->Accounts_model->Delete_Account($id);
            redirect('Accounts/Persons_Accounts/');
        } else {
            $this->load->view('main/login');
        }
    }

    public function Block_AccountPerson()
    {
        if ($this->session->userdata('logged_in2')) {
            $id = $this->uri->segment(3);
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['result'] = $this->Accounts_model->Block_Account($id);
            redirect('Accounts/Persons_Accounts/');
        } else {
            $this->load->view('main/login');
        }
    }

    public function Unblock_AccountPerson()
    {
        if ($this->session->userdata('logged_in2')) {
            $id = $this->uri->segment(3);
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['result'] = $this->Accounts_model->Unblock_Account($id);
            redirect('Accounts/Persons_Accounts/');
        } else {
            $this->load->view('main/login');
        }
    }

    public function Delete_AccountOrg()
    {
        if ($this->session->userdata('logged_in2')) {
            $id = $this->uri->segment(3);
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['result'] = $this->Accounts_model->Delete_Account($id);
            redirect('Accounts/Organizations_Accounts/');
        } else {
            $this->load->view('main/login');
        }
    }

    public function Block_AccountOrg()
    {
        if ($this->session->userdata('logged_in2')) {
            $id = $this->uri->segment(3);
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['result'] = $this->Accounts_model->Block_Account($id);
            redirect('Accounts/Organizations_Accounts/');
        } else {
            $this->load->view('main/login');
        }
    }

    public function Unblock_AccountOrg()
    {
        if ($this->session->userdata('logged_in2')) {
            $id = $this->uri->segment(3);
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['result'] = $this->Accounts_model->Unblock_Account($id);
            redirect('Accounts/Organizations_Accounts/');
        } else {
            $this->load->view('main/login');
        }
    }


}
?>