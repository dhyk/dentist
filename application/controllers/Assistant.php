<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Assistant extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('modAkun');
  }

  public function index()
  {
    $this->load->view('ass_dashboard');
  }

  public function pasien()
  {
    $this->load->view('ass_pasien_profile');
  }

  public function tambahbiodata()
  {
    $this->load->view('ass_tambah_profile');
  }

  public function ubahbiodata()
  {
    $this->load->view('ass_edit_profile');
  }

}
