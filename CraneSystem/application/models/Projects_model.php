<?php
class Projects_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    function All()
    {
        $array = array('projects.approve' => 1);
        $this->db->select('*');
        $this->db->from('projects');
        $this->db->join('accounts', 'projects.account_id  = accounts.account_id ');
        $this->db->where($array);
        $this->db->order_by('project_id', 'desc');
        //$this->db->where('date', date('Y-m-d'));
        //$this->db->order_by('time_id', 'asc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function Participate()
    {
        $this->db->select('*');
        $this->db->from('participate_project');
        $this->db->join('accounts',
            'participate_project.account_id  = accounts.account_id ');
        $this->db->order_by('participate_id', 'desc');
        //$this->db->where('date', date('Y-m-d'));
        //$this->db->order_by('time_id', 'asc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function Participatedetails()
    {
        $id = $this->uri->segment(3);
        $array = array('participate_id' => $id);
        $this->db->select('*');
        $this->db->from('participate_project');
        $this->db->join('accounts',
            'participate_project.account_id  = accounts.account_id ');
        $this->db->where($array);
        $this->db->order_by('participate_id', 'desc');
        //$this->db->where('date', date('Y-m-d'));
        //$this->db->order_by('time_id', 'asc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function PendingJoin_Project()
    {
        $array = array('join_project.approve' => 0);
        $this->db->select('*');
        $this->db->from('join_project');
        $this->db->join('accounts', 'join_project.account_id  = accounts.account_id ');
        $this->db->join('projects', 'join_project.project_id = projects.project_id ');
        $this->db->where($array);
        $this->db->order_by('join_id', 'desc');
        //$this->db->where('date', date('Y-m-d'));
        //$this->db->order_by('time_id', 'asc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function Join_Project()
    {
        $array = array('join_project.approve' => 1);
        $this->db->select('*');
        $this->db->from('join_project');
        $this->db->join('accounts', 'join_project.account_id  = accounts.account_id ');
        $this->db->join('projects', 'join_project.project_id = projects.project_id ');
        $this->db->where($array);
        $this->db->order_by('join_id', 'desc');
        //$this->db->where('date', date('Y-m-d'));
        //$this->db->order_by('time_id', 'asc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function Projectdetails($id)
    {
        $id = $this->uri->segment(3);
        $array = array('project_id' => $id);
        $this->db->select('*');
        $this->db->from('projects');
        $this->db->join('accounts', 'accounts.account_id = projects.account_id');
        $this->db->where($array);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function accountdetails($id)
    {
        $id = $this->uri->segment(3);
        $array = array('account_id' => $id);
        $this->db->select('*');
        $this->db->from('accounts');
        $this->db->where($array);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
     function MsgRows()
    {
        $this->db->select('*');
        $this->db->from('sender');
             $this->db->where('type_msg', "Account");
        $this->db->where('read_msg', 0);
           $this->db->where('view_admin', 1); 
        $this->db->order_by('msg_id', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return false;
        }
    }
    function view_msg($id)
    {
        $id = $this->uri->segment(3);
        $array = array('msg_id' => $id);
        $this->db->select('*');
        $this->db->from('sender');
        $this->db->where($array);
        $query = $this->db->get();
                         $data = array(
            'read_msg' => 1,
);
   $this->db->where($array);
 $this->db->update('sender', $data);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function Allrecived()
    {
        $this->db->select('*');
        $this->db->from('sender');
        //$this->db->join('accounts', 'sender.account_id  = accounts.account_id ');
        $this->db->order_by('sender.message_date_time', 'desc');
        //$this->db->where('sender.message_date_time', date('Y-m-d h:i:sa'));
        $this->db->where('view_admin', 1);
        $this->db->where('type_msg', 'Account');
        //$this->db->order_by('time_id', 'asc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function view_replay($id)
    {
        $id = $this->uri->segment(3);
        $array = array('msg_id' => $id);
        $this->db->select('*');
        $this->db->from('replay');
        $this->db->where($array);
        $this->db->order_by('message_date_time', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function Delete_Msgsent($msg_id)
    {
        $msg_id = $this->uri->segment(3);
        $data = array('view_admin' => 0, );
        $this->db->where('msg_id', $msg_id);
        $this->db->update('sender', $data);
    }
    function Projectfile($id)
    {
        $id = $this->uri->segment(3);
        $array = array('project_id' => $id);
        $this->db->select('*');
        $this->db->from('projectfiles_tb');
        $this->db->where($array);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function pending_projects()
    {
        $array = array('projects.approve' => 0);
        $this->db->select('*');
        $this->db->from('projects');
        $this->db->join('accounts', 'projects.account_id  = accounts.account_id ');
        $this->db->where($array);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function approve_project($id,$id2)
    {
        $id2 = $this->uri->segment(4);
        $data = array(
            'approve' => 1,
            'approve_by' => $this->session->userdata['username'],
            'date' => date('Y-m-d'),
            );
        $this->db->where('project_id', $id);
        $this->db->update('projects', $data);
        //`not_id`, `fun_name`, `user_id`, `username`, `date`, `account_type`
        $note = array(
            'username' => $this->session->userdata('username'),
            'fun_name' => 'CRANE has approved your project idea.',
            'user_id' => $id2,
            'account_type' => 'Account',
            'date' => date('Y-m-d H:i:s'),
            );
        $this->db->insert('notif_tb', $note);
        return true;
    }
    function Approve_Join($id,$id2)
    {     $id2 = $this->uri->segment(4);
        $data = array(
            'approve' => 1,
            'approve_by' => $this->session->userdata['username'],
            'date' => date('Y-m-d'),
            );
        $this->db->where('join_id', $id);
        $this->db->update('join_project', $data);
        $note = array(
            'username' => $this->session->userdata('username'),
            'fun_name' => 'CRANE has approved your request to join the project.',
            'user_id' => $id2,
            'account_type' => 'Account',
            'date' => date('Y-m-d H:i:s'),
            );
        $this->db->insert('notif_tb', $note);
        return true;
    }
    function send_to()
    {
        $id = $this->uri->segment(3);
        //`msg_id`, `admin_id`, `username`, `account_id`, `account_name`, `subject`, `message`, `type_msg`, `message_date_time`
        $data = array(
            'admin_id' => $this->session->userdata('admin_id'),
            'username' => $this->session->userdata('username'),
            'account_id' => $this->uri->segment(3),
            'account_name' => $this->input->post('account_name'),
            'subject' => $this->input->post('subject'),
            'message' => $this->input->post('message'),
            'type_msg' => "Admin",
            'message_date_time' => date('Y-m-d H:i:s'),
            'view_admin' => 1,
            'view_account' => 1,
            );
        $this->db->insert('sender', $data);
        /*$note = array(
        'branch_id' => $this->session->userdata('branch_id'),
        'admin_name' => $this->session->userdata('admin_name'),
        'notification_action' => '',
        'description' => 'ÇÖÇÝÉ ãáÝ ááãÓÊÎÏã: ' . $this->input->post('admin_name'),
        'time' => date('Y-m-d H:i:s'),
        );
        $this->db->insert('notifications_tb', $note);*/
        return true;
    }
    function replay_to()
    {
        $id = $this->uri->segment(3);
        $msg_id = $this->uri->segment(4);
        //`msg_id`, `admin_id`, `username`, `account_id`, `account_name`, `subject`, `message`, `type_msg`, `message_date_time`
        $data = array(
            'admin_id' => $this->session->userdata('admin_id'),
            'username' => $this->session->userdata('username'),
            'account_id' => $id,
            'msg_id' => $msg_id,
            'subject' => $this->input->post('subject'),
            'message' => $this->input->post('message'),
            'type_msg' => "Admin",
            'message_date_time' => date('Y-m-d H:i:s'),
            'view_admin' => 1,
            'view_admin' => 1,
            );
        $this->db->insert('replay', $data);
        /*$note = array(
        'branch_id' => $this->session->userdata('branch_id'),
        'admin_name' => $this->session->userdata('admin_name'),
        'notification_action' => '',
        'description' => 'ÇÖÇÝÉ ãáÝ ááãÓÊÎÏã: ' . $this->input->post('admin_name'),
        'time' => date('Y-m-d H:i:s'),
        );
        $this->db->insert('notifications_tb', $note);*/
        return true;
    }
    function delete_project($id)
    {
        $this->db->where('project_id', $id);
        $this->db->delete('projects');
        return true;
    }
    function Delete_Join($id)
    {
        $this->db->where('join_id', $id);
        $this->db->delete('join_project');
        return true;
    }
    function delete_participate($id)
    {
        $this->db->where('participate_id', $id);
        $this->db->delete('participate_project');
        return true;
    }
    function send_approve_email($id)
    {
        $verfy = rand(15458742, 72455600);
        $id = $this->uri->segment(3);
        $this->db->select('*');
        $this->db->from('accounts');
        $this->db->where('account_id', $id);
        $q2 = $this->db->get();
        $result2 = $q2->result();
        foreach ($result2 as $row2):
            $email2 = $row2->email;
            $type_account = $row2->type_account;
            $fname = $row2->fname;
            $lname = $row2->lname;
            $organization = $row2->organization;
        endforeach;
        if ($type_account == "Organization") {
            $name = $organization;
        } else {
            $name = $fname . $lname;
        }
        $this->load->library('email');
        $config['protocol'] = 'SMTP';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'UTF-8';
        $config['wordwrap'] = true;
        $this->email->initialize($config);
        $subject = 'Approved your project';
        $message = '<html>';
        $message .= '<body>';
        $message .= '<div style="background-color: #fff;color: #777;text-align: left;direction:ltr;margin: auto;">';
        $message .= '<p>Dear'." ".$name.'</p>';
        $message .= '<h3>';
        $message .= 'CRANE has approved your project s idea.<br/>You can find it published now on <a style="color:blue;">www.ourcrane.com </a> ';
        $message .= '<br /></h3>';
        $message .= '<br /><p>Regards,</p>';
        $message .= '<br /><strong>Ruba Al Khateeb</strong>';
        $message .= '<br /><strong>Executive Manager</strong>';
        $message .= '<br /></a>';
        $message .= '</body></html>';
        $this->email->from('info@ourcrane.com');
        $this->email->to($email2);
        $this->email->set_mailtype("html");
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
        return true;
    }
    function send_approve_email_join($id)
    {
        $verfy = rand(15458742, 72455600);
        $id = $this->uri->segment(3);
        $this->db->select('*');
        $this->db->from('accounts');
        $this->db->where('account_id', $id);
        $q2 = $this->db->get();
        $result2 = $q2->result();
        //`type_account`, `fname`, `lname`, `organization`
        foreach ($result2 as $row2):
            $email2 = $row2->email;
            $type_account = $row2->type_account;
            $fname = $row2->fname;
            $lname = $row2->lname;
            $organization = $row2->organization;
        endforeach;
        if ($type_account == "Organization") {
            $name = $organization;
        } else {
            $name = $fname . $lname;
        }
        $this->load->library('email');
        $config['protocol'] = 'SMTP';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'UTF-8';
        $config['wordwrap'] = true;
        $this->email->initialize($config);
        $subject = 'Approved join';
        $message = '<html>';
        $message .= '<body>';
        $message .= '<div style="background-color: #fff;color: #777;text-align: left;direction:ltr;margin: auto;">';
        $message .=  '<p>Dear'." ".$name.'</p>';
        $message .= '<h3>';
        $message .= 'CRANE has approved your request to join the project. ';
        $message .= '<br /></h3>';
        $message .= '<br /><p>Regards,</p>';
        $message .= '<br /><strong>Ruba Al Khateeb</strong>';
        $message .= '<br /><strong>Executive Manager</strong>';
       $message .= '<br /><strong>Executive Manager</strong>';
        $message .= '<br />';
        $message .= '</body></html>';
        $this->email->from('info@ourcrane.com');
        $this->email->to($email2);
        $this->email->set_mailtype("html");
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
        return true;
    }
}