<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelompok extends CI_Controller
{
   public function __construct()
  {
    parent::__construct();
    $this->load->model('modAkun');
  }

    public function index()
    {
      
     
      if ((!$this->session->userdata("id"))||($this->session->userdata("level")!="ADMIN")) { //cek sudah login belum
         redirect("Home");
      }

      $data = [
         'level' => $this->session->userdata("level"),
         'id' => $this->session->userdata("id"),
         'nama' => $this->session->userdata("nama"),
         'kelompok' => $this->modAkun->getKelompok(),
      ];

       $this->load->view('header',$data);
       $this->load->view('kelompok');
       $this->load->view('footer');
    }

    
    public function TambahKelompok()
    {
      
      if ((!$this->session->userdata("id"))||($this->session->userdata("level")!="ADMIN")) { //cek sudah login belum
         redirect("Home");
      }

      $data = [
         'level' => $this->session->userdata("level"),
         'id' => $this->session->userdata("id"),
         'nama' => $this->session->userdata("nama"),
         'status'=>'tambah',
      ];
      
       $this->load->view('header',$data);
       $this->load->view('tambah_kelompok');
       $this->load->view('footer');
    }

    public function detailKelompok()
    {
      
      if ((!$this->session->userdata("id"))||($this->session->userdata("level")!="ADMIN")) { //cek sudah login belum
         redirect("Home");
      }

      $id=$this->input->get("id");

  

      $data = [
         'level' => $this->session->userdata("level"),
         'id' => $this->session->userdata("id"),
         'nama' => $this->session->userdata("nama"),
         'status'=>'detail',
         'kelompok'=>$this->modAkun->getKelompokId($id)[0],
      ];

     // var_dump($data);
      
       $this->load->view('header',$data);
       $this->load->view('tambah_kelompok');
       $this->load->view('footer');
    }


    public function ubahKelompok()
    {
      
      if ((!$this->session->userdata("id"))||($this->session->userdata("level")!="ADMIN")) { //cek sudah login belum
         redirect("Home");
      }

      $id=$this->input->get("id");

  

      $data = [
         'level' => $this->session->userdata("level"),
         'id' => $this->session->userdata("id"),
         'nama' => $this->session->userdata("nama"),
         'status'=>'ubah',
         'kelompok'=>$this->modAkun->getKelompokId($id)[0],
      ];

     // var_dump($data);
      
       $this->load->view('header',$data);
       $this->load->view('tambah_kelompok');
       $this->load->view('footer');
    }

    public function simpanKelompok(){

      $nama=$this->input->post("nama_kelompok");
      $deskripsi=$this->input->post("deskripsi");

      $data=[
         'kelompok'=>$nama,
         'deskripsi'=>$deskripsi,
         'date_created'=>date('Y-m-d H:i:s'),
      ];

      if($this->modAkun->simpanKelompok($data)){
         $this->session->set_flashdata('flash', 'simpan_sukses');
         redirect('kelompok');
      }else{
         $this->session->set_flashdata('flash', 'simpan_gagal');
         redirect('kelompok_baru');
      }

      
    }

    public function editKelompok(){

      $nama=$this->input->post("nama_kelompok");
      $deskripsi=$this->input->post("deskripsi");
      $id_kelompok=$this->input->post("id_kelompok");

      $data=[
         'kelompok'=>$nama,
         'deskripsi'=>$deskripsi,
      ];

      if($this->modAkun->updateKelompok($data,$id_kelompok)){
         $this->session->set_flashdata('flash', 'simpan_sukses');
         redirect('kelompok');
      }else{
         $this->session->set_flashdata('flash', 'simpan_gagal');
         redirect('kelompok_baru');
      }

      
    }


    public function hapusKelompok(){

      $id=$this->input->get("id");
      
      
      if($this->modAkun->hapusKelompok($id)){
         $this->session->set_flashdata('flash', 'hapus_sukses');
         redirect('kelompok');
      }else{
         $this->session->set_flashdata('flash', 'hapus_gagal');
         redirect('kelompok');
      }
    }

}
