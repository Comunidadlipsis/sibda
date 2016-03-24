<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_venta extends CI_Controller {

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

    $this->load->model('m_venta');
  //  $rowidcliente == $this->m_principal->countGetCliente();
            //   if($rowidcliente === 1){
            //   $idcliente = $this->m_principal->getCliente()->fetch_object()->IDCLIENTES;
              
           //}else{
            //   $idcliente = "1";
          // }
		$datos['afiliados'] = $this->m_venta->getAfiliado();
       //  print_r($datos);
        $this->load->view('v_venta',$datos);

       // $this->load->view('v_principal');
	}

    


    function cargaTipificacion()
    {
      //if($this->auth->getAuth()):
          $this->load->model('m_principal');
          echo $this->m_principal->cargaTipificacion();
     // else:
       //   redirect('login/index','refresh');
     // endif;
    }



public function grabarRegistro() {
       
      
        $this->load->model("m_principal");
        $idcliente = $_POST["idcliente"];
        $dni = $_POST["dni"];
        $telf3 = $_POST["telf3"];
        $direccion=$_POST["direccion"];
        $tipificacion=$_POST["tipificacion"];
        $comentario=$_POST["comentario"];

//echo $idcliente." ".$dni." ".$telf3." ".$direccion." ".$tipificacion." ". $comentario;


        if ($tipificacion==""){

           

        }else{
          $this->m_principal->updateCliente($idcliente,$dni,$telf3,$direccion,$tipificacion,$comentario);
          $this->m_principal->setUsarioBase($idcliente,$tipificacion);
         
        
        }

       
       
    }
 }
