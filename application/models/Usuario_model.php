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
<<<<<<< HEAD


=======
>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114
  }

  public function consultar(){
    return $this->db->get("usuario")->result_array();
  }

<<<<<<< HEAD
  public function buscar_usuario($index=0){

    if($index!=0){
      $this->db->where('username',$index);
    }

    return $this->db->get("usuario")->result();
  }

  public function eliminar($username){

    $e=throw new \Exception("No se puede eliminar a $username porque tiene asociado uno o mas sondeos", 1);


    try {

      $query=$this->db->query("delete from usuario where username='$username'");
    } catch (\Exception $e) {

      return FALSE;
    }

      if($query){

        return TRUE;
      }
      else{
        return FALSE;
      }



    }





  }
=======

}
>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114
