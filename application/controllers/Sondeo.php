<?php
defined('BASEPATH') OR exit('No direct SCRIPT access allowed');

class Sondeo extends CI_Controller{
<<<<<<< HEAD
=======
  public $sondeo;


>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114

  public function index(){

    $this->load->model('Sondeo_model');

    $data=array(
      'head'=>$this->load->view('plantilla/head','',TRUE),
      'header'=>$this->load->view('plantilla/header','',TRUE),
      'aside'=>$this->load->view('plantilla/aside','',TRUE),
      'sondeos'=>$this->Sondeo_model->consultar(),
<<<<<<< HEAD

    );


=======
      
      
     


    );



    $this->load->view('sondeo', $data);
  
  

   }



//Guardar Sondeo!!

  public function guardarSondeo(){
    $this->load->model('Sondeo_model');
    
  
    if(!$_POST)
    header("location:".base_url());

    $data = array(

       
       'id' =>$_POST['id'],
       'fecha' =>$_POST['fecha'],

       'usuario' =>$_POST['usuario'],
       
    );
    $this->Sondeo_model->insertarSondeo($data);
    
    $data=array(
      'head'=>$this->load->view('plantilla/head','',TRUE),
      'header'=>$this->load->view('plantilla/header','',TRUE),
      'aside'=>$this->load->view('plantilla/aside','',TRUE),
      'sondeos'=>$this->Sondeo_model->consultar(),


    );

>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114


    $this->load->view('sondeo', $data);

<<<<<<< HEAD

  }
}
=======
   }




//Modificar Sondeo!!!

      public function modificarSondeo( $id=null)
      {
        $this->load->model('Sondeo_model');
  

        $data=array(
        'head'=>$this->load->view('plantilla/head','',TRUE),
        'header'=>$this->load->view('plantilla/header','',TRUE),
        'aside'=>$this->load->view('plantilla/aside','',TRUE),
         
    
      );
  
      if(!$id == null  )
      {
     $sondeo= array(
       $this->Sondeo_model->getSondeo($id),
     );
    // var_dump($sondeo);
       
        $this->load->view('modificar_sondeo',$data,$sondeo);
   
       }
        else
       header("location:".base_url()."sondeo"); 
    }  

    
 }






>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114
