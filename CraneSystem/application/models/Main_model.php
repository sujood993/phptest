<?php
class Main_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
       function Allsent()
    {
      
        $this->db->select('*');
        $this->db->from('sender');
        //$this->db->join('accounts', 'sender.account_id  = accounts.account_id ');
         
        $this->db->order_by('sender.message_date_time', 'desc');
          //$this->db->where('sender.message_date_time', date('Y-m-d h:i:sa'));
        $this->db->where('view_admin', 1);
        $this->db->where('type_msg','Admin');
        $this->db->order_by('msg_id', 'asc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    
    
  
       function replay_msg()
    {
      
        $this->db->select('*');
        $this->db->from('sender');
        //$this->db->join('accounts', 'sender.account_id  = accounts.account_id ');
         
        $this->db->order_by('sender.message_date_time', 'desc');
          //$this->db->where('sender.message_date_time', date('Y-m-d h:i:sa'));
        $this->db->where('view_admin', 1);
        $this->db->where('type_msg','Admin');
        //$this->db->order_by('time_id', 'asc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    
    
    function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->where('active', 1);
        $query = $this->db->get('admins');
        if ($query->num_rows() == 1) {
            $row = $query->row();
            $data = array(
                'admin_id' => $row->admin_id,
                'fullname' => $row->fullname,
                'email' => $row->email,
                'username' => $row->username,
                'rule_id' => $row->rule_id,
                'active' => $row->active,
                'logged_in2' => true);
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }
    function checkemail()
    {
        $admin_email = $this->input->post('admin_email');
        $this->db->where('admin_email', $admin_email);
        $query = $this->db->get('admins');
        if ($query->num_rows() == 1) {
            $row = $query->row();
            $data = array(
                'admin_id' => $row->admin_id,
                'admin_name' => $row->admin_name,
                'admin_email' => $row->admin_email,
                'admin_phone' => $row->admin_phone,
                'username' => $row->username,
                );
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }
    function Random_password($admin_id)
    {
        $admin_id = $this->session->userdata('admin_id');
        $username = $this->session->userdata('username');
        $password = rand(15458742, 72455600);
        $data = array(
            'password' => md5($password),
            'orginal_password' => $password,
            );
        $this->db->where('admin_id', $admin_id);
        $this->db->update('admins', $data);
        $this->load->library('email');
        $config['protocol'] = 'SMTP';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'UTF-8';
        $config['wordwrap'] = true;
        $this->email->initialize($config);
        $subject = 'كلمة مرور جديدة';
        $message = '<html>';
        $message .= '<body>';
        $message .= '<div style="background-color: #fff;color: #777;text-align: right;direction:rtl;margin: auto;">';
        $message .= '<h3>';
        $message .= 'لقد تم طلب كلمة مرور جديدة لتمكين الدخول الى لوحة التحكم مركز ليـنا للإستشارات الغذائية و الصحية، يمكنك استخدام كلمة المرور الموجودة أدناه وتغييرها لاحقا.';
        $message .= '<br /><br /> اسم المستخدم: ';
        $message .= $username;
        $message .= '<br /><br /> كلمة المرور الجديدة: ';
        $message .= $password;
        $message .= '<br /></h3>';
        $message .= '</body></html>';
        $this->email->from('Info@isco-tech.com');
        $this->email->to($this->session->userdata('admin_email'));
        $this->email->set_mailtype("html");
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
        $this->session->set_flashdata('message',
            'The new password has been sent to your email. ');
        return true;
    }
    function MyProfile()
    {
        $admin_id = $this->uri->segment(3);
        $array = array('admins.admin_id' => $admin_id);
        $this->db->select('*');
        $this->db->from('admins');
        $this->db->where($array);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
   
    function UpdateMyProfile($admin_id)
    {
        $admin_id = $this->uri->segment(3);
        $data = array(
            'fullname' => $this->input->post('fullname'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'username' => $this->input->post('username'),
            );
        $this->db->where('admin_id', $admin_id);
        $this->db->update('admins', $data);
     
    }
    function CheckPassword()
    {
        $admin_id = $this->session->userdata('admin_id');
        $current_password = md5($this->input->post('current_password'));
        $this->db->where('admin_id', $admin_id);
        $this->db->where('password', $current_password);
        $query = $this->db->get('admins');
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
    function ChangePassword()
    {
        $data = array(
            'pwd' => $this->input->post('new_password'),
            'password' => md5($this->input->post('new_password')),
            );
        $this->db->where('admin_id', $this->session->userdata('admin_id'));
        $this->db->update('admins', $data);
  
    }

    function logout($admin_id)
    {
        $admin_id = $this->uri->segment(3);
        $data = array('logout_time' => date('Y-m-d H:i:s'), );
        $this->db->where('admin_id', $admin_id);
        $this->db->limit(1);
        $this->db->order_by("login_id", "desc");
        $this->db->update('login_logout_tb', $data);
        return true;
    }
  
  
 
  
}
?>