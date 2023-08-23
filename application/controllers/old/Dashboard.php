<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
      parent::__construct();
      $this->load->model('modAkun');
    }

    public function index()
    {
        if(! $this->session->userdata("id")){ //cek sudah login belum
            redirect("Home");
        }

        if($this->session->userdata("level")=="ADMIN"){ //cek level

            $data=[
                'level'=>$this->session->userdata("level"),
                'id' =>$this->session->userdata("id"),
                'nama' =>$this->session->userdata("nama"),

                'all' => $this->modAkun->hitungPengumuman()[0]->jumlah,
                'terkirim' => $this->modAkun->hitungTerkirim()[0]->jumlah,
                'aktif' => $this->modAkun->hitungAktif()[0]->jumlah,
                'gagal' => $this->modAkun->hitungGagal()[0]->jumlah,

                'pengumuman' => $this->modAkun->dashPengumuman(),
            ];
        }
        else{ // untuk user

            $data=[
                'level'=>$this->session->userdata("level"),
                'id' =>$this->session->userdata("id"),
                'nama' =>$this->session->userdata("nama"),

                'all' => $this->modAkun->hitungPengumumanId($this->session->userdata("id"))[0]->jumlah,
                'terkirim' => $this->modAkun->hitungTerkirimId($this->session->userdata("id"))[0]->jumlah,
                'aktif' => $this->modAkun->hitungAktifId($this->session->userdata("id"))[0]->jumlah,
                'gagal' => $this->modAkun->hitungGagalId($this->session->userdata("id"))[0]->jumlah,

                'pengumuman' => $this->modAkun->dashPengumumanId($this->session->userdata("id")),
            ];
        }
     
      
       $this->load->view('header',$data);
       $this->load->view('dashboard');
       $this->load->view('footer');

    
    }
}
