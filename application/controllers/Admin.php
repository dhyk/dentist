<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('modAkun');
  }

  public function index()
  {
    $this->load->view('homepage');
  }

  public function login()
  {
    $this->load->view('login');
  }

  public function dashboard()
  {
    $this->load->view('dashboard_asistant');
  }

  public function pasien()
  {
    $this->load->view('pasien_profile');
  }


}
