<?php

class Main_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->library('session');
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

                'email' => $row->account_email,

                );
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }

    function Random_password($account_id)
    {
        $account_id = $this->session->userdata('account_id');
        $username = $this->session->userdata('username');
        $password = rand(15458742, 72455600);
        $data = array(
            'password' => md5($password),
            'original_password' => $password,
            );
        $this->db->where('account_id', $account_id);
        $this->db->update('accounts', $data);
        $this->load->library('email');
        $config['protocol'] = 'SMTP';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'UTF-8';
        $config['wordwrap'] = true;
        $this->email->initialize($config);
        $subject = '???? ???? ?????';
        $message = '<html>';
        $message .= '<body>';
        $message .= '<div style="background-color: #fff;color: #777;text-align: right;direction:rtl;margin: auto;">';
        $message .= '<h3>';
        $message .= '??? ?? ??? ???? ???? ????? ?????? ?????? ??? ???? ?????? ???? ????? ?????????? ???????? ? ??????? ????? ??????? ???? ?????? ???????? ????? ???????? ?????.';
        $message .= '<br /><br /> ??? ????????: ';
        $message .= $username;
        $message .= '<br /><br /> ???? ?????? ???????: ';
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
            '?? ????? ???? ?????? ???????  ?????? ??????????');
        return true;
    }
    function contact()
    {

        $this->db->select('*');
        $this->db->from('contact');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();

        } else {

            return false;
        }
    }
    function faqs()
    {

        $this->db->select('*');
        $this->db->from('faqs');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();

        } else {

            return false;
        }
    }
    function work_home()
    {

        $this->db->select('*');
        $this->db->from('contents');
        $this->db->where('content_id', 1);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();

        } else {

            return false;
        }
    }
    function about()
    {

        $this->db->select('*');
        $this->db->from('contents');
        $this->db->where('content_id', 2);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();

        } else {

            return false;
        }
    }
    function overview()
    {

        $this->db->select('*');
        $this->db->from('contents');
        $this->db->where('content_id', 3);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();

        } else {

            return false;
        }
    }
    function works_page()
    {

        $this->db->select('*');
        $this->db->from('contents');
        $this->db->where('content_id', 4);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();

        } else {

            return false;
        }
    }
    function terms()
    {

        $this->db->select('*');
        $this->db->from('contents');
        $this->db->where('content_id', 5);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();

        } else {

            return false;
        }
    }
    function privacy()
    {

        $this->db->select('*');
        $this->db->from('contents');
        $this->db->where('content_id', 6);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();

        } else {

            return false;
        }
    }

    function SendContactMessage()
    {

        $this->load->library('email');
        $config['protocol'] = 'SMTP';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'UTF-8';
        $config['wordwrap'] = true;

        $this->email->initialize($config);
        $subject = $this->input->post('form_subject');

        $message = '<html>';
        $message .= '<body>';
        $message .= '<div style="background-color: #fff;color: #777;text-align: right;margin: auto;direction:rtl;">';
        $message .= '<h1> Name:';
        $message .= $this->input->POST('name');
        $message .= '<br /></h1>';
        $message .= '<h1> Email:';
        $message .= $this->input->POST('email');
        $message .= '<br /></h1>';
        $message .= '<br /></h1>';
        $message .= '<h1> Phone:';
        $message .= $this->input->POST('phone');
        $message .= '<br /></h1>';
        $message .= '<h1> subject:';
        $message .= $this->input->POST('subject');
        $message .= '<br /></h1>';
        $message .= '<h1> Message:';
        $message .= $this->input->POST('msg');
        $message .= '<br /></h1>';
        $message .= '</body></html>';


        $this->email->from($this->input->POST('form_email'));
        $this->email->to($this->input->POST('sujood.malkawi993@outlook.com'));


        $this->email->set_mailtype("html");

        $this->email->subject($subject);
        $this->email->message($message);

        $this->email->send();
        $this->session->set_flashdata('message',
            'Message sent successfully <i class="fa fa-check-circle" style="font-size:31px;color:green"></i>');
        //echo $this->session->flashdata('message');
        redirect('Contact/Contact');

    }
}
?>