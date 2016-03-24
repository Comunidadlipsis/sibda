<?php

class m_usuario extends CI_Model {

    function __construct() {
        //llamada al constructor del CI para la clase
        parent::__construct();
        //Carga el driver de base de datos del codeigniter màs para usar la librerìa que contiene el mysqli
        $this->load->database();

    }




     public function grabarRegistro($usuario,$clave,$nombres,$apellidos,$perfil){
               
                 $query = $this->db->query("insert into usuario set IDUSUARIO='$usuario',NOMBRE='$nombres',APELLIDO='$apellidos',ROL='$perfil',
                                            CONTRASENIA='$clave',FECHACREACION=NOW(),FECHAMODIFICACION=NOW(),ACTIVO='0';");   



        }

}

?>
