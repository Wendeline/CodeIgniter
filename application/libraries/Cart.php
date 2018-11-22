<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CI_Cart{
    private $CI;
    public function __construct() {
        $this->CI =& get_instance();
    }
    
    public function add($id){
        if (is_null($this->CI->session->userdata($id))){
            $qty=1;
        }else{
            $qty = $this->CI->session->userdata($id)['qty']+1;
        }
        $prod = $this->CI->ProdManager->get_product($id);
        if ($prod != FALSE){
            $new_data = array(
                'name'=> $prod[0]->libelle,
                'qty'=> $qty,
                'price'=> $prod[0]->prix
            );
            $this->CI->session->set_userdata($id,$new_data);
        }
    }
    
    public function remove($id){
        $prod = $this->CI->session->$id;
        if (!is_null($prod)){
            if ($prod['qty'] > 1){
                $new_data = array(
                'name'=> $prod['name'],
                'qty'=> $prod['qty']-1,
                'price'=> $prod['price']
                );
                $this->CI->session->set_userdata($id,$new_data);
            }else{
                $this->CI->session->unset_userdata($id);
            }
        }
    }
    
    public function clear(){
        $this->CI->session->sess_destroy();
    }
    
    public function content(){
        $panier = $this->CI->session->userdata();
        array_shift($panier);
        return($panier);
    }
    
    public function count(){
        $panier = $this->CI->session->userdata();
        array_shift($panier);
        $nb=0;
        foreach ($panier as $prod) {
            //à coder
        }
        return $nb;
    }
    
    public function total(){
        $panier = $this->CI->session->userdata();
        array_shift($panier);
        $total = 0;
        foreach($panier as $prod){
            //à coder
        }
        return $total;
    }
    
    
}


