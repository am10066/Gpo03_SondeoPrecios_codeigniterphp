<?php
defined('BASEPATH') OR exit('No direct SCRIPT access allowed');

class UtilesEscolares extends CI_Controller{

  public function index(){
    $this->load->model('utilesescolares_model');
    $data=array(
      'head'=>$this->load->view('plantilla/head','',TRUE),
      'header'=>$this->load->view('plantilla/header','',TRUE),
      'aside'=>$this->load->view('plantilla/aside','',TRUE),
      'utilesescolares'=>$this->utilesescolares_model->consultar(),
    );

    $this->load->view('utilesescolares', $data);

  }

}