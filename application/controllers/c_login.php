<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class c_login extends CI_Controller {

    function __construct() {
        //llamada al constructor del CI para la clase
        parent::__construct();
        //llamada a la función de inicio de sesión, registra el usuario en el servidor
     session_start();
    }

    public function index() {
        //Permite que la vista que llame esta función, obtenga la URL del servidor.
        $this->load->helper('url');
        $data['mensaje'] = '';
        if (isset($_POST['inputUsuario']) || isset($_POST['inputPass']) || isset($_POST['label_direccion_cambiar'])) {



            $resul = $this->Validar_Usuario($_POST['inputUsuario'], $_POST['inputPass']);
            if ($resul == '') {
                $data['mensaje'] = "
                  <h5><strong>Error!</strong> El usuario o contraseña ingresado no es válido. Intente nuevamente
                  <input type='hidden' id='datousuario' value='$resul'></h5>";
            }
            else {
                $data['mensaje'] = "<div class='alert alert-success'>
                  <strong>Bienvenido!</strong> Cargando sistema
                  <input type='hidden' id='datousuario' value='$resul'></div>";
            }
        }
        if(isset($_SESSION['LOGIN_USER']))
        {
          // header("location:/c_principal");
            header("location:/c_principal");
           // $this->load->view('v_hoja_ruta');
        }
        else
            $this->load->view('v_login',$data);
    }

    //Esta función recibe dos parámetros: El usuario y contraseña a través del método POST
     public function Validar_Usuario($user, $pass) {


        $this->load->model('m_login');
        $resul = $this->m_login->m_validar_login($user, $pass);

       

        if(count($resul)>0){
        foreach ($resul as $fila) {
            $validacion = ucwords($fila->NOMBRE)." ".ucwords($fila->APELLIDO);
            $usuario=$fila->IDUSUARIO;
            $permiso=$fila->ROL;
          }
 

        if ($validacion != '') {
            $_SESSION['LOGIN_USER'] = $usuario;
            $_SESSION['LOGIN_VALIDATION'] = $validacion;
            $_SESSION['PERMISO']=$permiso;
        }
       
        return $validacion;

      }
    }
    
    public function cerrar_sesion_sistema() {
        $this->load->helper('url');
        session_destroy();
        //unset($_SESSION['LOGIN_USER']);
        $ubicacion = base_url();
        header("Location:$ubicacion");
    }    

}

?>
