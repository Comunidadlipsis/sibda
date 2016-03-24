<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_principal extends CI_Controller {

 ## Creacion de contructores y obteniendo las librerias y helpers para el controlador
    function __construct() {
       parent::__construct();
    session_start();
    }

	public function index()
	{
		//Permite que la vista que llame esta función, obtenga la URL del servidor.
    $this->load->helper('url');

   

    $this->load->model('m_principal');

		$datos['cliente'] = $this->m_principal->getCliente();

        $this->load->view('v_principal',$datos);

	}

    function cargaTipificacion()
    {
          $this->load->model('m_principal');
          echo $this->m_principal->cargaTipificacion();

    }
	
	function cargaDepartamentos()
    {
          $this->load->model('m_principal');
          echo $this->m_principal->cargaDepartamentos();

    }
	
	function cargaProvincias()
    {
          $this->load->model('m_principal');
          echo $this->m_principal->cargaProvincias();

    }
	
	function cargaDistritos()
    {
          $this->load->model('m_principal');
          echo $this->m_principal->cargaDistritos();

    }
	
	function cargaActualizado()
    {
          $this->load->model('m_principal');
          echo $this->m_principal->cargaActualizado();

    }
	
	function cargaCorllam()
    {
          $this->load->model('m_principal');
          echo $this->m_principal->cargaCorllam();

    }
	
	function cargaC402()
    {
          $this->load->model('m_principal');
          echo $this->m_principal->cargaC402();

		 
    }

public function grabarRegistro() {
       
      
        $this->load->model("m_principal");
        $hcid = $_POST["hcid"];
        $correo = $_POST["correo"];
        $tlfmovil= $_POST["tlfmovil"];
        $tlffijo=$_POST["tlffijo"];
        $tlfofic=$_POST["tlfofic"];
        $tlfanex=$_POST["tlfanex"];
		$direccion=$_POST["direccion"];
		$referencia=$_POST["referencia"];
		$distrito=$_POST["distrito"];
		$provincia=$_POST["provincia"];
		$departamento=$_POST["departamento"];
		$edad=$_POST["edad"];
		$fecha=$_POST["fecha"];
		$hora=$_POST["hora"];
		$anexo=$_POST["anexo"];
		$tlfcont=$_POST["tlfcont"];
		$correocont=$_POST["correocont"];
		$rescod=$_POST["rescod"];
		$actualizado=$_POST["actualizado"];
		$corllam=$_POST["corllam"];
		
        if ($rescod==""){

        }else{
          $this->m_principal->updateCliente($hcid,$correo,$tlfmovil,$tlffijo,$tlfofic,$tlfanex,$direccion,$referencia,$distrito,$provincia,$departamento,$edad,$fecha,$hora,$anexo,$tlfcont,$correocont,$rescod,$actualizado,$corllam);
          $this->m_principal->setUsarioBase($hcid,$rescod);
         
        
        }

       
       
    }
 }
