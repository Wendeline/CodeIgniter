<?php if(!defined('BASEPATH')) exit('NO direct script access allowed');

class Products_model extends CI_Model{
    
    protected $table='produit';
    
    public function add_product($idP,$libP,$typeP,$prixP){
        $data = array(
            'id' => $idP,
            'libelle'=> $libP,
            'type'=>$typeP,
            'prix'=>$prixP,
            'dateAjout'=>date('Y-m-j')
        );
        $this->db->insert($this->table,$data);
    }
    
    public function edit_product($idP,$libP=null,$typeP=null,$prixP=null){
        if($libP != null){
            $this->db->set('libelle',$libP);
        }
        if($typeP != null){
            $this->db->set('type',$typeP);
        }
        if($prixP != null){
            $this->db->set('prix',$prixP);
        }
        $this->db->where('id',$idP);
        $this->db->update($this->table);
    }
    
    public function remove_product($idP){
        $this->db->where('id',$idP);
        $this->db->delete($this->table);
    }
    
    public function count($where = array()){
        $this->db->where($where);
        return $this->db->count_all_results($this->table);
    }
    
    public function get_catalogue(){
        return $this->db->select('*')->from($this->table)->order_by('prix','asc')->get()->result();
    }
    
    public function get_product($idP){
        $ref = null;
        $ref = $this->db->where('id',$idP);
        if ($ref != null){
            return $this->db->select ('*')->from($this->table)->get()->result();
        }else{
            return False;
        }
    }
    
}
