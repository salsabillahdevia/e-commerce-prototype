<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shop extends CI_Controller
{

    public function index()
    {
        $this->load->view('shop/s_header');
        $this->load->view('shop/s_slider');
        $this->load->view('shop/s_index');
        $this->load->view('shop/s_footer');
    }
}
