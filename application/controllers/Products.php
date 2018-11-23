<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller{
    
    public function index(){
        $this->load->model('Products_model','ProdManager', TRUE);
        
            $data['title'] = "Catalogue";
            $data['heading'] = "Les produits disponibles";
            $data['content'] = $this->ProdManager->get_catalogue();
        
        $this->load->view('products_view.php',$data);
    }
    
    
}