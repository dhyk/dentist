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
    if(! $this->session->userdata("id_akun")) redirect('Home');

    $data=[
      'nama'=>$this->session->userdata("nama"),
      'pasien'=>$this->modAkun->getPasien(),
    ];

    $this->load->view('ass_dashboard',$data);
  }

  public function pasien()
  {
    if(! $this->session->userdata("id_akun")) redirect('Home');

    $data=[
      'nama'=>$this->session->userdata("nama"),
      'pasien'=>$this->modAkun->getPasienById($this->input->get("a"))[0],
      'treatment'=>$this->modAkun->getTreatment($this->input->get("a")),
    ];

    $this->load->view('ass_pasien_profile',$data);
  }

  public function tambahbiodata()
  {
    if(! $this->session->userdata("id_akun")) redirect('Home');

    $data=[
      'nama'=>$this->session->userdata("nama"),
    ];
    $this->load->view('ass_tambah_profile',$data);
  }

  public function simpanbiodata(){

    $data=[
      'nama'=>$this->input->post('nama'),
      'lahir' =>$this->input->post('lahir'),
      'kelamin' =>$this->input->post('kelamin'),
      'alamat' =>$this->input->post('alamat'),
      'wa' =>$this->input->post('wa'),
      'pekerjaan' =>$this->input->post('pekerjaan'),
      'alergi'=>$this->input->post('alergi'),
      'riwayat'=>$this->input->post('riwayat'),
    ];

    // var_dump($data);
    $result=$this->modAkun->simpanpasien($data);
    if($result){
      $this->session->set_flashdata('status','berhasil');
    }else{
      $this->session->set_flashdata('status','gagal');
    }

    redirect('Assistant');

  }

  public function ubahbiodata()
  {
    if(! $this->session->userdata("id_akun")) redirect('Home');

    $data=[
      'pasien'=>$this->modAkun->getPasienById($this->input->get("a"))[0],
      'nama'=>$this->session->userdata("nama"),
    ];

    $this->load->view('ass_edit_profile',$data);
  }

  public function editbiodata(){

    $data=[
      'nama'=>$this->input->post('nama'),
      'lahir' =>$this->input->post('lahir'),
      'kelamin' =>$this->input->post('kelamin'),
      'alamat' =>$this->input->post('alamat'),
      'wa' =>$this->input->post('wa'),
      'pekerjaan' =>$this->input->post('pekerjaan'),
      'alergi'=>$this->input->post('alergi'),
      'riwayat'=>$this->input->post('riwayat'),
    ];

    // var_dump($data);
    $result=$this->modAkun->ubahpasien($this->input->post("id_pasien"),$data);
    if($result){
      $this->session->set_flashdata('status','berhasil');
    }else{
      $this->session->set_flashdata('status','gagal');
    }

    redirect('Assistant/pasien?a='.$this->input->post("id_pasien"));

  }

}
