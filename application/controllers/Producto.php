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
<<<<<<< HEAD
=======
      'producto_marca'=>$this->Producto_model->getProductoNombre(),
      'presentacion'=>$this->Producto_model->getPresentacion(),
>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114

    );




    $this->load->view('producto', $data);


  }
}
