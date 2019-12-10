<?php
defined('BASEPATH') OR exit('No direct SCRIPT access allowed');

class Usuario extends CI_Controller{

  public function __contruct(){
    parent::__contruct();

  }

  public function index(){

    $this->load->Model('Usuario_model');

    $data=array(
      'head'=>$this->load->view('plantilla/head','',TRUE),
      'header'=>$this->load->view('plantilla/header','',TRUE),
      'aside'=>$this->load->view('plantilla/aside','',TRUE),
      'usuarios'=>$this->Usuario_model->consultar(),

    );




    $this->load->view('usuario', $data);


  }

  public function eliminar($username){

    $this->load->Model('Usuario_model');

    $query=$this->Usuario_model->eliminar($username);

    if($query==TRUE){

      redirect(base_url("Usuario"));

    }
    else{
      redirect(base_url("Usuario"));
    }


  }





}
