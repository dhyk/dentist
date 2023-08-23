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
    $this->load->view('login');
  }

  public function GantiPassword()
  {

    if (!$this->session->userdata("id")) { //cek sudah login belum
      redirect("Home");
    }

    $data = [
      'level' => $this->session->userdata("level"),
      'id' => $this->session->userdata("id"),
      'nama' => $this->session->userdata("nama"),
    ];

    $this->load->view('header', $data);
    $this->load->view('ganti_password');
    $this->load->view('footer');
  }

  public function cekLogin()
  {
    $email = $this->input->post('email');
    $password = md5($this->input->post('password'));

    $hasil = $this->modAkun->cariPassword($email);
    if ($hasil) {

      var_dump($hasil[0]);
      if ($hasil[0]->password == $password) {

        $this->session->set_userdata("level", $hasil[0]->level);
        $this->session->set_userdata("id", $hasil[0]->id_akun);
        $this->session->set_userdata("nama", $hasil[0]->nama_akun);
        $this->session->set_userdata("email", $hasil[0]->email);
        redirect('Dashboard');
      } else {

        $this->session->set_flashdata('flash', 'password_gagal');
        redirect('Home');
      }
    } else {
      $this->session->set_flashdata('flash', 'username_gagal');
      redirect('Home');
    }
  }


  public function logout()
  {
    $this->session->sess_destroy();
    redirect('Home');
  }

  public function simpanPassword()
  {
    $baru = $this->input->post("baru");
    $lama = $this->input->post("lama");

   // var_dump($this->modAkun->cariPassword($this->session->userdata("email"))[0]->password);
    //var_dump(md5($lama));
    if ($this->modAkun->cariPassword($this->session->userdata("email"))[0]->password == md5($lama)) {

      if ($this->modAkun->updatePassword($this->session->userdata("email"), md5($baru))) {
      //  $this->session->sess_destroy();
        $this->session->set_flashdata('flash', 'ganti_berhasil');
       redirect('Home');
      } else {
        $this->session->set_flashdata('flash', 'ganti_gagal');
        redirect('ganti_password');
      }
    } else {
      $this->session->set_flashdata('flash', 'password_beda');
      redirect('ganti_password');
    }
  }

  public function tester(){
    echo 'tes';
  }
}
