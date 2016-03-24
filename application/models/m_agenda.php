<?php

class m_agenda extends CI_Model {

    function __construct() {
        //llamada al constructor del CI para la clase
        parent::__construct();
        //Carga el driver de base de datos del codeigniter màs para usar la librerìa que contiene el mysqli
        $this->load->database();

    }

      public function getAgendado()
  {
                
                //$idlogin='76216779';

                 $idlogin=$_SESSION['LOGIN_USER'];
                 $query = $this->db->query("SELECT 
                    clientes.HCID,
                    clientes.NUMDNI,
                    clientes.NACIMIENTO,
					clientes.EDAD,
                    CONCAT(clientes.NOMBRE1,' - ',clientes.NOMBRE2,' - ',clientes.APEPATERNO,' - ',clientes.APEMATERNO) as NOMBRES,
                    CONCAT (clientes.TLFMOVIL,' - ',clientes.TLFFIJO,' - ',clientes.TLFOFIC,' - ',clientes.TLFCONT) as TELEFONOS,
                    clientes.DIRECCION,
                    CONCAT(clientes.TARJETA01,' - ',clientes.TARJETA02) as TARJETAS,               
                    clientes.COMENTARIO      
                    FROM
                    clientes INNER JOIN usuariobase 
                    ON 
                    usuariobase.IDCLIENTES=clientes.IDCLIENTES and clientes.TIPIFICACION=usuariobase.TIPIFICACION
                    WHERE
                    usuariobase.IDUSUARIO=$idlogin  AND clientes.TIPIFICACION=10
                    group by  clientes.IDCLIENTES, clientes.APELLIDONOMBRE, clientes.DNI, clientes.DIRECCION, 
                    clientes.TELEFONO01, clientes.TELEFONO02, clientes.TELEFONO03, clientes.DIRECCION, 
                    clientes.DEPARTAMENTO, clientes.PROVINCIA, clientes.DISTRITO, clientes.TIPIFICACION
                    order by usuariobase.FECHA DESC");


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
                                        ESTADO=-1
                                        where 
                                        IDCLIENTES = '$idcliente';");

    
              
  }

     public function setUsarioBase($idcliente,$tipificacion){
                 $idlogin=$_SESSION['LOGIN_USER'];
                 $query = $this->db->query("insert into usuariobase set  IDUSUARIO='$idlogin', IDCLIENTES='$idcliente',TIPIFICACION='$tipificacion';");   

        }

}

?>
