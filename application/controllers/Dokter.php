<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('modAkun');
  }

  public function index()
  {
    $this->load->view('doc_dashboard');
  }

  public function pasien()
  {
    $this->load->view('doc_pasien_profile');
  }

  public function tambahtreatment()
  {
    $this->load->view('doc_tambah_treatment');
  }

  public function ubahtreatment()
  {
    $this->load->view('doc_edit_treatment');
  }

  


}
