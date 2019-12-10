<?php

class Producto_model extends CI_Model{


  public $nombre_producto;
  public $nombre_presentacion;
  public $marca_producto;
  public $cantidad_presentacion;
  public $unidad_de_medida_presentacion;
<<<<<<< HEAD
=======
      
>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114

  public function __contruct(){
    parent::Model();
    $this->load->database();
  }

  public function consultar(){
    return $this->db->get("producto_presentacion")->result_array();
  }

<<<<<<< HEAD

}
=======
  public function getProductoNombre()
  {
    $this->db->order_by ("nombre", "marca","asc");
    $nombre=$this->db->get("producto");

{  
        return $nombre->result();

    }

  }


  public function getPresentacion()
  {
    $this->db->order_by ("nombre", "cantidad","unidad_de_medida","asc");
    $marca=$this->db->get("presentacion");

{  
        return $marca->result();

    }

  }



}                                                                                                                                                  
>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114
