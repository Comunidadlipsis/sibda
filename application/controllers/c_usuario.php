<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_usuario extends CI_Controller {

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

   
  //$this->validar_session();

    //$this->load->model('m_usuario');
  //  $rowidcliente == $this->m_principal->countGetCliente();
            //   if($rowidcliente === 1){
            //   $idcliente = $this->m_principal->getCliente()->fetch_object()->IDCLIENTES;
              
           //}else{
            //   $idcliente = "1";
          // }
	//	$datos['cliente'] = $this->m_principal->getCliente();
         //print_r($datos);
        $this->load->view('v_usuario');

       // $this->load->view('v_principal');
	}

    





public function grabarRegistro() {
       
      
        $this->load->model("m_usuario");

        $usuario = $_POST["usuario"];
        $clave = $_POST["clave"];
        $nombres = $_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $perfil=$_POST["perfil"];
        

//echo $idcliente." ".$dni." ".$telf3." ".$direccion." ".$tipificacion." ". $comentario;


        
          $this->m_usuario->grabarRegistro($usuario,$clave,$nombres,$apellidos,$perfil);
         
        
        

       
       
    }
 }
