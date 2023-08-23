<?php 

class ModAkun extends CI_Model
{
	public function cariPassword($username)
  {
    $this->db->select('*');
    $this->db->from('akun');
     $this->db->where('email',$username);
     return $this->db->get()->result();    
   
  }

  public function getAkun()
  {
    $this->db->select('*');
    $this->db->from('akun');
    $this->db->order_by("nama_akun", "asc");
     return $this->db->get()->result();    
   
  }

  public function getAkunId($id)
  {
    $this->db->select('*');
    $this->db->from('akun');
    $this->db->where("id_akun", $id);
     return $this->db->get()->result();    
   
  }
  public function getAkunKelompok($id)
  {
    $this->db->select('kelompok');
    $this->db->from('akun_kelompok');
    $this->db->join('kelompok','akun_kelompok.id_kelompok=kelompok.id_kelompok');
    $this->db->where("id_akun", $id);
    return $this->db->get()->result();    
   
  }
  public function getKelompok()
  {
    $this->db->select('*');
    $this->db->from('kelompok');
    $this->db->order_by("kelompok", "asc");
     return $this->db->get()->result();    
   
  }

  public function getKelompokId($id)
  {
    $this->db->select('*');
    $this->db->from('kelompok');
    $this->db->where("id_kelompok", $id);
     return $this->db->get()->result();    
   
  }

  public function simpanPengumuman($data){
    $this->db->insert('pengumuman', $data);
      
    
      if($this->db->affected_rows() != 1) {
        return false;
      }
      else{
        $insert_id = $this->db->insert_id();
        return $insert_id;
      }
       
    
  }

  public function dashPengumuman(){
    $this->db->select('*');
    $this->db->from('pengumuman');
    $this->db->order_by("date_created", "desc");
    $this->db->limit(10);
     return $this->db->get()->result();    
  }

  public function hitungPengumuman(){
    $this->db->select('count(*) as jumlah');
    $this->db->from('pengumuman');
     return $this->db->get()->result();    
   
  }

  public function hitungTerkirim(){
    $this->db->select('count(*) as jumlah');
    $this->db->from('pengumuman');
     $this->db->where('status','TERKIRIM');
     return $this->db->get()->result();    
  }

  public function hitungAktif(){
    $this->db->select('count(*) as jumlah');
    $this->db->from('pengumuman');
     $this->db->where('status','AKTIF');
     return $this->db->get()->result();    
   
  }

  public function hitungGagal(){
    $this->db->select('count(*) as jumlah');
    $this->db->from('pengumuman');
     $this->db->where('status','GAGAL');
     return $this->db->get()->result();    

  }


  public function dashPengumumanId($id){
    $this->db->select('*');
    $this->db->from('pengumuman');
    $this->db->where('id_akun',$id);
    $this->db->order_by("date_created", "desc");
    $this->db->limit(10);
     return $this->db->get()->result();    
  }

  public function hitungPengumumanId($id){
    $this->db->select('count(*) as jumlah');
    $this->db->from('pengumuman');
    $this->db->where('id_akun',$id);
     return $this->db->get()->result();    
   
  }

  public function hitungTerkirimId($id){
    $where=[
      'id_akun'=>$id,
      'status'=>'TERKIRIM'
    ];
    $this->db->select('count(*) as jumlah');
    $this->db->from('pengumuman');
    $this->db->where($where);
     return $this->db->get()->result();    
  }

  public function hitungAktifId($id){
    $where=[
      'id_akun'=>$id,
      'status'=>'AKTIF'
    ];
    $this->db->select('count(*) as jumlah');
    $this->db->from('pengumuman');
    $this->db->where($where);
     return $this->db->get()->result();    
   
  }

  public function hitungGagalId($id){
    $where=[
      'id_akun'=>$id,
      'status'=>'GAGAL'
    ];
    $this->db->select('count(*) as jumlah');
    $this->db->from('pengumuman');
    $this->db->where($where);
     return $this->db->get()->result();    

  }

  public function updatePassword($email,$password){

    $this->db->where('email', $email);
    $this->db->update('akun', ['password' => $password]);

    return ($this->db->affected_rows() != 1) ? false : true;
  }

  public function simpanKelompok($data){
    $this->db->insert('kelompok', $data);

    return ($this->db->affected_rows() != 1) ? false : true;
  }

  public function updateKelompok($data,$id){

    $this->db->where('id_kelompok', $id);
    $this->db->update('kelompok', $data);

    return ($this->db->affected_rows() != 1) ? false : true;
  }

  public function hapusKelompok($id){

    
    $this -> db -> where('id_kelompok', $id);
    $this -> db -> delete('akun_kelompok');

    $this -> db -> where('id_kelompok', $id);
    $this -> db -> delete('kelompok');


    return ($this->db->affected_rows() != 1) ? false : true;
  }



public function simpanAkun($data){
  $this->db->insert('akun',$data);
  

  if($this->db->affected_rows() != 1) {
    return false;
  }
  else{
    $insert_id = $this->db->insert_id();
    return $insert_id;
  }
   
}

public function akunKelompok($data){
  $this->db->insert('akun_kelompok',$data);
  return ($this->db->affected_rows() != 1) ? false : true;
}

public function ubahAkun($data,$id){
  $this->db->where('id_akun', $id);
  $this->db->update('akun', $data);

  return ($this->db->affected_rows() != 1) ? false : true;

}

public function ubahAkunKelompok($data){


  $this->db->insert('akun_kelompok',$data);
  return ($this->db->affected_rows() != 1) ? false : true;
  
}

public function hapusAkunKelompok($id){
  $this -> db -> where('id_akun', $id);
  $this -> db -> delete('akun_kelompok');

  return ($this->db->affected_rows() != 1) ? false : true;
}

public function hapusAkun($id){
  $this -> db -> where('id_akun', $id);
  $this -> db -> delete('akun_kelompok');

  $this -> db -> where('id_akun', $id);
  $this -> db -> delete('akun');

  return ($this->db->affected_rows() != 1) ? false : true;
}

public function resetPassword($data,$id){
  $this->db->where('id_akun', $id);
  $this->db->update('akun', $data);

  return ($this->db->affected_rows() != 1) ? false : true;

}


}

?>