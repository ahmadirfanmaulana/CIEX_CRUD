<?php
/**
 * Home Controller
 */
class Home extends CI_Controller
{
  public function index()
  {
    // load view
    $this->load->view('template/header');
    $this->load->view('site/home');
    $this->load->view('template/footer');
  }
}

 ?>
