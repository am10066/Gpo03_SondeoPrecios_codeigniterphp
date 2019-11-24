<?php
defined('BASEPATH') OR exit('No direct SCRIPT access allowed');

class PaginaPrincipal extends CI_Controller{

  public function index(){
    $this->load->view('pagina_principal');
  }




}
