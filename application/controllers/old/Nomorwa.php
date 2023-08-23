<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nomorwa extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('modNomor');
   }

   public function index()
   {
      if (!$this->session->userdata("id")) { //cek sudah login belum
         redirect("Home");
      }

      $data = [
         'level' => $this->session->userdata("level"),
         'id' => $this->session->userdata("id"),
         'nama' => $this->session->userdata("nama"),
         'nomor' => $this->modNomor->getNomorId($this->session->userdata('id')),
      ];

      $this->load->view('header', $data);
      $this->load->view('nomorwa');
      $this->load->view('footer');
   }


   public function TambahNomorWa()
   {

      if (!$this->session->userdata("id")) { //cek sudah login belum
         redirect("Home");
      }

      $data = [
         'level' => $this->session->userdata("level"),
         'id' => $this->session->userdata("id"),
         'nama' => $this->session->userdata("nama"),
         'status' => 'tambah',
         'kelompok' => $this->modNomor->getKelompokId($this->session->userdata('id')),
      ];

      $this->load->view('header', $data);
      $this->load->view('tambah_nomorwa');
      $this->load->view('footer');
   }

   public function simpanNomorWa()
   {
      $nama = $this->input->post("nama");
      $nomor = $this->input->post("nomor_wa");
      $kelompok = $this->input->post("kelompok");




      $data = [
         'nama' => $nama,
         'nomor' => $nomor,
         'date_created' => date('Y-m-d H:i:s'),
      ];


      if ($id = $this->modNomor->simpanNomor($data)) {

         $data = [
            'id_kelompok' => $kelompok,
            'id_nomorwa' => $id,
         ];

         $this->modNomor->nomorKelompok($data);

         $this->session->set_flashdata('flash', 'simpan_sukses');
         redirect('nomorwa');
      } else {
         $this->session->set_flashdata('flash', 'simpan_gagal');
         redirect('nomorwa');
      }
   }


   public function detailNomorWa()
   {
      if (!$this->session->userdata("id"))  { //cek sudah login belum
         redirect("Home");
      }

      $id = $this->input->get("id");

      $data = [
         'level' => $this->session->userdata("level"),
         'id' => $this->session->userdata("id"),
         'nama' => $this->session->userdata("nama"),
         'status' => 'detail',
        
      ];

      $this->load->view('header', $data);
      $this->load->view('tambah_nomorwa');
      $this->load->view('footer');
   }

   public function ubahNomorWa()
   {
      if (!$this->session->userdata("id"))  { //cek sudah login belum
         redirect("Home");
      }

      $id = $this->input->get("id");

      $data = [
         'level' => $this->session->userdata("level"),
         'id' => $this->session->userdata("id"),
         'nama' => $this->session->userdata("nama"),
         'status' => 'ubah',
         'nomor' => $this->modNomor->getNomorDetail($id)[0],
         'kelompok' => $this->modNomor->getKelompokId($this->session->userdata('id')),
      ];

      $this->load->view('header', $data);
      $this->load->view('tambah_nomorwa');
      $this->load->view('footer');
   }

   public function editNomorWa()
   {

      $nama = $this->input->post("nama");
      $nomor = $this->input->post("nomor_wa");
      $kelompok = $this->input->post("kelompok");
      $id = $this->input->post("id");
      $id_nomorwa = $this->input->post("id_nomorwa");




      $data = [
         'nama' => $nama,
         'nomor' => $nomor,
         'date_updated' => date('Y-m-d H:i:s'),
      ];


      if ($this->modNomor->editNomor($data,$id_nomorwa)) {

         $this->modNomor->hapusKelNom($id);

         $data = [
            'id_kelompok' => $kelompok,
            'id_nomorwa' => $id_nomorwa,
         ];

         $this->modNomor->nomorKelompok($data);

         $this->session->set_flashdata('flash', 'simpan_sukses');
         redirect('nomorwa');
      } else {
         $this->session->set_flashdata('flash', 'simpan_gagal');
         redirect('nomorwa');
      }
   }

   public function hapusNomorWa()
   {

      $id = $this->input->get("id");
      $id_nomorwa=$this->input->get("idn");


      if (($this->modNomor->hapusKelNom($id))&&($this->modNomor->hapusNomorwa($id_nomorwa))) {
         $this->session->set_flashdata('flash', 'hapus_sukses');
         redirect('nomorwa');
      } else {
         $this->session->set_flashdata('flash', 'hapus_gagal');
         redirect('nomorwa');
      }
   }
}
