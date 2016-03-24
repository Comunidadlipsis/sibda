<?php

class m_login extends CI_Model {

    function __construct() {
        //llamada al constructor del CI para la clase
        parent::__construct();
        //Carga el driver de base de datos del codeigniter màs para usar la librerìa que contiene el mysqli
        $this->load->database();
    }

    public function m_validar_login($user, $pass) {
       // $query = $this->db->query("SELECT * FROM `usuario` where `pk_chr_id_usuario` = '$user' and usu_var_clave = '$pass';");
        $query = $this->db->query("SELECT * FROM `usuario` where `IDUSUARIO` = '$user' and CONTRASENIA = '$pass';");
 

        return $query->result();


    }
    
     public function m_validar_fecha_HT_Login($user){
        $query = $this->db->query("CALL `hoja_tiempo`.`valida_login_existe_HT`('$user');");
        return $query->result();
    }
}

?>
