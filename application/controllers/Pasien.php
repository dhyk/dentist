<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('modAkun');
  }

  public function index()
  {
    $data = [
      'pasien' => $this->modAkun->getPasienById($this->input->get("a"))[0],
      'treatment' => $this->modAkun->getTreatment($this->input->get("a")),
    ];

    $this->load->view('pasien_profile', $data);
  }

  
  
}
