<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_agenda extends CI_Controller {

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



    $this->load->model('m_agenda');
   $datos['agendados'] = $this->m_agenda->getAgendado();
    $datos['tipificacion'] = $this->m_agenda->cargaTipificacion();   

       $this->load->view('v_agenda',$datos);

       // $this->load->view('v_principal');
	}
function cargaTipificacion()
    {
      //if($this->auth->getAuth()):
          $this->load->model('m_agenda');
          echo $this->m_agenda->cargaTipificacion();
     // else:
       //   redirect('login/index','refresh');
     // endif;
    }


 public function grabarRegistro() {
       
   

        $this->load->model("m_agenda");

$idcliente=trim($_POST['idcliente']);
$tipificacion=$_POST['tipificacion'];
$comentario=trim($_POST['comentario']);
/*

        $idcliente = $_POST["idcliente"];
        $tipificacion=$_POST["tipificacion"];
        $comentario=$_POST["comentario"];
*/

//echo "hola mundo";
//echo $tipificacion;


        if ($tipificacion==""){

         

        }else{
       $this->m_agenda->updateCliente($idcliente,$tipificacion,$comentario);
          $this->m_agenda->setUsarioBase($idcliente,$tipificacion);
         
        
        }
 $this->load->helper('url');



    $this->load->model('m_agenda');
   $datos['agendados'] = $this->m_agenda->getAgendado();
    $datos['tipificacion'] = $this->m_agenda->cargaTipificacion();   

       $this->load->view('v_agenda',$datos);

       
    }   
       }
