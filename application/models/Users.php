<?php
class Users extends CI_Model{
    function __construct(){
        $this-> load -> database();
    }
   public function create($datos)
    {
        $datos=array(

            'usuario'=>$datos['usuario'],
            'email'=> $datos['email'],
            'contrasena'=> $datos['contrasena'],
            'status' => 1,
            'rango'=>2
        );

    if(!$this->db-> insert('usuario',$datos))
    {
        return false;

    }
    return true;
        
    }


}