<?php
session_start();
defined('BASEPATH') or exit('No direct script access allowed');
class Maincontroller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('Projects_model', '', true);
        $this->load->model('Main_model', '', true);
        $this->load->model('Notices_model', '', true);
    }
    public function index()
    {
        if ($this->session->userdata('logged_in2')) {
            $data['subview'] = 'main/default';
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data['result'] = $this->Notices_model->NotificationsDay();
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }
    public function ALLSent()
    {
        if ($this->session->userdata('logged_in2')) {
            $data['subview'] = 'main/sent';
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data['result'] = $this->Main_model->Allsent();
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }

    public function MyProfile($admin_id)
    {
        if ($this->session->userdata('logged_in2')) {
            $admin_id = $this->uri->segment(3);
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data['subview'] = 'main/myprofile';
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }

    public function UpdateMyProfile($admin_id)
    {
        if ($this->session->userdata('logged_in2')) {
            $admin_id = $this->uri->segment(3);
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            if ($this->input->post('save_update')) {
                $this->Main_model->UpdateMyProfile($admin_id);
                redirect('Users/profile/' . $admin_id);
            }
        } else {
            $this->load->view('main/login');
        }
    }
    public function CheckPassword()
    {
        if ($this->session->userdata('logged_in2')) {
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $admin_id = $this->session->userdata('admin_id');
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password');
            if ($this->input->post('change')) {
                $this->load->model('main_model');
                $result = $this->main_model->CheckPassword();
                if (!$result) {
                    redirect('Maincontroller/Failed/' . $admin_id);
                } else {
                    $this->main_model->ChangePassword($new_password);
                    redirect('Maincontroller/Success/' . $admin_id);
                }
            }
        } else {
            $this->load->view('main/login');
        }
    }
    public function Failed()
    {
        if ($this->session->userdata('logged_in2')) {
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data["error"] = "?? ????? ???? ???? ????? ?????? ???? ?????? ????????? ??? ????";
            $admin_id = $this->session->userdata('admin_id');
            $data['subview'] = 'main/profile';
            $data['result'] = $this->Main_model->MyProfile();
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }
    public function Success()
    {
        if ($this->session->userdata('logged_in2')) {
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data["success"] = "?? ????? ???? ?????? ?????";
            $admin_id = $this->session->userdata('admin_id');
            $data['subview'] = 'main/profile';
            $data['result'] = $this->Main_model->MyProfile();
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }
    // login system functions start from here
    public function login()
    {
        $this->load->view('main/login');
    }


    public function checklogin()
    {
        $this->load->model('main_model');
        $result = $this->main_model->login();
        if (!$result) {
            $data["error"] = "??? ???????? ?? ???? ?????? ??? ?????";
            $this->load->view('main/login', $data);
        } else {
            if ($this->session->userdata('rule_id') == 4) {
                redirect('Maincontroller/specialist');
            } else {
                redirect('');
            }
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }
    function frgpsw()
    {
        $this->load->view('main/forgetPassword');
    }
    public function checkemail()
    {
        $this->load->model('main_model');
        $result = $this->main_model->checkemail();
        if (!$result) {
            $data["error"] = "?????? ?????????? ?????? ?? ??? ?????? ?????";
            $this->load->view('main/forgetPassword', $data);
        } else {
            redirect('Maincontroller/Random_password');
        }
    }
    function Random_password()
    {
        $admin_id = $this->session->userdata('admin_id');
        $this->load->model('main_model');
        $result = $this->main_model->Random_password($admin_id);
        $data["success"] = "?? ????? ???? ?????? ??????? ?????? ??????????";
        $this->load->view('main/login', $data);
    }
}
