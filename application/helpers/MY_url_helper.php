<?php

function css_url($nom){
    return base_url() . 'assets/css/'.$nom.'.css';
}

function js_url($nom){
    return base_url() .'assets/javascript/'.$nom.'.js';
}

function img_url($nom){
    return base_url() .'assets/images/'.$nom.'.png';
}

function img($nom, $attributes=""){
    
}