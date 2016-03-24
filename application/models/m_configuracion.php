<?php

class m_configuracion extends CI_Model {

    function __construct() {
        //llamada al constructor del CI para la clase
        parent::__construct();
        //Carga el driver de base de datos del codeigniter màs para usar la librerìa que contiene el mysqli
        $this->load->database();

    }



        function ListarTipificadores()
        {
            $query = $this->db->query("SELECT id,descripcion,v_estado FROM tipificacion");
            return $query->result();
        }

         function Actualizar_vista_tipificacion($id,$v_estado)
        {
            $query = $this->db->query("update tipificacion set v_estado='$v_estado' where id='$id'");
           
        }
            function Actualizar_vista_clientes($idtipificacion,$v_estado)
        {
            $query = $this->db->query("update clientes set V_ESTADO='$v_estado' where TIPIFICACION='$idtipificacion'");
           
        }

}

?>
