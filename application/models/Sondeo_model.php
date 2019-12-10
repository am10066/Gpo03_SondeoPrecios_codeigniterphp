<?php

class Sondeo_model extends CI_Model{


  public $id;
  public $fecha;
  public $usuario;


  public function __contruct(){
    parent::Model();
    $this->load->database();
  }

  public function consultar(){
    return $this->db->get("sondeo")->result_array();
  }


}
