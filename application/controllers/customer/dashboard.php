<?php

class Dashboard extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates_customer/header');
        $this->load->view('customer/dashboard');
        $this->load->view('templates_customer/footer');
    }
    public function kamera()
    {
        $data['kamera'] = $this->rental_model->get_data('kamera')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/kamera', $data);
        $this->load->view('templates_customer/footer');
    }
    public function about()
    {
        $this->load->view('templates_customer/header');
        $this->load->view('customer/about');
        $this->load->view('templates_customer/footer');
    }
    public function service()
    {
        $this->load->view('templates_customer/header');
        $this->load->view('customer/service');
        $this->load->view('templates_customer/footer');
    }
    public function kontak()
    {
        $this->load->view('templates_customer/header');
        $this->load->view('customer/kontak');
        $this->load->view('templates_customer/footer');
    }
}
