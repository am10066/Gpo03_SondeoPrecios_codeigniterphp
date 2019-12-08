<?php
defined('BASEPATH') OR exit('No direct SCRIPT access allowed');

class Usuario extends CI_Controller{

  public function index(){

    $this->load->model('Usuario_model');

    $data=array(
      'head'=>$this->load->view('plantilla/head','',TRUE),
      'header'=>$this->load->view('plantilla/header','',TRUE),
      'aside'=>$this->load->view('plantilla/aside','',TRUE),
      'usuarios'=>$this->Usuario_model->consultar(),

    );




    $this->load->view('usuario', $data);


  }
}
