<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Test_Cart extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->library('Cart');
    }
    
    function index(){
        echo '<h3> Méthodes de test de la classe Panier </h3>';
        //test ici
        $this->load->model('Products_model','ProdManager', TRUE);
                
        $this->cart->add('EPICAS');
        $this->cart->add('EPICAS');
        $this->cart->add('EPIRIV');
        print_r($this->session->all_userdata());
        $compter = $this->cart->count();
        $cout = $this->cart->total();
        echo $compter . "<br>";
        echo $cout;
    }
}

