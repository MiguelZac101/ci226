<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Prueba extends CI_Controller {

    public function index() {
        echo "index";
    }
    
    public function formulario(){
        
        $data = "' && 'z'='z";
//        $data = 5;
        
        settype($data, 'integer');
        
        var_dump($data);
        
//        $data = $this->security->xss_clean($data,TRUE);
//        
//        echo $data;
        
//        $respuesta = false;
//        
//        if($this->input->post("nombre")){
//            $respuesta = $this->input->post("nombre");
//        }
//        
//echo $respuesta;
//        
//        $data['respuesta'] = "";
//        $this->load->view("formulario",$data);
    }

}
