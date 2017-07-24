<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {


    public function index()
    {
        $data = array(
            'title' => 'G.41 || ABOUT',
            );
        $this->load->view('element/header',$data);
        $this->load->view('v_about');
        $this->load->view('element/footer');
    }
}
