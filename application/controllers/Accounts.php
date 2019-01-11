<?php
session_start();
defined('BASEPATH') or exit('No direct script access allowed');
class Accounts extends CI_Controller
{
    public function __construct()
    {
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it
        $this->load->database();
        $this->load->library('session');
        $this->load->model('Accounts_model', '', true);
        $this->load->model('Main_model', '', true);
    }
    public function checkemail()
    {
        $this->load->model('Accounts_model');
        $data['msgread'] = $this->Accounts_model->MsgRows();
        $data['Notifrows'] = $this->Accounts_model->Notifrows();
        $result = $this->Accounts_model->checkemail2();
        if ($result) {
            $data["error3"] = "The sign up email is already registered";
            redirect('Accounts/Faild/');
        } else {
            redirect('Projects/ALL_Projects/');
        }
    }
    public function Sucess()
    {
        $data['msgread'] = $this->Accounts_model->MsgRows();
        $data['Notifrows'] = $this->Accounts_model->Notifrows();
        $data['sucess'] = 'done added account';
        $this->load->view('main/login', $data);
    }
    public function Faild()
    {
        $data['msgread'] = $this->Accounts_model->MsgRows();
        $data['Notifrows'] = $this->Accounts_model->Notifrows();
        $data['faild'] = 'done added account';
        $this->load->view('main/login', $data);
    }
    public function update_profile($id)
    {
        if ($this->session->userdata('logged_in')) {
            $id = $this->uri->segment(3);
            $data['msgread'] = $this->Accounts_model->MsgRows();
            $data['Notifrows'] = $this->Accounts_model->Notifrows();
            $data['contact'] = $this->Main_model->contact();
            $data['subview'] = 'main/update_profile';
            $id2 = $this->session->userdata('account_id');
            $data['result'] = $this->Accounts_model->account_profile($id);
            if ($this->input->post('update')) {
                $id = $this->uri->segment(3);
                $this->Accounts_model->update_profile($id);
                redirect('Accounts/My_profile');
            }
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }
    public function Send_Message()
    {
        if ($this->session->userdata('logged_in2')) {
            $id = $this->uri->segment(3);
            $data['msgread'] = $this->Accounts_model->MsgRows();
            $data['Notifrows'] = $this->Accounts_model->Notifrows();
            $data['contact'] = $this->Main_model->contact();
            $data['subview'] = 'main/send_msg';
            //$data['rows'] = $this->Notices_model->NotificationsRows();
            //$data['result'] = $this->Projects_model->accountdetails($id);
            if ($this->input->post('send')) {
                $this->Accounts_model->send_to();
                redirect('Accounts/MessagesSent');
            }
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }
    public function confirm()
    {
        $id = $this->uri->segment(3);
        $data['msgread'] = $this->Accounts_model->MsgRows();
        $data['Notifrows'] = $this->Accounts_model->Notifrows();
        $this->load->model('Accounts_model');
        $this->Accounts_model->confirm($id);
        redirect('Maincontroller/Login/');
    }
    public function checklogin()
    {
        $this->load->model('Accounts_model');
        $result = $this->Accounts_model->login();
        $data['msgread'] = $this->Accounts_model->MsgRows();
        $data['Notifrows'] = $this->Accounts_model->Notifrows();
        if (!$result) {
            $data["error"] = "username or password is inccoorect";
            $this->load->view('main/login', $data);
        } else {
            redirect('Projects/ALL_Projects/');
        }
    }
    public function My_profile()
    {
        if ($this->session->userdata('logged_in')) {
            $data['msgread'] = $this->Accounts_model->MsgRows();
            $data['Notifrows'] = $this->Accounts_model->Notifrows();
            $data['contact'] = $this->Main_model->contact();
            $data['subview'] = 'main/my_profile';
            $this->load->view('index', $data);
        } else {
            redirect('Projects/Error');
        }
    }
    public function Messages()
    {
        if ($this->session->userdata('logged_in')) {
            $data['contact'] = $this->Main_model->contact();
            $data['msgread'] = $this->Accounts_model->MsgRows();
            $data['Notifrows'] = $this->Accounts_model->Notifrows();
            $data['result'] = $this->Accounts_model->Allrecived();
            $data['subview'] = 'main/messages';
            $this->load->view('index', $data);
        } else {
            redirect('Projects/Error');
        }
    }
    function delete_Msgr($id)
    {
        if ($this->session->userdata('logged_in')) {
            $id = $this->uri->segment(3);
            $result = $this->Accounts_model->delete_Msg($id);
            redirect('Accounts/Messages');
        } else {
            $this->load->view('main/login');
        }
    }
    function delete_Msgs($id)
    {
        if ($this->session->userdata('logged_in')) {
            $id = $this->uri->segment(3);
            $result = $this->Accounts_model->delete_Msg($id);
            redirect('Accounts/MessagesSent');
        } else {
            $this->load->view('main/login');
        }
    }
    public function MessagesSent()
    {
        if ($this->session->userdata('logged_in')) {
            $data['msgread'] = $this->Accounts_model->MsgRows();
            $data['Notifrows'] = $this->Accounts_model->Notifrows();
            $data['contact'] = $this->Main_model->contact();
            $data['result'] = $this->Accounts_model->Allsent();
            $data['subview'] = 'main/messages_sent';
            $this->load->view('index', $data);
        } else {
            redirect('Projects/Error');
        }
    }
    public function Notifications()
    {
        if ($this->session->userdata('logged_in')) {
            $data['msgread'] = $this->Accounts_model->MsgRows();
            $data['Notifrows'] = $this->Accounts_model->Notifrows();
            $data['contact'] = $this->Main_model->contact();
            $data['result'] = $this->Accounts_model->Notifications();
            $data['subview'] = 'main/notifications';
            $this->load->view('index', $data);
        } else {
            redirect('Projects/Error');
        }
    }
    public function Messages_Details()
    {
        if ($this->session->userdata('logged_in')) {
            $id = $this->uri->segment(3);
            $data['msgread'] = $this->Accounts_model->MsgRows();
            $data['Notifrows'] = $this->Accounts_model->Notifrows();
            $data['msgrows'] = $this->Accounts_model->MsgRows();
            $data['contact'] = $this->Main_model->contact();
            $data['replay'] = $this->Accounts_model->view_replay($id);
            $data['result'] = $this->Accounts_model->view_msg($id);
            $data['subview'] = 'main/messages_details';
            $this->load->view('index', $data);
        } else {
            redirect('Projects/Error');
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }
}
?>