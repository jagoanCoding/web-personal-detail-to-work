<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Personal extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Personal Detail';
        $this->load->view('templates/personal_header', $data);
        $this->load->view('personal/index');
        $this->load->view('templates/personal_footer');
    }
    public function riwayathidup()
    {
        $data['title'] = 'Personal Detail';
        $this->load->view('templates/personal_header', $data);
        $this->load->view('personal/riwayathidup');
        $this->load->view('templates/personal_footer');
    }
    public function hasilkarya()
    {
        $data['title'] = 'Personal Detail';
        $this->load->view('templates/personal_header', $data);
        $this->load->view('personal/hasilkarya');
        $this->load->view('templates/personal_footer');
    }
    public function kontak()
    {
        $data['title'] = 'Personal Detail';
        $this->load->view('templates/personal_header', $data);
        $this->load->view('personal/kontak');
        $this->load->view('templates/personal_footer');
    }
}
