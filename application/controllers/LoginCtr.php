<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginCtr extends CI_Controller {
	

public function __construct(){
	parent::__construct();
	$this->load -> helper(array('getmenu','url'));

}

	public function index()
	{
		$data['menu']=main_menu();
		$this->load->view('Login',$data);
	}
public function validate(){
$email=$this->input->post('email');
$password=$this->input->post('password');
$config=  array
(
	 array(
		 'field' => 'email',
		 'label' => 'Correo electronico',
		 'rules' => 'required|valid_email',
		 'errors' => array('required'=> 'El nombre de usuario es requerido', 'valid_email'=>'El correo ingresado es invalido'

		 					),
	 ),
	 array
	 (
		 'field' => 'password',
		 'label' => 'Contrasena',
		 'rules' => 'required',
		 'errors' => array('required' => 'La contraseña es requerida.',		 
						 )
	 )
);

}
	
}
