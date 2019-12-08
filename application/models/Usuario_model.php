<?php

class Usuario_model extends CI_Model{


  public $username;
  public $password;
  public $rol;
  public $nombres;
  public $apellidos;

  public function __contruct(){
    parent::Model();
    $this->load->database();
  }

  public function consultar(){
    return $this->db->get("usuario")->result_array();
  }


}
