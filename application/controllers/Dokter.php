<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('ModAkun');
  }

  public function index()
  {
    if(! $this->session->userdata("id_akun")) redirect('Home');

    $data=[
      'nama'=>$this->session->userdata("nama"),
      'pasien'=>$this->ModAkun->getPasien(),
    ];
    $this->load->view('doc_dashboard',$data);
  }

  public function pasien()
  {
    if(! $this->session->userdata("id_akun")) redirect('Home');

    $data=[
      'nama'=>$this->session->userdata("nama"),
      'pasien'=>$this->ModAkun->getPasienById($this->input->get("a"))[0],
      'treatment'=>$this->ModAkun->getTreatment($this->input->get("a")),
    ];

    $this->load->view('doc_pasien_profile',$data);
  }

  public function tambahtreatment()
  {
    if(! $this->session->userdata("id_akun")) redirect('Home');

    $data=[
      'nama'=>$this->session->userdata("nama"),
      'id_pasien'=>$this->input->get("a"),
      'prosedur'=>$this->ModAkun->getProsedur(),
      'bhp'=>$this->ModAkun->getBhp(),
    ];

    $this->load->view('doc_tambah_treatment',$data);
  }

  public function simpanTreatment(){

    $data=[
      'tanggal'=>$this->input->post('tanggal'),
      'keluhan' =>$this->input->post('keluhan'),
      'prosedur' =>$this->input->post('prosedur'),
      'subprosedur' =>$this->input->post('subprosedur'),
      'bhp' =>$this->input->post('bhp'),
      'subbhp' =>$this->input->post('subbhp'),
      'biaya' => $this->ModAkun->getBiaya($this->input->post('subbhp'))[0]->harga,
      'id_pasien'=>$this->input->post('id_pasien'),
    ];

    // var_dump($data);

    $result=$this->ModAkun->simpantreatment($data);
    if($result){
      $this->session->set_flashdata('status','berhasil');
    }else{
      $this->session->set_flashdata('status','gagal');
    }

    redirect('Dokter/pasien?a='.$this->input->post("id_pasien"));

  }

  public function getsubprosedur(){

    $id=$this->ModAkun->getProsedurId($this->input->post("prosedur"))[0]->id_prosedur;
    $data=$this->ModAkun->getSubprosedur($id);
    echo json_encode($data);
  }

  public function getsubbhp(){

    // var_dump($this->input->get("bhp"));
    $id=$this->ModAkun->getBhpId($this->input->post("bhp"))[0]->id_bhp;
    // var_dump($id);
    $data=$this->ModAkun->getSubbhp($id);
    // var_dump($data);
   echo json_encode($data);
  }

  public function ubahtreatment()
  {

    if(! $this->session->userdata("id_akun")) redirect('Home');

    $data=[
      'nama'=>$this->session->userdata("nama"),
      'treatment'=>$this->ModAkun->getTreatmentById($this->input->get("a"))[0],
      'prosedur'=>$this->ModAkun->getProsedur(),
      'bhp'=>$this->ModAkun->getBhp(),
    ];

    $this->load->view('doc_edit_treatment',$data);
  }

  
  public function editTreatment(){

    $data=[
      'tanggal'=>$this->input->post('tanggal'),
      'keluhan' =>$this->input->post('keluhan'),
      'prosedur' =>$this->input->post('prosedur'),
      'subprosedur' =>$this->input->post('subprosedur'),
      'bhp' =>$this->input->post('bhp'),
      'subbhp' =>$this->input->post('subbhp'),
      'biaya' => $this->ModAkun->getBiaya($this->input->post('subbhp'))[0]->harga,
    ];

    $result=$this->ModAkun->edittreatment($this->input->post('id_treatment'),$data);
    if($result){
      $this->session->set_flashdata('status','berhasil');
    }else{
      $this->session->set_flashdata('status','gagal');
    }

    redirect('Dokter/pasien?a='.$this->input->post("id_pasien"));

  }
  


}
