<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('ModAkun');
  }

  public function index()
  {
    $data = [
      'pasien' => $this->ModAkun->getPasienById($this->input->get("a"))[0],
      'treatment' => $this->ModAkun->getTreatment($this->input->get("a")),
    ];

    $this->load->view('pasien_profile', $data);
  }

  
  
}
