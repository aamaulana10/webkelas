<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


    public function index()
    {
         $data = array(
            'title' => 'G.41 || CONTACT',
            );
        $this->load->view('element/header',$data);
        $this->load->view('v_contact');
        $this->load->view('element/footer');;
    }
}
