

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
        $this->load->model('Projects_model', '', true);
        $this->load->model('Notices_model', '', true);
        $this->load->model('Main_model', '', true);
    }
    public function All()
    {
        if ($this->session->userdata('logged_in2')) {
            $data['subview'] = 'main/projects';
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data['result'] = $this->Projects_model->All();
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }
    public function Participate_Projects()
    {
        if ($this->session->userdata('logged_in2')) {
            $data['subview'] = 'main/participate_projects';
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data['result'] = $this->Projects_model->Participate();
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }
    public function PendingJoin_Projects()
    {
        if ($this->session->userdata('logged_in2')) {
            $data['subview'] = 'main/pendingjoin_projects';
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data['result'] = $this->Projects_model->PendingJoin_Project();
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }

    public function Join_Projects()
    {
        if ($this->session->userdata('logged_in2')) {
            $data['subview'] = 'main/join_projects';
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data['result'] = $this->Projects_model->Join_Project();
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }
    public function Pending_Projects()
    {
        if ($this->session->userdata('logged_in2')) {
            $data['subview'] = 'main/pending_projects';
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data['result'] = $this->Projects_model->pending_projects();
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }
    public function Project_details()
    {
        if ($this->session->userdata('logged_in2')) {
            $id = $this->uri->segment(3);
            $data['subview'] = 'main/project_details';
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data['result'] = $this->Projects_model->Projectdetails($id);
            $data['file'] = $this->Projects_model->Projectfile($id);
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }
    public function Send_Messagep()
    {
        if ($this->session->userdata('logged_in2')) {
            $id = $this->uri->segment(3);
            $data['subview'] = 'main/account_messages';
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data['result'] = $this->Projects_model->accountdetails($id);
            if ($this->input->post('send')) {
                $this->Projects_model->send_to($id);
                redirect('Maincontroller/ALLSent');
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
            $data['subview'] = 'main/account_messages';
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data['result'] = $this->Projects_model->accountdetails($id);
            if ($this->input->post('send')) {
                $this->Projects_model->send_to($id);
                redirect('Maincontroller/ALLSent');
            }
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }

    public function ALLreceived()
    {
        if ($this->session->userdata('logged_in2')) {
            $data['subview'] = 'main/recivied';
             $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data['result'] = $this->Projects_model->Allrecived();
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }
    public function Replay_Message()
    {
        if ($this->session->userdata('logged_in2')) {
            $id = $this->uri->segment(3);
            $msg_id = $this->uri->segment(4);
            $data['subview'] = 'main/replay_msg';
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data['result'] = $this->Projects_model->accountdetails($id);
            if ($this->input->post('send')) {
                $this->Projects_model->replay_to($msg_id);
                redirect('Accounts/Organizations_Accounts');
            }
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }

    public function View_Msg()
    {
        if ($this->session->userdata('logged_in2')) {
            $id = $this->uri->segment(3);
            $data['subview'] = 'main/view_msg';
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data['replay'] = $this->Projects_model->view_replay($id);
            $data['result'] = $this->Projects_model->view_msg($id);

            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }

    public function Delete_Msgsent()
    {
        if ($this->session->userdata('logged_in2')) {
            $msg_id = $this->uri->segment(3);
            $data['result'] = $this->Projects_model->Delete_Msgsent($msg_id);
            redirect('Maincontroller/ALLSent');
        } else {
            $this->load->view('main/login');
        }
    }

    public function Delete_Msgsentr()
    {
        if ($this->session->userdata('logged_in2')) {
            $msg_id = $this->uri->segment(3);
            $data['result'] = $this->Projects_model->Delete_Msgsent($msg_id);
            redirect('Projects/ALLreceived');
        } else {
            $this->load->view('main/login');
        }
    }

    public function Approve_Project()
    {
        if ($this->session->userdata('logged_in2')) {
            $id = $this->uri->segment(3);
            $id2 = $this->uri->segment(4);
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data['result'] = $this->Projects_model->approve_project($id, $id2);
            redirect('Projects/send_approve_email/' . $id2);

            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }
    public function send_approve_email($id)
    {
        if ($this->session->userdata('logged_in2')) {

            $id = $this->uri->segment(3);
            
            $data['result'] = $this->Projects_model->send_approve_email($id);
            redirect('Projects/Pending_Projects/');
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }
    public function Approve_Join()
    {
        if ($this->session->userdata('logged_in2')) {
            $id = $this->uri->segment(3);
            $id2 = $this->uri->segment(4);
               $data['msgrow'] = $this->Projects_model->MsgRows();
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data['result'] = $this->Projects_model->Approve_Join($id, $id2);
            redirect('Projects/send_approve_email_join/' . $id2);

            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }
    public function send_approve_email_join($id)
    {
        if ($this->session->userdata('logged_in2')) {

            $id = $this->uri->segment(3);
            $data['rows'] = $this->Notices_model->NotificationsRows();
            $data['result'] = $this->Projects_model->send_approve_email_join($id);
            redirect('Projects/PendingJoin_Projects/');
            $this->load->view('index', $data);
        } else {
            $this->load->view('main/login');
        }
    }
    public function Delete_Project()
    {
        if ($this->session->userdata('logged_in2')) {
            $id = $this->uri->segment(3);
            $data['result'] = $this->Projects_model->delete_project($id);
            redirect('Projects/All/');
        } else {
            $this->load->view('main/login');
        }
    }

    public function Delete_PendinJoin()
    {
        if ($this->session->userdata('logged_in2')) {
            $id = $this->uri->segment(3);
            $data['result'] = $this->Projects_model->Delete_Join($id);
            redirect('Projects/PendingJoin_Projects/');
        } else {
            $this->load->view('main/login');
        }
    }
    public function Delete_Join()
    {
        if ($this->session->userdata('logged_in2')) {
            $id = $this->uri->segment(3);
            $data['result'] = $this->Projects_model->Delete_Join($id);
            redirect('Projects/Join_Projects/');
        } else {
            $this->load->view('main/login');
        }
    }
    public function Delete_Participate()
    {
        if ($this->session->userdata('logged_in2')) {
            $id = $this->uri->segment(3);
            $data['result'] = $this->Projects_model->delete_participate($id);
            redirect('Projects/Participate_Projects/');
        } else {
            $this->load->view('main/login');
        }
    }

    public function Delete_PublishProject()
    {
        if ($this->session->userdata('logged_in2')) {
            $id = $this->uri->segment(3);
            $data['result'] = $this->Projects_model->delete_project($id);
            redirect('Projects/All/');
        } else {
            $this->load->view('main/login');
        }
    }
}
?>