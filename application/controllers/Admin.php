<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
    $this->load->view('adm_dashboard',$data);
  }

  public function pasien()
  {
    if(! $this->session->userdata("id_akun")) redirect('Home');

    $data=[
      'nama'=>$this->session->userdata("nama"),
      'pasien'=>$this->ModAkun->getPasienById($this->input->get("a"))[0],
      'treatment'=>$this->ModAkun->getTreatment($this->input->get("a")),
    ];

    $this->load->view('adm_pasien_profile',$data);
  }


  public function printbill()
  {

    if(! $this->session->userdata("id_akun")) redirect('Home');

    $data=[
      'nama'=>$this->session->userdata("nama"),
      'treatment'=>$this->ModAkun->getTreatmentById($this->input->get("a"))[0],
      'prosedur'=>$this->ModAkun->getProsedur(),
      'bhp'=>$this->ModAkun->getBhp(),
    ];

    echo "<script>alert('Cannot find printer. Your Device mallfunction!');</script>";
    $this->load->view('adm_printbill',$data);
    //var_dump($data);
  }

  public function prosedur()
  {
    
    if(! $this->session->userdata("id_akun")) redirect('Home');

    $data=[
      'nama'=>$this->session->userdata("nama"),
      'prosedur'=>$this->ModAkun->getProsedur(),
    ];
    $this->load->view('adm_prosedur',$data);
  }

  public function tambahprosedur(){
    if(! $this->session->userdata("id_akun")) redirect('Home');

    $data=[
      'nama'=>$this->session->userdata("nama"),
    ];
    $this->load->view('adm_tambah_prosedur',$data);
  }

  public function simpanprosedur(){
    $data=[
      'prosedur'=>$this->input->post('prosedur'),
      
    ];
    // var_dump($data);
    $result=$this->ModAkun->simpanprosedur($data);
    if($result){
      $this->session->set_flashdata('status','berhasil');
    }else{
      $this->session->set_flashdata('status','gagal');
    }

    redirect('Admin/prosedur');

  }

  public function prosedurdetail(){
    if(! $this->session->userdata("id_akun")) redirect('Home');

    $data=[
      'nama'=>$this->session->userdata("nama"),
      'subprosedur'=>$this->ModAkun->getSubprosedur($this->input->get("a")),
      'id_prosedur'=>$this->input->get("a"),
    ];
    $this->load->view('adm_subprosedur',$data);
  }

  public function tambahsubprosedur(){
    if(! $this->session->userdata("id_akun")) redirect('Home');

    $data=[
      'nama'=>$this->session->userdata("nama"),
      'id_prosedur'=>$this->input->get("a"),
    ];
    $this->load->view('adm_tambah_subprosedur',$data);
  }

  public function simpansubprosedur(){
    $data=[
      'subprosedur'=>$this->input->post('subprosedur'),
      'id_prosedur'=>$this->input->post('id_prosedur'),
      
    ];
    //  var_dump($data);
    $result=$this->ModAkun->simpansubprosedur($data);
    if($result){
      $this->session->set_flashdata('status','berhasil');
    }else{
      $this->session->set_flashdata('status','gagal');
    }

    redirect('Admin/prosedurdetail?a='.$this->input->post('id_prosedur'));

  }


  

  public function bhp()
  {
    
    if(! $this->session->userdata("id_akun")) redirect('Home');

    $data=[
      'nama'=>$this->session->userdata("nama"),
      'bhp'=>$this->ModAkun->getBhp(),
    ];
    $this->load->view('adm_bhp',$data);
  }

  public function tambahbhp(){
    if(! $this->session->userdata("id_akun")) redirect('Home');

    $data=[
      'nama'=>$this->session->userdata("nama"),
    ];
    $this->load->view('adm_tambah_bhp',$data);
  }

  public function simpanbhp(){
    $data=[
      'bhp'=>$this->input->post('bhp'),
     
      
    ];
    // var_dump($data);
    $result=$this->ModAkun->simpanbhp($data);
    if($result){
      $this->session->set_flashdata('status','berhasil');
    }else{
      $this->session->set_flashdata('status','gagal');
    }

    redirect('Admin/bhp');

  }

  public function bhpdetail(){
    if(! $this->session->userdata("id_akun")) redirect('Home');

    $data=[
      'nama'=>$this->session->userdata("nama"),
      'subbhp'=>$this->ModAkun->getSubbhp($this->input->get("a")),
      'id_bhp'=>$this->input->get("a"),
    ];
    $this->load->view('adm_subbhp',$data);
  }

  public function tambahsubbhp(){
    if(! $this->session->userdata("id_akun")) redirect('Home');

    $data=[
      'nama'=>$this->session->userdata("nama"),
      'id_bhp'=>$this->input->get("a"),
    ];
    $this->load->view('adm_tambah_subbhp',$data);
  }

  public function simpansubbhp(){
    $data=[
      'subbhp'=>$this->input->post('subbhp'),
      'id_bhp'=>$this->input->post('id_bhp'),
      'harga'=>$this->input->post('harga'),
      
    ];
    //  var_dump($data);
    $result=$this->ModAkun->simpansubbhp($data);
    if($result){
      $this->session->set_flashdata('status','berhasil');
    }else{
      $this->session->set_flashdata('status','gagal');
    }

    redirect('Admin/bhpdetail?a='.$this->input->post('id_bhp'));

  }


}
