<?php
class Accounts_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    function Persons()
    {
         //`account_id`, `type_account`, `fname`, `lname`, 
                    //`dateOfBirth`, `register_as`, `register_date`, `email`, `phone`,   `profile_url`,  `approve`,
        $array = array('accounts.type_account' => "Person");
        $this->db->select('*');
        $this->db->from('accounts');
        
        $this->db->where($array);
        $this->db->order_by('account_id', 'desc');
        //$this->db->where('date', date('Y-m-d'));
        //$this->db->order_by('time_id', 'asc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    
      function Organizations()
    {
         //`account_id`, `type_account`, `fname`, `lname`, 
                    //`dateOfBirth`, `register_as`, `register_date`, `email`, `phone`,   `profile_url`,  `approve`,
        $array = array('accounts.type_account' => "Organization");
        $this->db->select('*');
        $this->db->from('accounts');
        
        $this->db->where($array);
        $this->db->order_by('account_id', 'desc');
        //$this->db->where('date', date('Y-m-d'));
        //$this->db->order_by('time_id', 'asc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

  
    
      
  
        function Delete_Account($id){
        $this->db->where('account_id',$id);
        $this->db->delete('accounts');
        return true;
    } 
     function Block_Account($id){
        
        $data= array(
          'block'=> 1 ,
          
        );
        
        $this->db->where('account_id', $id);
        $this->db->update('accounts', $data);
        return true;   
    } 
    
      function Unblock_Account($id){
        
        $data= array(
          'block'=> 0 ,
      
        );
        
        $this->db->where('account_id', $id);
        $this->db->update('accounts', $data);
        return true;   
    } 
}
