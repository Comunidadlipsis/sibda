<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_configuracion extends CI_Controller {

 ## Creacion de contructores y obteniendo las librerias y helpers para el controlador
    function __construct() {
       parent::__construct();
  //   $this->load->helper(array('html','form','url'));
    session_start();
    }

	public function index()
	{
		//Permite que la vista que llame esta función, obtenga la URL del servidor.
    $this->load->helper('url');

   
 

 $this->load->model('m_configuracion');
 
	$datos['tipificadores'] = $this->m_configuracion->ListarTipificadores();


      
       $this->load->view('v_configuracion',$datos);
 
}
   
     public function Actualizar_vista_tipificacion() {
       $this->load->helper('url');
          
          $this->load->model("m_configuracion");
          
          
          $id=trim($_POST['id']);
          $v_estado=trim($_POST['v_estado_tipificacion']);
          
          
          
         /* echo $id." -". $v_estado;*/
          
          
          $this->m_configuracion->Actualizar_vista_tipificacion($id,$v_estado);
           $this->m_configuracion->Actualizar_vista_clientes($id,$v_estado);
          redirect("../index.php/c_configuracion");
        
       
       
       
    }  
    


 }
