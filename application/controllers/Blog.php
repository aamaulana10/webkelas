<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {


    public function index()
    {
        $data = array(
            'title' => 'G.41 || BLOG',
            );
        $this->load->view('element/header',$data);
        $this->load->view('v_blog');
        $this->load->view('element/footer');
    }
}
