<?php
defined('BASEPATH') OR exit('No direct SCRIPT access allowed');

class Usuario extends CI_Controller{

<<<<<<< HEAD
  public function __contruct(){
    parent::__contruct();

  }

  public function index(){

    $this->load->Model('Usuario_model');
=======
  public function index(){

    $this->load->model('Usuario_model');
>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114

    $data=array(
      'head'=>$this->load->view('plantilla/head','',TRUE),
      'header'=>$this->load->view('plantilla/header','',TRUE),
      'aside'=>$this->load->view('plantilla/aside','',TRUE),
      'usuarios'=>$this->Usuario_model->consultar(),

    );




    $this->load->view('usuario', $data);


  }
<<<<<<< HEAD

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





=======
>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114
}
