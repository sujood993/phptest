<?php
session_start();
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function __construct()
    {
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it

        $this->load->database();
        $this->load->library('session');
        $this->load->model('Main_model', '', true);
        $this->load->model('Accounts_model', '', true);
    }


    /*<?php echo base_url('Maincontroller/About');?>"*/

    public function Contact()
    {
        $data['subview'] = 'main/contact';
        $data['contact'] = $this->Main_model->contact();
        $id = $this->session->userdata('account_id');

        $this->load->view('index', $data);
    }


    public function SendContactMessage()
    {

        $data['subview'] = 'main/contact';

        $this->load->model('Main_model');
        $data['contact'] = $this->Main_model->contact();
        $data['result'] = $this->Main_model->SendContactMessage();
        $this->load->view('index', $data);
    }


}
?>
