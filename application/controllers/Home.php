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

  public function ceklogin()
  {
    $email = $this->input->post('email');
    $password = md5($this->input->post('password'));

    $hasil = $this->modAkun->cariPassword($email);
    if ($hasil) {

      if ($hasil[0]->password == $password) {

        $this->session->set_userdata("job", $hasil[0]->job);
        $this->session->set_userdata("id_akun", $hasil[0]->id_akun);
        $this->session->set_userdata("nama", $hasil[0]->nama);
        $this->session->set_userdata("email", $hasil[0]->email);

        if ($hasil[0]->job == "Admin") {
          redirect('Admin');
          // echo 'admin';
        } else if ($hasil[0]->job == "Assistant") {
          redirect('Assistant');
          // echo 'asisten';
        } else if ($hasil[0]->job == "Dokter") {
          redirect('Dokter');
          // echo 'dokter';
        } else {
          $this->session->set_flashdata('status', 'gagal');
          redirect('Home/login');
        }
      } else {

        $this->session->set_flashdata('status', 'gagal');
        redirect('Home/login');
      }
    } else {
      $this->session->set_flashdata('status', 'gagal');
      redirect('Home/login');
    }
    $this->session->set_flashdata('status', 'gagal');
    redirect('Home/login');
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('Home');
  }
}
