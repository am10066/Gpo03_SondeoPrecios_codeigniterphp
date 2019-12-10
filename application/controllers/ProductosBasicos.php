<?php
defined('BASEPATH') OR exit('No direct SCRIPT access allowed');

class ProductosBasicos extends CI_Controller{

  
  public function index(){
    $this->load->model('Productosbasicos_model');
    $data=array(
      'head'=>$this->load->view('plantilla/head','',TRUE),
      'header'=>$this->load->view('plantilla/header','',TRUE),
      'aside'=>$this->load->view('plantilla/aside','',TRUE),
      'productobasico'=>$this->Productosbasicos_model->consultar(),
    );

    $this->load->view('productosbasicos', $data);

  }

}