<?php

class Main_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->library('session');
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