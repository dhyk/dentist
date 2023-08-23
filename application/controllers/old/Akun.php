<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Akun extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('modAkun');
   }

   public function index()
   {

      // if ((!$this->session->userdata("id")) || ($this->session->userdata("level") != "ADMIN")) { //cek sudah login belum
      //    redirect("Home");
      // }

      $data = [
         // 'level' => $this->session->userdata("level"),
         // 'id' => $this->session->userdata("id"),
         // 'nama' => $this->session->userdata("nama"),

         // 'akun' => $this->modAkun->getAkun(),
      ];

      $this->load->view('header', $data);
      $this->load->view('akun');
      $this->load->view('footer');
   }


   public function tambahAkun()
   {
      // if ((!$this->session->userdata("id")) || ($this->session->userdata("level") != "ADMIN")) { //cek sudah login belum
      //    redirect("Home");
      // }

      $data = [
         // 'level' => $this->session->userdata("level"),
         // 'id' => $this->session->userdata("id"),
         // 'nama' => $this->session->userdata("nama"),
         // 'status' => 'tambah',
         // 'kelompok' => $this->modAkun->getKelompok(),
      ];

      $this->load->view('header', $data);
      $this->load->view('tambah_akun');
      $this->load->view('footer');
   }

   public function simpanAkun()
   {
      $nama = $this->input->post("nama");
      $email = $this->input->post("email");
      $level = $this->input->post("level");
      $kelompok = $this->input->post("kelompok");
      $pass = explode('@', $email);
      $password = $pass[0];

      if ($this->modAkun->cariPassword($email)) {
         $this->session->set_flashdata('flash', 'email_ada');
         redirect('akun_baru');
      }

      $data = [
         'nama_akun' => $nama,
         'email' => $email,
         'password' => md5($password),
         'level' => $level,
         'date_created' => date('Y-m-d H:i:s'),
      ];

      if ($id=$this->modAkun->simpanAkun($data)) {

         for($i=0;$i<sizeof($kelompok);$i++){

            $data=[
               'id_kelompok'=>$kelompok[$i],
               'id_akun'=>$id,
            ];

            $this->modAkun->akunKelompok($data);

               
         }
         $this->session->set_flashdata('flash', 'simpan_sukses');
         redirect('akun');
        
      } else {
         $this->session->set_flashdata('flash', 'simpan_gagal');
         redirect('akun');
      }
   }


   public function detailAkun()
   {
      if ((!$this->session->userdata("id")) || ($this->session->userdata("level") != "ADMIN")) { //cek sudah login belum
         redirect("Home");
      }

      $id=$this->input->get("id");

      $data = [
         'level' => $this->session->userdata("level"),
         'id' => $this->session->userdata("id"),
         'nama' => $this->session->userdata("nama"),
         'status' => 'detail',
         'akun' => $this->modAkun->getAkunId($id)[0],
         'akses'=>$this->modAkun->getAkunKelompok($id),
         'kelompok' => $this->modAkun->getKelompok(),
      ];

      $this->load->view('header', $data);
      $this->load->view('tambah_akun');
      $this->load->view('footer');
   }

   public function ubahAkun()
   {
      if ((!$this->session->userdata("id")) || ($this->session->userdata("level") != "ADMIN")) { //cek sudah login belum
         redirect("Home");
      }

      $id=$this->input->get("id");

      $data = [
         'level' => $this->session->userdata("level"),
         'id' => $this->session->userdata("id"),
         'nama' => $this->session->userdata("nama"),
         'status' => 'ubah',
         'akun' => $this->modAkun->getAkunId($id)[0],
         'akses'=>$this->modAkun->getAkunKelompok($id),
         'kelompok' => $this->modAkun->getKelompok(),
      ];

      $this->load->view('header', $data);
      $this->load->view('tambah_akun');
      $this->load->view('footer');
   }

   public function editAkun(){

      $nama = $this->input->post("nama");
      $email = $this->input->post("email");
      $level = $this->input->post("level");
      $kelompok = $this->input->post("kelompok");
      $id = $this->input->post("id_akun");

      $data = [
         'nama_akun' => $nama,
         'email' => $email,
         'level' => $level,
         'date_updated'=> date('Y-m-d H:i:s'),
      ];
      // var_dump($data);
      // var_dump($id);
      // var_dump($this->modAkun->ubahAkun($data,$id));
      
      $this->modAkun->hapusAkunKelompok($id);

      if ($this->modAkun->ubahAkun($data,$id)) {

         for($i=0;$i<sizeof($kelompok);$i++){

            $data=[
               'id_kelompok'=>$kelompok[$i],
               'id_akun'=>$id,
            ];

            $this->modAkun->ubahAkunKelompok($data);
            //var_dump($data);
               
         }
         $this->session->set_flashdata('flash', 'simpan_sukses');
        redirect('akun');
        
      } else {
         $this->session->set_flashdata('flash', 'simpan_gagal');
       redirect('akun');
      }

   }

   public function hapusAkun(){

      $id=$this->input->get("id");
      
      
      if($this->modAkun->hapusAkun($id)){
         $this->session->set_flashdata('flash', 'hapus_sukses');
         redirect('akun');
      }else{
         $this->session->set_flashdata('flash', 'hapus_gagal');
         redirect('akun');
      }
    }

    public function resetAkun(){

      $id=$this->input->get("id");
      $email=$this->input->get("e");
      $pass = explode('@', $email);
      $password = $pass[0];
      

      $data = [
         'password' => md5($password),
         'date_updated' => date('Y-m-d H:i:s'),
      ];

      // var_dump($data);3
      if ($id=$this->modAkun->resetPassword($data,$id)) {

         $this->session->set_flashdata('flash', 'simpan_sukses');
         redirect('akun');
        
      } else {
         $this->session->set_flashdata('flash', 'simpan_gagal');
         redirect('akun');
      }
    }


}
