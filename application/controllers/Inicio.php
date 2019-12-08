<?php
defined('BASEPATH') OR exit('No direct SCRIPT access allowed');

class Inicio extends CI_Controller{

  public function index(){

    $data=array(
      'head'=>$this->load->view('plantilla/head','',TRUE),
      'header'=>$this->load->view('plantilla/header','',TRUE),
      'aside'=>$this->load->view('plantilla/aside','',TRUE),

    );

    $this->load->view('inicio', $data);

  }

}
