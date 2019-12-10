<?php
defined('BASEPATH') OR exit('No direct SCRIPT access allowed');

class Producto extends CI_Controller{

  public function index(){

    $this->load->model('Producto_model');

    $data=array(
      'head'=>$this->load->view('plantilla/head','',TRUE),
      'header'=>$this->load->view('plantilla/header','',TRUE),
      'aside'=>$this->load->view('plantilla/aside','',TRUE),
      'productos'=>$this->Producto_model->consultar(),
      'producto_marca'=>$this->Producto_model->getProductoNombre(),
      'presentacion'=>$this->Producto_model->getPresentacion(),

    );




    $this->load->view('producto', $data);


  }
}
