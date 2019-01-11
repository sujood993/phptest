<?php
session_start();
defined('BASEPATH') or exit('No direct script access allowed');
class Maincontroller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('Main_model', '', true);
    }
    public function checkemail()
    {
        $this->load->model('main_model');
        $result = $this->main_model->checkemail();
        $data['contact'] = $this->Main_model->contact();
        if (!$result) {
            $data["forgeterror"] = "?????? ?????????? ?????? ?? ??? ?????? ?????";
            $this->load->view('main/login', $data);
        } else {
            redirect('Maincontroller/Random_password');
        }
    }
    function Random_password()
    {
        $account_id = $this->session->userdata('account_id');
        $this->load->model('main_model');
        $result = $this->main_model->Random_password($account_id);
        $data['contact'] = $this->Main_model->contact();
        $data["successforget"] = "?? ????? ???? ?????? ??????? ?????? ??????????";
        $this->load->view('main/login', $data);
    }
    public function index()
    {
        $data['subview'] = 'main/default';
        $data['contact'] = $this->Main_model->contact();
        $data['result'] = $this->Main_model->work_home();
        $this->load->view('index', $data);
    }
    public function About()
    {
        $data['subview'] = 'main/about';
        $data['result'] = $this->Main_model->about();
        $data['contact'] = $this->Main_model->contact();
        $this->load->view('index', $data);
    }
    public function Overview()
    {
        $data['subview'] = 'main/overview';
        $data['result'] = $this->Main_model->overview();
        $data['contact'] = $this->Main_model->contact();
        $this->load->view('index', $data);
    }
    public function HowItWorks()
    {
        $data['subview'] = 'main/howitworks';
        $data['result'] = $this->Main_model->works_page();
        $data['contact'] = $this->Main_model->contact();
        $this->load->view('index', $data);
    }
    public function TermsAndCondition()
    {
        $data['subview'] = 'main/terms';
        $data['result'] = $this->Main_model->terms();
        $data['contact'] = $this->Main_model->contact();
        $this->load->view('index', $data);
    }
    public function PrivacyPolicy()
    {
        $data['subview'] = 'main/privacy';
        $data['result'] = $this->Main_model->privacy();
        $data['contact'] = $this->Main_model->contact();
        $this->load->view('index', $data);
    }
    public function FAQs()
    {
        $data['subview'] = 'main/faqs';
        $data['contact'] = $this->Main_model->contact();
        $data['faqs'] = $this->Main_model->faqs();
        $this->load->view('index', $data);
    }
    public function login()
    {
        $data['contact'] = $this->Main_model->contact();
        $this->load->view('main/login');
    }
}
