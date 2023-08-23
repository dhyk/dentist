<?php 

class ModNomor extends CI_Model
{

  public function getNomorId($id)
  {
    $this->db->select('*');
    $this->db->from('nomor_akses');
    $this->db->where("id_akun", $id);
     return $this->db->get()->result();    
   
  }

  public function getNomorDetail($id)
  {
    $this->db->select('*');
    $this->db->from('nomor_akses');
    $this->db->where("id", $id);
     return $this->db->get()->result();    
   
  }

  public function getKelompokId($id)
  {
    $this->db->select('kelompok.id_kelompok, kelompok.kelompok');
    $this->db->from('kelompok');
    $this->db->join('akun_kelompok','kelompok.id_kelompok=akun_kelompok.id_kelompok');
    $this->db->where("akun_kelompok.id_akun", $id);
     return $this->db->get()->result();    
   
  }


  public function simpanNomor($data){
    $this->db->insert('nomorwa',$data);
    
  
    if($this->db->affected_rows() != 1) {
      return false;
    }
    else{
      $insert_id = $this->db->insert_id();
      return $insert_id;
    }
     
  }

  public function nomorKelompok($data){
    $this->db->insert('kelompok_nomorwa',$data);
    return ($this->db->affected_rows() != 1) ? false : true;
  }

  public function cariNomor($nomor)
  {
    $this->db->select('*');
    $this->db->from('nomorwa');
    $this->db->where("nomor", $nomor);
     return $this->db->get()->result();    
   
  }

  public function editNomor($data,$id){

    $this->db->where('id_nomorwa', $id);
    $this->db->update('nomorwa', $data);
  
    return ($this->db->affected_rows() != 1) ? false : true;
  }

  public function hapusKelNom($id){
    $this -> db -> where('id', $id);
    $this -> db -> delete('kelompok_nomorwa');
  
    return ($this->db->affected_rows() != 1) ? false : true;
  }

  public function hapusNomorwa($id){
    $this -> db -> where('id_nomorwa', $id);
    $this -> db -> delete('nomorwa');
  
    return ($this->db->affected_rows() != 1) ? false : true;
  }

  public function ambilNomor($id){
    $this->db->select('id_nomorwa');
    $this->db->from('nomor_akses');
    $this->db->where("id_kelompok", $id);
     return $this->db->get()->result();  
  }

  public function simpanPengumumanWa($data){
    $this->db->insert('pengumuman_nomorwa',$data);
    return ($this->db->affected_rows() != 1) ? false : true;
  }

  public function getPengumumanId($id)
  {
    $this->db->select('*');
    $this->db->from('pengumuman');
    $this->db->join('akun','akun.id_akun=pengumuman.id_akun');
    $this->db->where("akun.id_akun", $id);
     return $this->db->get()->result();    
   
  }

  public function getPengumuman()
  {
    $this->db->select('*');
    $this->db->from('pengumuman');
    $this->db->join('akun','akun.id_akun=pengumuman.id_akun');
     return $this->db->get()->result();    
   
  }

  public function getPengumumanById($id){
    $this->db->select('*');
    $this->db->from('pengumuman_kirim');
    $this->db->where("id_pengumuman", $id);
     return $this->db->get()->result();   
  }

  public function statusPengumuman($id,$data){

    $this->db->where('id_pengumuman', $id);
    $this->db->update('pengumuman', $data);
  
    return ($this->db->affected_rows() != 1) ? false : true;
  }

}

?>