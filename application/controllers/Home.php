<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'G.41 || HOME',
            );
        $this->load->view('element/header',$data);
        $this->load->view('v_home');
        $this->load->view('element/footer');
    }
}
