<?php

class Producto_model extends CI_Model{


  public $nombre_producto;
  public $nombre_presentacion;
  public $marca_producto;
  public $cantidad_presentacion;
  public $unidad_de_medida_presentacion;

  public function __contruct(){
    parent::Model();
    $this->load->database();
  }

  public function consultar(){
    return $this->db->get("producto_presentacion")->result_array();
  }


}
