<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{

  public function index()
  {
    $data = [
      'title'  => 'RAKIT',
      'layout' => 'layouts/admin',
      'page'   => 'pages/dashboard',
    ];

    $this->load->view('layouts/app', $data);
  }
}
