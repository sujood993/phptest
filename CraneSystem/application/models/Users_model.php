<?php
class Users_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    function AllUsers()
   {
        $this->db->select('*');
        $this->db->from('admins');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
     function UpdateProfile($admin_id)
    {
        $admin_id = $this->uri->segment(3);
        $data = array(
         'rule_id' => $this->input->post('rule_id'),
            'fullname' => $this->input->post('fullname'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'username' => $this->input->post('username'),
            'pwd' => $this->input->post('password'),
            'password' => md5($this->input->post('password')),
            'active' => 1,
            );
        $this->db->where('admin_id', $admin_id);
        $this->db->update('admins', $data);
    }
       function GetUserDetails($admin_id)
    {
        //`admin_id`, `fullname`, `register_date`, `email`, `phone`, `password`, `active`, `pwd`, `username`, `role_id
        $admin_id = $this->uri->segment(3);
        $this->db->select('*');
        $this->db->from('admins');
        $this->db->where('admin_id', $admin_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function NewUser()
    {
      //`admin_id`, `fullname`, `register_date`, `email`, `phone`, `password`, `active`, `pwd`, `username`, `rule_id`
        $data = array(
            'rule_id' => $this->input->post('rule_id'),
            'fullname' => $this->input->post('fullname'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'username' => $this->input->post('username'),
            'pwd' => $this->input->post('password'),
            'password' => md5($this->input->post('password')),
            'active' => 1,
            );
        $this->db->insert('admins', $data);
        /*$note = array(
            'branch_id' => $this->session->userdata('branch_id'),
            'admin_name' => $this->session->userdata('admin_name'),
            'notification_action' => '',
            'description' => 'اضافة ملف للمستخدم: ' . $this->input->post('admin_name'),
            'time' => date('Y-m-d H:i:s'),
            );
        $this->db->insert('notifications_tb', $note);*/
        return true;
    }
    function DeleteUser($admin_id)
    {
        $admin_id = $this->uri->segment(3);
        $this->db->where('admin_id', $admin_id);
        $this->db->delete('admins');
        return true;
    }
}
?>