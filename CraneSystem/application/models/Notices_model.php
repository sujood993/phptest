<?php
class Notices_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    function DeleteAll()
    {
        $admin_id = $this->session->userdata('admin_id');
        $branch = $this->session->userdata('branch_id');
        $this->db->select('*');
        $this->db->from('login_logout_tb');
        $this->db->where('admin_id', $admin_id);
        $this->db->limit(1);
        $this->db->order_by('login_id', 'desc');
        $query = $this->db->get();
        $result = $query->result();
        foreach ($result as $row):
            $admin_name = $row->admin_name;
            $login_time = $row->login_time;
        endforeach;
        $this->db->where('branch_id', $branch);
        $this->db->delete('login_logout_tb');
        $data = array(
            'admin_id' => $admin_id,
            'branch_id' => $branch,
            'admin_name' => $admin_name,
            'login_time' => $login_time,
            );
        $this->db->insert('login_logout_tb', $data);
        $note = array(
            'branch_id' => $this->session->userdata('branch_id'),
            'admin_name' => $this->session->userdata('admin_name'),
            'notification_action' => '',
            'description' => 'تم حذف سجل الدخول والخروج',
            'time' => date('Y-m-d H:i:s'),
            );
        $this->db->insert('notif_tb', $note);
        return true;
    }
    function Notifications()
    {
        $this->db->select('*');
        $this->db->from('notif_tb');
             $this->db->where('account_type', "Admin");
        $this->db->order_by('not_id', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
     function NotificationsRows()
    {
        $this->db->select('*');
        $this->db->from('notif_tb');
             $this->db->where('account_type', "Admin");
                      $this->db->where('read', 0);
        $this->db->order_by('not_id', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return false;
        }
    }
       function notifiread()
    {
       
          $data = array(
            'read' => 1,
);
        $this->db->where('account_type', "Admin");
        $this->db->update('notif_tb', $data);
       
    }
    function NotificationsDay()
    {
        $this->db->select('*');
        $this->db->from('notif_tb');
       $this->db->where('account_type', "Admin");
        
        $this->db->order_by('not_id', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function DeleteNotifications()
    {
        
        $this->db->where('account_type', "Admin");
        $this->db->delete('notif_tb');
        /*$note = array(
            'branch_id' => $this->session->userdata('branch_id'),
            'admin_name' => $this->session->userdata('admin_name'),
            'notification_action' => '',
            'description' => 'تم حذف كل الاشعارات المتعلقة بنشاطات المستخدمين',
            'time' => date('Y-m-d H:i:s'),
            );
        $this->db->insert('notif_tb', $note);*/
        return true;
    }
}
?>