<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

  public function index()
{
  $data['title'] = 'RAKIT Test Page';
  $data['page']  = 'pages/test_page';
  $this->load->view('layouts/admin', $data);
}

  public function button()
  {
    $data['title'] = 'RAKIT Button Test';
    $data['page']  = 'pages/button_test';

    $this->load->view('layouts/admin', $data);
  }
}
