<?php

class ModAkun extends CI_Model
{
  public function cariPassword($username)
  {
    $this->db->select('*');
    $this->db->from('akun');
    $this->db->where('email', $username);
    return $this->db->get()->result();
  }

  public function getPasien()
  {
    $this->db->select('*');
    $this->db->from('pasien');
    $this->db->order_by("id_pasien", "asc");
    return $this->db->get()->result();
  }

  public function getPasienById($id)
  {
    $this->db->select('*');
    $this->db->from('pasien');
    $this->db->where("id_pasien", $id);
    return $this->db->get()->result();
  }

  public function getTreatment($id)
  {
    $this->db->select('*');
    $this->db->from('treatment');
    $this->db->where("id_pasien", $id);
    $this->db->order_by("tanggal", "desc");
    return $this->db->get()->result();
  }

  public function getTreatmentById($id)
  {
    $this->db->select('*');
    $this->db->from('treatment');
    $this->db->where("id_treatment", $id);
    return $this->db->get()->result();
  }

  public function edittreatment($id, $data)
  {
    $this->db->where('id_treatment', $id);
    $this->db->update('treatment', $data);

    return ($this->db->affected_rows() != 1) ? false : true;
  }


  public function getProsedur()
  {
    $this->db->select('*');
    $this->db->from('prosedur');
    $this->db->order_by("prosedur", "asc");
    return $this->db->get()->result();
  }

  public function getBhp()
  {
    $this->db->select('*');
    $this->db->from('bhp');
    $this->db->order_by("bhp", "asc");
    return $this->db->get()->result();
  }

  public function getProsedurId($prosedur)
  {
    $this->db->select('*');
    $this->db->from('prosedur');
    $this->db->order_by("prosedur", $prosedur);
    return $this->db->get()->result();
  }

  public function getBhpId($bhp)
  {
    $this->db->select('*');
    $this->db->from('bhp');
    $this->db->where("bhp", $bhp);
    return $this->db->get()->result();
  }

  public function getSubprosedur($id)
  {
    $this->db->select('*');
    $this->db->from('subprosedur');
    $this->db->where("id_prosedur", $id);
    $this->db->order_by("subprosedur", "asc");
    return $this->db->get()->result();
  }

  public function getSubbhp($id)
  {
    $this->db->select('*');
    $this->db->from('subbhp');
    $this->db->where("id_bhp", $id);
    $this->db->order_by("subbhp", "asc");
    return $this->db->get()->result();
  }

  public function getBiaya($subbhp)
  {
    $this->db->select('harga');
    $this->db->from('subbhp');
    $this->db->where("subbhp", $subbhp);
    return $this->db->get()->result();
  }

  public function simpantreatment($data)
  {
    $this->db->insert('treatment', $data);


    if ($this->db->affected_rows() != 1) {
      return false;
    } else {
      return true;
    }
  }

  public function simpanpasien($data)
  {
    $this->db->insert('pasien', $data);


    if ($this->db->affected_rows() != 1) {
      return false;
    } else {
      $insert_id = $this->db->insert_id();

      $kodeqr = $insert_id;

      $this->qr($kodeqr);
      $this->ubahpasien($insert_id,['barcode'=>''.$kodeqr.'.png']);


      return true;
    }
  }

  public function ubahpasien($id, $data)
  {
    $this->db->where('id_pasien', $id);
    $this->db->update('pasien', $data);

    return ($this->db->affected_rows() != 1) ? false : true;
  }

	
function qr($kodeqr)
{
    if($kodeqr){
        $filename = 'assets/img/barcode/'.$kodeqr;
        if (!file_exists($filename)) { 
                $this->load->library('ciqrcode');
                $params['data'] = base_url()."pasien?a=".$kodeqr;
                $params['level'] = 'H';
                $params['size'] = 10;
                $params['savename'] = FCPATH.'assets/img/barcode/'.$kodeqr.".png";
                return  $this->ciqrcode->generate($params);
        }
    }
}


  public function simpanPengumuman($data)
  {
    $this->db->insert('pengumuman', $data);


    if ($this->db->affected_rows() != 1) {
      return false;
    } else {
      $insert_id = $this->db->insert_id();
      return $insert_id;
    }
  }
}
