<?php
defined('BASEPATH') OR exit('No direct SCRIPT access allowed');

class GranosBasicos extends CI_Controller{

  public function index(){
    $this->load->model('granosbasicos_model');
    $data=array(
      'head'=>$this->load->view('plantilla/head','',TRUE),
      'header'=>$this->load->view('plantilla/header','',TRUE),
      'aside'=>$this->load->view('plantilla/aside','',TRUE),
      'granobasico'=>$this->granosbasicos_model->consultar(),
    );

    $this->load->view('granosbasicos', $data);

  }

}