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
          $this->load->model('Projects_model', '', true);
        $this->load->model('Notices_model', '', true);
        $this->load->model('Accounts_model', '', true);
        $this->load->model('Main_model', '', true);

    }

    public function DeleteAll()
    {
        if ($this->session->userdata('logged_in2')) {
            $this->Notices_model->DeleteAll();
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
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data['read'] = $this->Notices_model->notifiread();
            $data['result'] = $this->Notices_model->Notifications();
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }
    public function DeleteNotifications()
    {
        if ($this->session->userdata('logged_in2')) {
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $this->Notices_model->DeleteNotifications();
            redirect('Notices/All');
        } else {
            $this->load->view('main/login');
        }
    }
}
