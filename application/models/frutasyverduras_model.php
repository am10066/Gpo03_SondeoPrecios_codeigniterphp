<?php

class frutasyverduras_model extends CI_Model{

  public $id;
  public $fecha;
  public $sondeo;
  public $nombre_producto;
  public $nombre_presentacion;
  public $marca_producto;
  public $cantidad_presentacion;
  public $unidad_medida_presentacion;
  public $categoria;
  public $tipo_de_establecimiento;
  public $direccion;
  public $municipio;
  public $departamento;
  public $precio;
  public $usuario;


  public function __contruct(){
    parent::Model();
    $this->load->database();
  }

  public function consultar(){
    $this->db->where('categoria', 'Frutas y Verduras');
   return $this->db->get('encuesta')->result_array();
  }


}