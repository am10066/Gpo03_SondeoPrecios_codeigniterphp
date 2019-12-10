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

  public function insertarSondeo($data)
{
   $this->db->insert("sondeo", $data);
}
 

//Modificar sondeo!!

public function getSondeo(int $id){

  
  $sondeo= $this->db->get_where('sondeo', array('id'=>$id));
  
  return $sondeo->row_array();
}


}