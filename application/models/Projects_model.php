<?php
class Projects_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    function projects()
    {
        //`project_id`, `account_id`, `project_name`, `project_location`, `brif_desc`, `details_desc`, `budget`, `academic`, `approve`, `approve_by`
        //projects
        $array = array('projects.approve' => 1);
        $this->db->select('*');
        $this->db->from('projects');
        $this->db->join('accounts', 'accounts.account_id = projects.account_id');
        $this->db->where($array);
     $this->db->order_by("project_id", "desc");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function My_Projects()
    {
        //`project_id`, `account_id`, `project_name`, `project_location`, `brif_desc`, `details_desc`, `budget`, `academic`, `approve`, `approve_by`
        //projects
        $array = array('account_id' => $this->session->userdata('account_id'));
        $this->db->select('*');
        $this->db->from('projects');
        $this->db->where($array);
     $this->db->order_by("project_id", "desc");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function JoinProject($project_id)
    {
        $project_id = $this->uri->segment(3);
        $config['upload_path'] = './uploads/cv/';
        $config['allowed_types'] =
            'gif|jpg|png|jpeg|pdf|doc|docx|csv|exe|xls|txt|ppt-pps';
        $config['max_size'] = '100000';
        $config['max_width'] = '2000';
        $config['max_height'] = '1000';
        $this->load->library('upload', $config);
        $this->upload->do_upload('cv_name');
        //`join_id`, `project_id`, `account_id`, `cv_name`, `workin`, `participate`, `skills`, `relations`, `investor`, `approve`, `approve_by`, `date`
        $data = array(
            'project_id' => $project_id,
            'workin' => $this->input->post('workin'),
            'participate' => $this->input->post('participate'),
            'skills' => $this->input->post('skills'),
            'relations' => $this->input->post('relations'),
            'investor' => $this->input->post('investor'),
            'approve' => 0,
            'date' => date('Y-m-d'),
            'account_id' => $this->session->userdata('account_id'),
            'approve_by' => "Not Yet",
            'cv_name' => $this->upload->data('file_name'),
            );
        $this->db->insert('join_project', $data);
        $project_id = $project_id;
$this->db->select('*');
$this->db->from('projects');
$this->db->where('project_id', $project_id);
$query = $this->db->get();
$result = $query->result();
foreach ($result as $row):
    //`project_id`, `account_id`, `project_name`, `project_location`, `brif_desc`, `details_desc`, `budget`, `academic`, `approve`, `approve_by`, `date`
    $project_name = $row->project_name;
endforeach;
      if ($this->session->userdata('type_account')=="Person"){
            $name=$this->session->userdata('fname')." ".$this->session->userdata('lname');
        }else{
            $name=$this->session->userdata('organization');
        }
            $note = array(
            'username' =>$name,
            'fun_name' => $name. ' joined '.$this->input->post('project_name').' project',
            'user_id' => $this->session->userdata('account_id'),
            'account_type' => 'Admin',
            'date' => date('Y-m-d H:i:s'),
            );
        $this->db->insert('notif_tb', $note);
   
    }
    function Participate()
    {
        $config['upload_path'] = './uploads/cv/';
        $config['allowed_types'] =
            'gif|jpg|png|jpeg|pdf|doc|docx|csv|exe|xls|txt|ppt-pps';
        $config['max_size'] = '100000';
        $config['max_width'] = '2000';
        $config['max_height'] = '1000';
        $this->load->library('upload', $config);
        $this->upload->do_upload('cv_name');
        //`join_id`, `project_id`, `account_id`, `cv_name`, `workin`, `participate`, `skills`, `relations`, `investor`, `approve`, `approve_by`, `date`
        $data = array(
            'workin' => $this->input->post('workin'),
            'participate' => $this->input->post('participate'),
            'skills' => $this->input->post('skills'),
            'relations' => $this->input->post('relations'),
            'investor' => $this->input->post('investor'),
            'approve' => 0,
            'date' => date('Y-m-d'),
            'account_id' => $this->session->userdata('account_id'),
            'approve_by' => "Not Yet",
            'cv_name' => $this->upload->data('file_name'),
            );
        $this->db->insert('participate_project', $data);
                    if ($this->session->userdata('type_account')=="Person"){
            $name=$this->session->userdata('fname')." ".$this->session->userdata('lname');
        }else{
            $name=$this->session->userdata('organization');
        }
          
              $note = array(
            'username' =>$name,
          'fun_name' => $name.' want to establish in an upcoming project',
            'user_id' => $this->session->userdata('account_id'),
            'account_type' => 'Admin',
            'date' => date('Y-m-d H:i:s'),
            );
        $this->db->insert('notif_tb', $note);
        
    }
    function AddProject()
    {
        $data2 = array(
            'project_name' => $this->input->post('project_name'),
            'project_location' => $this->input->post('project_location'),
            'brif_desc' => $this->input->post('brif_desc'),
            'details_desc' => $this->input->post('details_desc'),
            'budget' => $this->input->post('budget'),
            'approve' => $this->input->post('academic'),
            'approve' => 0,
            'date' => date('Y-m-d'),
            'account_id' => $this->session->userdata('account_id'),
            'approve_by' => "Not Yet",
            );
        $this->db->insert('projects', $data2);
        $this->db->select('*');
        $this->db->from('projects');
        $this->db->order_by("project_id", "desc");
        $this->db->where('account_id', $this->session->userdata('account_id'));
        $this->db->limit(1);
        $query = $this->db->get();
        $result = $query->result();
        foreach ($result as $row):
            // `cat_id`, `cat_barcode`, `cat_name`, `cat_qty`, `cat_price`, `cat_instock`, `cat_sold`, `product_id`, `date`, `added_by`
            $project_id = $row->project_id;
        endforeach;
        $data = array();
        //$project_id=$this->session->userdata('account_id');
        if ($this->input->post('save') && !empty($_FILES['userFiles']['name'])) {
            $filesCount = count($_FILES['userFiles']['name']);
            for ($i = 0; $i < $filesCount; $i++) {
                $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];
                $config['upload_path'] = './uploads/projects/';
                   $config['allowed_types'] =
            'gif|jpg|png|jpeg|pdf|doc|docx|csv|exe|xls|txt|ppt-pps';
                $config['max_size'] = '100000';
                $config['max_width'] = '2000';
                $config['max_height'] = '1000';
                $this->load->library('upload', $config);
                $this->load->helper('form');
                $this->upload->initialize($config);
                if ($this->upload->do_upload('userFile')) {
                    $fileData['project_name'][$i] = $this->upload->data();
                    $uploadData[$i]['project_name'] = $fileData['project_name'];
                }
                $data[$i] = array(
                    'project_id' => $project_id,
                    'project_name' => $this->upload->data('file_name'),
                    );
            }
            $this->db->insert_batch('projectfiles_tb', $data);
        }
                            if ($this->session->userdata('type_account')=="Person"){
            $name=$this->session->userdata('fname')." ".$this->session->userdata('lname');
        }else{
            $name=$this->session->userdata('organization');
        }
          
              $note = array(
            'username' =>$name,
                'fun_name' => $name.' published a new project idea',
            'user_id' => $this->session->userdata('account_id'),
            'account_type' => 'Admin',
            'date' => date('Y-m-d H:i:s'),
            );
        $this->db->insert('notif_tb', $note);
    }
    function delete_project($id)
    {
        $this->db->where('project_id', $id);
        $this->db->delete('projects');
        return true;
    }
    function search()
    { //`project_id`, `account_id`, `project_name`, `project_location`, `brif_desc`, `details_desc`, `budget`, `academic`, `approve`, `approve_by`
        //projects
        $search = $this->input->post('search');
        $this->db->select('*');
        $this->db->from('projects');
 $this->db->join('accounts', 'accounts.account_id = projects.account_id');
        $this->db->where('projects.approve', 1);
        $this->db->like('project_name', $search);
        $this->db->or_like('project_location', $search);
        $this->db->or_like('budget', $search);
        $this->db->or_like('budget', $search);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
      function Add_Comment()
    {   //`comment_id`, `project_id`, `account_Id`, `text_comment`, `date`, `day`
        $project_id = $this->uri->segment(3);
        $data = array(
            'project_id' => $project_id,
            'text_comment' => $this->input->post('text_comment'),
             'date' => date('Y-m-d'),
            'account_id' => $this->session->userdata('account_id'),
            'day' => date('D'),
            );
        $this->db->insert('comments', $data);
    }
}
?>