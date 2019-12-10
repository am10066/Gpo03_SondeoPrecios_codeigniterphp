<?php
defined('BASEPATH') OR exit('No direct SCRIPT access allowed');

class FrutasVerduras extends CI_Controller{

  public function index(){

    $this->load->model('frutasyverduras_model');
    $data=array(
      'head'=>$this->load->view('plantilla/head','',TRUE),
      'header'=>$this->load->view('plantilla/header','',TRUE),
      'aside'=>$this->load->view('plantilla/aside','',TRUE),
      'frutasyverduras'=>$this->frutasyverduras_model->consultar(),
    );

    $this->load->view('frutasverduras', $data);

  }

}