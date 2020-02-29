<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasilkarya extends CI_Controller
{
    public function pukultikus()
    {
        $this->load->view('personal/hasilkarya/pukultikus');
    }

    public function restapi()
    {
        $this->load->view('personal/hasilkarya/restapi');
    }
}
