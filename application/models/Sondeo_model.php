<?php

class Sondeo_model extends CI_Model{


  public $id;
  public $fecha;
  public $usuario;
<<<<<<< HEAD


=======
  
>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114
  public function __contruct(){
    parent::Model();
    $this->load->database();
  }

  public function consultar(){
    return $this->db->get("sondeo")->result_array();
  }

<<<<<<< HEAD

}
=======
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
>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114
