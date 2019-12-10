<?php
defined('BASEPATH') OR exit('No direct SCRIPT access allowed');

class Harinas extends CI_Controller{

  public function index(){
    $this->load->model('harinas_model');
    $data=array(
      'head'=>$this->load->view('plantilla/head','',TRUE),
      'header'=>$this->load->view('plantilla/header','',TRUE),
      'aside'=>$this->load->view('plantilla/aside','',TRUE),
      'harina'=>$this->harinas_model->consultar(),
    );

    $this->load->view('harinas', $data);

  }

}