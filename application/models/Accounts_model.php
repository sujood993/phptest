<?php
class Accounts_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
      function Notifications()
    {
        $this->db->select('*');
        $this->db->from('notif_tb');
      $this->db->where('account_type', "Account");
     $this->db->where('user_id',  $this->session->userdata('account_id'));
        $this->db->order_by('not_id', 'desc');
        $query = $this->db->get();
             $data = array(
            'read' => 1,
);
        $this->db->where('account_type', "Account");
        $this->db->update('notif_tb', $data);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
       function delete_Msg($id)
    {
        $id = $this->uri->segment(3);
        $data = array('view_account' => 0, );
        $this->db->where('msg_id',$id);
        $this->db->update('sender', $data);
    }
       function MsgRows()
    {
        $this->db->select('*');
        $this->db->from('sender');
             $this->db->where('type_msg', "Admin");
        $this->db->where('read_msg', 0);
          $this->db->where('account_id',$this->session->userdata('account_id'));
              $this->db->where('view_account', 1); 
        $this->db->order_by('msg_id', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return false;
        }
    }
   function Notifrows()
    {
        $this->db->select('*');
        $this->db->from('notif_tb');
             $this->db->where('account_type', "Account");
        $this->db->where('read', 0);
          $this->db->where('user_id',$this->session->userdata('account_id'));
     $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return false;
        }
    }
      function send_to()
    {
              if ($this->session->userdata('type_account')=="Person"){
            $name=$this->session->userdata('fname')." ".$this->session->userdata('lname');
        }else{
            $name=$this->session->userdata('organization');
        }
            
        //`msg_id`, `admin_id`, `username`, `account_id`, `account_name`, `subject`, `message`, `type_msg`, `message_date_time`
        $data = array(
            'admin_id' => 1,
            'username' => "Crane",
            'account_id' => $this->session->userdata('account_id'),
            'account_name' => $name,
            'subject' => $this->input->post('subject'),
            'message' => $this->input->post('message'),
            'type_msg' => "Account",
            'message_date_time' => date('Y-m-d H:i:s'),
            'view_admin' => 1,
            'view_account' => 1,
            );
        $this->db->insert('sender', $data);
             $note = array(
              'username' =>$name,
                'fun_name' => $name.' sent you a new massage',
             'user_id' => $this->session->userdata('account_id'),
            'account_type' => 'Admin',
            'date' => date('Y-m-d H:i:s'),
            );
        $this->db->insert('notif_tb', $note);
        return true;
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
  $this->db->where('account_id',$this->session->userdata('account_id'));
        $this->db->where('type_msg', "Admin");
        $this->db->update('sender', $data);
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
         function Allrecived()
    {
        $this->db->select('*');
        $this->db->from('sender');
        //$this->db->join('accounts', 'sender.account_id  = accounts.account_id ');
        $this->db->order_by('sender.message_date_time', 'desc');
        //$this->db->where('sender.message_date_time', date('Y-m-d h:i:sa'));
            $this->db->where('account_id',$this->session->userdata('account_id'));
        $this->db->where('view_account', 1);
        $this->db->where('type_msg', 'Admin');
        //$this->db->order_by('time_id', 'asc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
             function Allsent()
    {
        $this->db->select('*');
        $this->db->from('sender');
        //$this->db->join('accounts', 'sender.account_id  = accounts.account_id ');
        $this->db->order_by('sender.message_date_time', 'desc');
        //$this->db->where('sender.message_date_time', date('Y-m-d h:i:sa'));
         $this->db->where('account_id',$this->session->userdata('account_id'));
        $this->db->where('view_account', 1);
        $this->db->where('type_msg', 'Account');
        //$this->db->order_by('time_id', 'asc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function newaccount()
    {
        /* <!--`account_id`, `type_account`, `fname`, `lname`, `dateOfBirth`, `register_as`, `register_date`, `email`, `phone`,
        `organization`, `activity`, `country`, `contact_number`, `looking`, `password`, `approve`, `block`, `approved_by` -->*/
        $data = array(
            'type_account' => $this->input->post('type_account'),
            'profile_url' => $this->input->post('profile_url'),
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'dateOfBirth' => $this->input->post('dateOfBirth'),
            'register_as' => $this->input->post('register_as'),
            'register_date' => $this->input->post('register_date'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'organization' => $this->input->post('organization'),
            'activity' => $this->input->post('activity'),
            'country' => $this->input->post('country'),
            'contact_number' => $this->input->post('contact_number'),
            'looking' => $this->input->post('looking'),
            'original_password' => $this->input->post('original_password'),
            'password' => MD5($this->input->post('original_password')),
            'approved_by' => "Not Yet",
            'register_date' => date('Y-m-d'),
            'block' => 0,
            'approve' => 1,
            'confirm' => 1,
            );
        $this->db->insert('accounts', $data);
  
    }
    function login()
    {
        /* <!--`account_id`, `type_account`, `fname`, `lname`, `dateOfBirth`, `register_as`, `register_date`, `email`, `phone`,
        `organization`, `activity`, `country`, `contact_number`, `looking`, `password`, `approve`, `block`, `approved_by` -->*/
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->db->where('email', $email);
        $this->db->where('password', MD5($password));
        $this->db->where('approve', 1);
        $this->db->where('confirm', 1);
        $this->db->where('block', 0);
        $query = $this->db->get('accounts');
        if ($query->num_rows() == 1) {
            $row = $query->row();
            $data = array(
                'account_id' => $row->account_id,
                'type_account' => $row->type_account,
                'fname' => $row->fname,
                'lname' => $row->lname,
                'register_date' => $row->register_date,
                'email' => $row->email,
                'phone' => $row->phone,
                'dateOfBirth' => $row->dateOfBirth,
                'password' => $row->password,
                'approve' => $row->approve,
                'block' => $row->block,
                'organization' => $row->organization,
                'activity' => $row->activity,
                'country' => $row->country,
                'contact_number' => $row->contact_number,
                'looking' => $row->looking,
                'approved_by' => $row->approved_by,
                'logged_in' => true);
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }
    function login2($autid)
    {
        $autid = $this->uri->segment(3);
        $this->db->where('oauth_uid', $autid);
        $this->db->where('confirm', 1);
        $this->db->where('approve', 1);
        $this->db->where('block', 0);
        $query = $this->db->get('accounts');
        if ($query->num_rows() == 1) {
            $row = $query->row();
            $data = array(
                'account_id' => $row->account_id,
                'role_id' => $row->role_id,
                'fullname' => $row->fullname,
                'register_date' => $row->register_date,
                'email' => $row->email,
                'phone' => $row->phone,
                'investorname' => $row->investorname,
                'jobtitle' => $row->jobtitle,
                'password' => $row->password,
                'approve' => $row->approve,
                'block' => $row->block,
                'approved_by' => $row->approved_by,
                'logged_in' => true);
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }
    function CheckPassword($id)
    {
        $account_id = $id;
        $current_password = md5($this->input->post('current_password'));
        $this->db->where('password', $current_password);
        $this->db->where('account_id', $account_id);
        $query = $this->db->get('accounts');
        if ($query->num_rows() == 1) {
            return true;
        }
        return false;
    }
    function CheckCode($id)
    {
        $account_id = $id;
        $randcode = $this->input->post('randcode');
        $this->db->where('randcode', $randcode);
        $this->db->where('account_id', $account_id);
        $query = $this->db->get('accounts');
        if ($query->num_rows() == 1) {
            return true;
        }
        return false;
    }
    function ChangePassword()
    {
        $data = array('password' => md5($this->input->post('new_password')), );
        $this->db->where('account_id', $this->session->userdata('account_id'));
        $this->db->update('accounts', $data);
    }
    function ChangePasswordaccount($id)
    {
        $array = array('account_id' => $id);
        $this->db->select('*');
        $this->db->from('accounts');
        $this->db->where($array);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result = $query->result();
            foreach ($result as $row):
                $newpassword = $row->newpassword;
            endforeach;
            $data = array(
                'password' => $newpassword,
                'randcode' => '',
                'newpassword' => '');
            $this->db->where('account_id', $id);
            $this->db->update('accounts', $data);
            return true;
        }
        return false;
    }
    function NewPasswordforget()
    {
        $newpassword = $this->input->post('new_password');
        $data = array(
            'password' => md5($newpassword),
            'randcode' => '',
            );
        $this->db->where('account_id', $this->session->userdata('account_id'));
        $this->db->update('accounts', $data);
    }
    function NewPassword()
    {
        $data = array('newpassword' => md5($this->input->post('new_password')), );
        $this->db->where('account_id', $this->session->userdata('account_id'));
        $this->db->update('accounts', $data);
    }
    function checkemail()
    {
        $email = $this->input->post('email');
        $this->db->where('email', $email);
        $query = $this->db->get('accounts');
        if ($query->num_rows() == 1) {
            $row = $query->row();
            $data = array(
                'account_id' => $row->account_id,
                'role_id' => $row->role_id,
                'fullname' => $row->fullname,
                'register_date' => $row->register_date,
                'email' => $row->email,
                'phone' => $row->phone,
                'investorname' => $row->investorname,
                'password' => $row->password,
                'approve' => $row->approve,
                'block' => $row->block,
                'approved_by' => $row->approved_by,
                );
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }
    function checkemail2()
    {
        $email = $this->input->post('email');
        $this->db->where('email', $email);
        $query = $this->db->get('accounts');
        if ($query->num_rows() == 1) {
            $row = $query->row();
            $data = array(
                'account_id' => $row->account_id,
                'role_id' => $row->role_id,
                'fullname' => $row->fullname,
                'register_date' => $row->register_date,
                'email' => $row->email,
                'phone' => $row->phone,
                'investorname' => $row->investorname,
                'password' => $row->password,
                'approve' => $row->approve,
                'block' => $row->block,
                'departmentName' => $row->departmentName,
                'approved_by' => $row->approved_by,
                );
            $this->session->set_userdata($data);
            return true;
        } else {
            $data = array(
                'type_account' => $this->input->post('type_account'),
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'dateOfBirth' => $this->input->post('dateOfBirth'),
                'register_as' => $this->input->post('register_as'),
                'register_date' => $this->input->post('register_date'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'organization' => $this->input->post('organization'),
                'activity' => $this->input->post('activity'),
                'country' => $this->input->post('country'),
                'contact_number' => $this->input->post('contact_number'),
                'looking' => $this->input->post('looking'),
                'original_password' => $this->input->post('original_password'),
                'password' => MD5($this->input->post('original_password')),
                'approved_by' => "Not Yet",
                'register_date' => date('Y-m-d'),
                'block' => 0,
                'approve' => 1,
                'confirm' => 1,

                );

            $this->db->insert('accounts', $data);
               
            $email = $this->input->post('email');

            $this->db->where('email', $email);

            $this->db->where('approve', 1);
            $this->db->where('confirm', 1);
            $this->db->where('block', 0);
            $query = $this->db->get('accounts');
            if ($query->num_rows() == 1) {
                $row = $query->row();
                $data = array(
                    'account_id' => $row->account_id,
                    'type_account' => $row->type_account,
                    'fname' => $row->fname,
                    'lname' => $row->lname,
                    'register_date' => $row->register_date,
                    'email' => $row->email,
                    'phone' => $row->phone,
                    'dateOfBirth' => $row->dateOfBirth,

                    'approve' => $row->approve,
                    'block' => $row->block,
                    'organization' => $row->organization,
                    'activity' => $row->activity,
                    'country' => $row->country,
                    'contact_number' => $row->contact_number,
                    'looking' => $row->looking,
                    'approved_by' => $row->approved_by,
                    'logged_in' => true);
                $this->session->set_userdata($data);
            }
        }
        return false;
    }
    function Random_password()
    {
        $password = rand(15458742, 72455600);
        $data = array('password' => md5($password), );
        $this->db->where('account_id', $this->session->userdata('account_id'));
        $this->db->update('accounts', $data);
        $this->load->library('email');
        $config['protocol'] = 'SMTP';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'UTF-8';
        $config['wordwrap'] = true;
        $this->email->initialize($config);
        $subject = 'New password';
        $message = '<html>';
        $message .= '<body>';
        $message .= '<div style="background-color: #fff;color: #777;text-align: left;direction:ltr;margin: auto;">';
        $message .= '<h3>';
        $message .= 'A new password has been requested to enable access to the transactionquest control panel, you can use the password below and change it later.';
        $message .= '<br /><br /> New password: ';
        $message .= $password;
        $message .= '<br /></h3>';
        $message .= '</body></html>';
        $this->email->from('info@isco-tech.com');
        $this->email->to($this->session->userdata('email'));
        $this->email->set_mailtype("html");
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
        $this->session->set_flashdata('message',
            '<i class="fa fa-check-circle" style="font-size:48px;color:green"></i> The new password has been sent to the incoming email address');
        return true;
    }
    function Random_code()
    {
        $password = rand(15458742, 72455600);
        $data = array('randcode' => $password, );
        $this->db->where('account_id', $this->session->userdata('account_id'));
        $this->db->update('accounts', $data);
        $this->load->library('email');
        $config['protocol'] = 'SMTP';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'UTF-8';
        $config['wordwrap'] = true;
        $this->email->initialize($config);
        $subject = 'Change Password';
        $message = '<html>';
        $message .= '<body>';
        $message .= '<div style="background-color: #fff;color: #777;text-align: left;direction:ltr;margin: auto;">';
        $message .= '<h3>';
        $message .= 'A new code has been requested to enable access to the transactionquest control panel, you can use the code below to change password.';
        $message .= '<br /><br /> New password: ';
        $message .= $password;
        $message .= '<br /></h3>';
        $message .= '</body></html>';
        $this->email->from('info@isco-tech.com');
        $this->email->to($this->session->userdata('email'));
        $this->email->set_mailtype("html");
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
        $this->session->set_flashdata('message',
            '<i class="fa fa-check-circle" style="font-size:48px;color:green"></i> The code has been sent to the incoming email address');
        return true;
    }
    function Random_codeforget()
    {
        $password = rand(15458742, 72455600);
        $data = array('randcode' => $password, );
        $this->db->where('account_id', $this->session->userdata('account_id'));
        $this->db->update('accounts', $data);
        $this->load->library('email');
        $config['protocol'] = 'SMTP';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'UTF-8';
        $config['wordwrap'] = true;
        $this->email->initialize($config);
        $subject = 'Change Password';
        $message = '<html>';
        $message .= '<body>';
        $message .= '<div style="background-color: #fff;color: #777;text-align: left;direction:ltr;margin: auto;">';
        $message .= '<h3>';
        $message .= 'A new code has been requested to enable access to the crane control panel, you can use the code below to change password.';
        $message .= '<br /><br /> New code: ';
        $message .= $password;
        $message .= '<br /></h3>';
        $message .= '</body></html>';
        $this->email->from('info@ourcrane.com');
        $this->email->to($this->session->userdata('email'));
        $this->email->set_mailtype("html");
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
        $this->session->set_flashdata('message',
            '<i class="fa fa-check-circle" style="font-size:48px;color:green"></i> The code has been sent to the incoming email address');
        return true;
    }
    function CheckCodeforget()
    {
        $account_id = $this->session->userdata('account_id');
        $randcode = $this->input->post('randcode');
        $this->db->where('randcode', $randcode);
        $this->db->where('account_id', $account_id);
        $query = $this->db->get('accounts');
        if ($query->num_rows() == 1) {
            return true;
        }
        return false;
    }
    function account_profile($id)
    {
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
    function account_profile2($id)
    {
        $array = array('accounts.account_id' => $id);
        $this->db->select('*');
        $this->db->from('accounts');
        $this->db->join('posts', 'posts.account_id = accounts.account_id');
        $this->db->where($array);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function update_profile($id)
    {
        $id = $this->uri->segment(3);
          $data = array(
            'type_account' => $this->input->post('type_account'),
            'profile_url' => $this->input->post('profile_url'),
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'dateOfBirth' => $this->input->post('dateOfBirth'),
            'register_as' => $this->input->post('register_as'),
            'register_date' => $this->input->post('register_date'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'organization' => $this->input->post('organization'),
            'activity' => $this->input->post('activity'),
            'country' => $this->input->post('country'),
            'contact_number' => $this->input->post('contact_number'),
            'looking' => $this->input->post('looking'),
            'original_password' => $this->input->post('original_password'),
            'password' => MD5($this->input->post('original_password')),
           
            );
        $this->db->where('account_id', $id);
        $this->db->update('accounts', $data);
        if ($this->input->post('type_account')=="Person"){
            $name=$this->input->post('fname')." ".$this->input->post('lname');
        }else{
            $name=$this->input->post('organization');
        }
                   $note = array(
              'username' =>$name,
                'fun_name' => $name.' updated  profile info',
             'user_id' => $this->session->userdata('account_id'),
            'account_type' => 'Admin',
            'date' => date('Y-m-d H:i:s'),
            );
        $this->db->insert('notif_tb', $note);
    }


}
?>