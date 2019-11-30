<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroCtr extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load -> helper(array('getmenu'));
        $this->load->database();
        $this->load-> model('Users');
        $this -> load -> library(array('form_validation'));
    
    }
    public function index()
    {
        $data['menu'] =main_menu();
        $this->load->view('Registro',$data);
      $query = $this ->db->get('usuario');
        var_dump($query->result());
    }
    
    
    public function create()
    {

      $username= $this-> input-> post('username');
       $email = $this-> input-> post('email');
       $password = $this-> input-> post('password');
       $password_c = $this-> input-> post('password_confirm');

       $config = array
       (
            array(
                'field' => 'username',
                'label' => 'Nombre Usuario',
                'rules' => 'required|alpha_numeric',
                'errors' => array('required'=> 'El nombre de usuario es requerido', 'alpha_numeric'=>'Solo puede ingresarse caracteres alfanumericos. '

                ),
            ),
            array(
                'field' => 'password',
                'label' => 'Correo',
                'rules' => 'required|valid_email',
                'errors' => array('required' => 'El email es requerido.', 'valid_email'=>'El correo ingresado es invalido'
                
            ),
        ),
        array(
            'field' => 'password',
            'label' => 'contrasena',
            'rules' => 'required|min_length[8]|max_length[10]',
            'errors' => array('required'=> 'La contraseña es requerida', 'min_length'=>'La contraseña debe de ser de 8 a 10 caracteres','max_length'=>'La contraseña debe de ser de 8 a 10 caracteres'

            )
        )
       );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE)
        {
            $data['menu']=main_menu();
            $this->load->view('Registro',$data);
        }
        else
        {
            $datos=array(
                'usuario'=> $username,
                'email'=> $email,
                'contrasena'=> $password
             );
          $data['menu']=main_menu();
             var_dump($username , $email . $password . $password_c);
          if(!$this->Users->create($datos)){
              $data['msg'] ='Ocurrio un error al ingresar los datos. ';
              $this->load->view('Registro',$data);
      
          }
          $data['msg'] ='Datos ingresados correctamente. ';
              $this->load->view('Registro',$data);
        }


      


        
    }
}