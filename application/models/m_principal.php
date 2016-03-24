<?php

class m_principal extends CI_Model {

    function __construct() {
        //llamada al constructor del CI para la clase
        parent::__construct();
        //Carga el driver de base de datos del codeigniter màs para usar la librerìa que contiene el mysqli
        $this->load->database();

    }

    public function getCliente()
    {
		$query = $this->db->query("select  * from clientes ORDER BY RAND() LIMIT 1;");
	   /* $query = $this->db->query("select  * from clientes where RESCOD='0' ORDER BY RAND() LIMIT 1;"); */
	/* $query = $this->db->query("select  * from clientes where NUMDOC='*06130369' LIMIT 1;"); */
	return $query->result();

      }

      
      function cargaTipificacion()
        {
            $query = $this->db->query("select * from tipificacion where estado=1 ORDER BY id ASC");
            if($query->num_rows>0){
                foreach($query->result() as $row){
                    $arraysito[] = array(
                            htmlspecialchars($row->id,ENT_QUOTES),
							htmlspecialchars($row->descripcion,ENT_QUOTES)
                        );
                }
                return json_encode($arraysito);
            }
        }
		
		function cargaDepartamentos()
        {
            $query = $this->db->query("select * from departamentos ORDER BY iddep ASC");
            if($query->num_rows>0){
                foreach($query->result() as $row){
                    $arraysito[] = array(
                            htmlspecialchars($row->iddep,ENT_QUOTES),
							htmlspecialchars($row->descripcion,ENT_QUOTES)
                        );
                }
                return json_encode($arraysito);
            }
        }
		
		function cargaProvincias()
        {
            $query = $this->db->query("select * from provincias ORDER BY idprov ASC");
            if($query->num_rows>0){
                foreach($query->result() as $row){
                    $arraysito[] = array(
                            htmlspecialchars($row->idprov,ENT_QUOTES),
							htmlspecialchars($row->descripcion,ENT_QUOTES)
                        );
                }
                return json_encode($arraysito);
            }
        }
		
		function cargaDistritos()
        {
            $query = $this->db->query("select * from distritos ORDER BY iddis ASC");
            if($query->num_rows>0){
                foreach($query->result() as $row){
                    $arraysito[] = array(
                            htmlspecialchars($row->iddis,ENT_QUOTES),
							htmlspecialchars($row->descripcion,ENT_QUOTES)
                        );
                }
                return json_encode($arraysito);
            }
        }
		
		function cargaActualizado()
        {
            $query = $this->db->query("select * from actualizado ORDER BY idact ASC");
            if($query->num_rows>0){
                foreach($query->result() as $row){
                    $arraysito[] = array(
                            htmlspecialchars($row->idact,ENT_QUOTES),
							htmlspecialchars($row->descripcion,ENT_QUOTES)
                        );
                }
                return json_encode($arraysito);
            }
        }
		
		function cargaCorllam()
        {
            $query = $this->db->query("select * from cortellamada ORDER BY idcor ASC");
            if($query->num_rows>0){
                foreach($query->result() as $row){
                    $arraysito[] = array(
                            htmlspecialchars($row->idcor,ENT_QUOTES),
							htmlspecialchars($row->descripcion,ENT_QUOTES)
                        );
                }
                return json_encode($arraysito);
            }
        }
		
		function cargaC402()
        {
            $query = $this->db->query("SELECT COUNT(*) as c402 FROM clientes WHERE RESCOD='C402'");
            if($query->num_rows>0){
                foreach($query->result() as $row){
                    $arraysito[] = array(
                            htmlspecialchars($row->c402,ENT_QUOTES)
                        );
                }
                return json_encode($arraysito);
            }
        }
		


    public function updateCliente($hcid,$correo,$tlfmovil,$tlffijo,$tlfofic,$tlfanex,$direccion,$referencia,$distrito,$provincia,$departamento,$edad,$fecha,$hora,$anexo,$tlfcont,$correocont,$rescod,$actualizado,$corllam){
        
            $query = $this->db->query("update clientes set 
										CORREO='$correo',
										TLFMOVIL='$tlfmovil',
										TLFFIJO='$tlffijo',
										TLFOFIC='$tlfofic',
										TLFANEX='$tlfanex',
										DIRECCION='$direccion',
										REFERENCIA='$referencia',
										DISTRITO='$distrito',
										PROVINCIA='$provincia',
										DEPARTAMENTO='$departamento',
										EDAD='$edad',
										FECHA='$fecha',
										HORA='$hora',
										ANEXO='$anexo',
										TLFCONT='$tlfcont',
										CORREOCONT='$correocont',
										RESCOD='$rescod',
										ACTUALIZADO='$actualizado',
										CORLLAM='$corllam'
                                        where 
                                        HCID = '$hcid';");

    
              
     }

     public function setUsarioBase($hcid,$rescod){
                $idlogin=$_SESSION['LOGIN_USER'];
                $query = $this->db->query("insert into usuariobase set  IDUSUARIO='$idlogin', HCID='$hcid',RESCOD='$rescod';");        

        }


}

?>
