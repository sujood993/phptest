<?php
session_start();
defined('BASEPATH') or exit('No direct script access allowed');
class Notices extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('Notices_model', '', true);
        $this->load->model('Accounts_model', '', true);
        $this->load->model('Main_model', '', true);
    }
    public function DeleteAll()
    {
        if ($this->session->userdata('logged_in2')) {
            $this->Notices_model->DeleteAll();
            $data['msgread'] = $this->Accounts_model->MsgRows();
            $data['Notifrows'] = $this->Accounts_model->Notifrows();
            redirect('Notices/LoginSessions');
        } else {
            $this->load->view('main/login');
        }
    }
    public function All()
    {
        if ($this->session->userdata('logged_in2')) {
            $branch_id = $this->uri->segment(3);
            $data['subview'] = 'main/notifications';
            $data['msgread'] = $this->Accounts_model->MsgRows();
            $data['Notifrows'] = $this->Accounts_model->Notifrows();
            $data['result'] = $this->Notices_model->Notifications();
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }
    public function DeleteNotifications()
    {
        if ($this->session->userdata('logged_in2')) {
            $data['msgread'] = $this->Accounts_model->MsgRows();
            $data['Notifrows'] = $this->Accounts_model->Notifrows();
            $this->Notices_model->DeleteNotifications();
            redirect('Notices/All');
        } else {
            $this->load->view('main/login');
        }
    }
}
