<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('modAkun');
      $this->load->model('modNomor');
   }

   public function index()
   {

      if (!$this->session->userdata("id")) { //cek sudah login belum
         redirect("Home");
      }

      if ($this->session->userdata('level') == "USER") {
         $pengumuman = $this->modNomor->getPengumumanId($this->session->userdata("id"));
      } else {
         $pengumuman = $this->modNomor->getPengumuman();
      }

      $data = [
         'level' => $this->session->userdata("level"),
         'id' => $this->session->userdata("id"),
         'nama' => $this->session->userdata("nama"),
         'pengumuman' => $pengumuman,
      ];

      $this->load->view('header', $data);
      $this->load->view('pengumuman');
      $this->load->view('footer');
   }

   public function TambahPengumuman()
   {
      if (!$this->session->userdata("id")) { //cek sudah login belum
         redirect("Home");
      }
      $data = [
         'level' => $this->session->userdata("level"),
         'id' => $this->session->userdata("id"),
         'nama' => $this->session->userdata("nama"),
         'kelompok' => $this->modNomor->getKelompokId($this->session->userdata('id')),
         'nomor' => $this->modNomor->getNomorId($this->session->userdata('id')),
      ];
      $this->load->view('header', $data);
      $this->load->view('tambah_pengumuman');
      $this->load->view('footer');
   }



   public function simpanPengumuman()
   {
      $judul = $this->input->post("judul_pengumuman");
      $isi = $this->input->post("isi_pengumuman");
      $name = null;
      $kelompok = $this->input->post("kelompok");
      $nomor = $this->input->post("nomor");
      $semuanomor = array();

      if ($_FILES['media']['error'] == 4 || ($_FILES['media']['size'] == 0 && $_FILES['media']['error'] == 0)) {
         // cover_image is empty (and not an error), or no file was uploaded
      } else {
         $config['upload_path']          = './upload/';
         $config['allowed_types']        = 'gif|jpg|png|pdf|doc|docx|zip|rar|jpeg|xls|pptx|ppt|xlsx';
         $config['max_size']             = 5000;
         $config['max_width']            = 5000;
         $config['max_height']           = 5000;

         $this->load->library('upload', $config);

         if (!$this->upload->do_upload('media')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('flash', 'simpan_gagal');
            redirect('pengumuman');
         } else {
            $namafile = array('upload_data' => $this->upload->data("file_name"));
            $name = $namafile["upload_data"];
         }
      }

      date_default_timezone_set('Asia/Jakarta');
      $data = [
         'hari' => $this->hari_ini(),
         'tanggal' => $this->tgl_indo(date('Y-m-d')),
         'date_created' => date('Y-m-d H:i:s'),
         'judul' => $judul,
         'isi' => $isi,
         'dokumen' => $name,
         'id_akun' => $this->session->userdata("id")
      ];

      $id = $this->modAkun->simpanPengumuman($data);


      for ($i = 0; $i < sizeof($kelompok); $i++) {
         $res = $this->modNomor->ambilNomor($kelompok[$i]);
         foreach ($res as $key) {
            array_push($semuanomor, $key->id_nomorwa);
         }
      }
      if ($nomor) {
         $semuanomor = array_merge($semuanomor, $nomor);
      } else {
         $semuanomor;
      }

      for ($i = 0; $i < sizeof($semuanomor); $i++) {
         $data = [
            'id_nomorwa' => $semuanomor[$i],
            'id_pengumuman' => $id,
         ];
         $this->modNomor->simpanPengumumanWa($data);
      }

      if ($this->input->post('aksi') == "kirim") {
         $this->kirim($id);
      }

      $this->session->set_flashdata('flash', 'simpan_sukses');
      // redirect('pengumuman');
   }

   public function kirim($id)
   {
      $data = [];
      $dokumen = [];
      $pengumuman = $this->modNomor->getPengumumanById($id);
      $dok = false;

      foreach ($pengumuman as $key) {

         if ($key->dokumen) {
            $dok = true;
            $temp2 = [
               'phone' => $key->nomor,
               'document' => base_url() . 'upload/' . $key->dokumen,
            ];
            array_push($dokumen, $temp2);
         }
         $temp = [
            'phone' => $key->nomor,
            'message' => $key->isi,
         ];
         array_push($data, $temp);
      }

      // var_dump($data);

      if ($this->kirimWablas($data)) {

         $status = [
            'status' => 'TERKIRIM',
            'date_updated' => date('Y-M-D H:i:s'),
         ];

         $this->modNomor->statusPengumuman($id, $status);
         $this->session->set_flashdata('flash', 'kirim_sukses');
      } else {
         $status = [
            'status' => 'GAGAL PESAN',
            'date_updated' => date('Y-M-D H:i:s'),
         ];

         $this->modNomor->statusPengumuman($id, $status);
         $this->session->set_flashdata('flash', 'kirim_gagal');
      }
      if ($dok) {

         if ($this->kirimWablasDok($dokumen)) {

            $status = [
               'status' => 'TERKIRIM',
               'date_updated' => date('Y-M-D H:i:s'),
            ];

            $this->modNomor->statusPengumuman($id, $status);
            $this->session->set_flashdata('flash', 'kirim_sukses');
         } else {
            $status = [
               'status' => 'GAGAL DOKUMEN',
               'date_updated' => date('Y-M-D H:i:s'),
            ];

            $this->modNomor->statusPengumuman($id, $status);
            $this->session->set_flashdata('flash', 'kirim_gagal');
         }
      }
      // redirect('pengumuman');
   }


   public function kirimWablas($data)
   {
      $curl = curl_init();
      $token = "3zX69hl5c29cVXMM9AsipDLxZwhnd3DfkV7QppTQ8ch8ZyYXWkqnuFwPKLWaE8mi";
      $random = true;
      $payload = [
         "data" => $data
      ];
      curl_setopt(
         $curl,
         CURLOPT_HTTPHEADER,
         array(
            "Authorization: $token",
            "Content-Type: application/json"
         )
      );
      curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload));
      curl_setopt($curl, CURLOPT_URL,  "https://jogja.wablas.com/api/v2/send-message");
      curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

      $result = curl_exec($curl);
      curl_close($curl);
      echo "<pre>";
      print_r($result);
   }

   public function kirimWablasDok($data)
   {
      var_dump($data);
      $curl = curl_init();
      $token = "3zX69hl5c29cVXMM9AsipDLxZwhnd3DfkV7QppTQ8ch8ZyYXWkqnuFwPKLWaE8mi";
      $random = true;
      $payload = [
         "data" => $data
      ];
      curl_setopt(
         $curl,
         CURLOPT_HTTPHEADER,
         array(
            "Authorization: $token",
            "Content-Type: application/json"
         )
      );
      curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload));
      curl_setopt($curl, CURLOPT_URL,   "https://jogja.wablas.com/api/v2/send-document");
      curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

      $result = curl_exec($curl);
      curl_close($curl);
      echo "<pre>";
      print_r($result);
   }


   public function hari_ini()
   {


      $hari = date("D");

      switch ($hari) {
         case 'Sun':
            $hari_ini = "Minggu";
            break;

         case 'Mon':
            $hari_ini = "Senin";
            break;

         case 'Tue':
            $hari_ini = "Selasa";
            break;

         case 'Wed':
            $hari_ini = "Rabu";
            break;

         case 'Thu':
            $hari_ini = "Kamis";
            break;

         case 'Fri':
            $hari_ini = "Jumat";
            break;

         case 'Sat':
            $hari_ini = "Sabtu";
            break;

         default:
            $hari_ini = "Tidak di ketahui";
            break;
      }
      return $hari_ini;
   }

   function tgl_indo($tanggal)
   {
      $bulan = array(
         1 =>   'Januari',
         'Februari',
         'Maret',
         'April',
         'Mei',
         'Juni',
         'Juli',
         'Agustus',
         'September',
         'Oktober',
         'November',
         'Desember'
      );
      $pecahkan = explode('-', $tanggal);

      // variabel pecahkan 0 = tanggal
      // variabel pecahkan 1 = bulan
      // variabel pecahkan 2 = tahun

      return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
   }
}
