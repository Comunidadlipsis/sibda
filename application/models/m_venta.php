<?php

class m_venta extends CI_Model {

    function __construct() {
        //llamada al constructor del CI para la clase
        parent::__construct();
        //Carga el driver de base de datos del codeigniter màs para usar la librerìa que contiene el mysqli
        $this->load->database();

    }

      public function getAfiliado()
  {
                
                //$idlogin='76216779';

                 $idlogin=$_SESSION['LOGIN_USER'];
                 $query = $this->db->query("SELECT 
                    clientes.APELLIDONOMBRE,
                    clientes.DNI,
                    CONCAT(clientes.TELEFONO01,' - ',clientes.TELEFONO02,' - ',clientes.TELEFONO03) AS TELEFONOS,
                    CONCAT (clientes.DEPARTAMENTO,' - ',clientes.PROVINCIA,' - ',clientes.DISTRITO) AS UBICACION,
                    clientes.DIRECCION,
                    clientes.COMENTARIO
                    FROM
                    clientes INNER JOIN usuariobase 
                    ON 
                    usuariobase.IDCLIENTES=clientes.IDCLIENTES
                    WHERE
                    usuariobase.IDUSUARIO='$idlogin'  AND usuariobase.TIPIFICACION=5 order by usuariobase.FECHA DESC");


return $query->result();
                
  
  }

        function cargaTipificacion()
        {
            $query = $this->db->query("select id,descripcion from tipificacion where estado=1 ORDER BY descripcion ASC");
            return $query->result();
        }


    public function updateCliente($idcliente,$tipificacion,$comentario){
        
            $query = $this->db->query("update clientes set
                                        
                                        TIPIFICACION='$tipificacion',
                                        COMENTARIO='$comentario',
                                        ESTADO=0
                                        where 
                                        IDCLIENTES = '$idcliente';");

    
              
  }

     public function setUsarioBase($idcliente,$tipificacion){
                 $idlogin=$_SESSION['LOGIN_USER'];
                 $query = $this->db->query("insert into usuariobase set  IDUSUARIO='$idlogin', IDCLIENTES='$idcliente',TIPIFICACION='$tipificacion';");   

        }

}

?>
