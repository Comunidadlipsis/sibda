<?php
class Inicio_model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->default= $this->load->database('default', TRUE);
        }


            function cargar_cumpleanios_handcall2() {
        $query ="
                      
    select TME.tm_emp_nombre as nombre,TME.tm_emp_apellido apellido,TMC.tm_carg_descripcion cargo from TM_EMPLEADOS TME
,TM_CARGOS TMC
where month(tm_emp_fecnac) =month(now()) 
and day(tm_emp_fecnac) =day(now()) and tm_clie_id='3'
AND TME.tm_carg_id=TMC.tm_carg_id;

            ";
   $resul = $this->default->query($query);
        return $resul->result();
    }

           function cargar_cumpleanios_handsearch2() {
        $query ="
                      
  select TME.tm_emp_nombre as nombre,TME.tm_emp_apellido apellido,TMC.tm_carg_descripcion cargo from TM_EMPLEADOS TME
,TM_CARGOS TMC
where month(tm_emp_fecnac) =month(now()) 
and day(tm_emp_fecnac) =day(now()) and tm_clie_id='2'
AND TME.tm_carg_id=TMC.tm_carg_id;

            ";
   $resul = $this->default->query($query);
        return $resul->result();
    }  

            function cargar_cumpleanios_handcall() {
        $query = $this->default->query("
                      
      select tm_emp_id as id,tm_emp_nombre as descripcion from TM_EMPLEADOS 
where month(tm_emp_fecnac) =month(now()) 
and day(tm_emp_fecnac) =day(now()) and tm_clie_id='3';

            ");
        if ($query->num_rows > 0) {
            $arraysito = array();
            foreach ($query->result() as $row) {
                $arraysito[] = array(
                    htmlspecialchars($row->id, ENT_QUOTES),
                    htmlspecialchars($row->descripcion, ENT_QUOTES)
                );
            }
            $query->free_result();
            return json_encode($arraysito);
        } else {
            return json_encode(array(1 => array("-- No se encontraron registros--")));
        }
    }
           function cargar_cumpleanios_handsearch() {
        $query = $this->default->query("
                      
        select * from TM_EMPLEADOS 
where month(tm_emp_fecnac) =month(now()) 
and day(tm_emp_fecnac) =day(now()) and tm_clie_id='2'

            ");
        if ($query->num_rows > 0) {
            $arraysito = array();
            foreach ($query->result() as $row) {
                $arraysito[] = array(
                    htmlspecialchars($row->id, ENT_QUOTES),
                    htmlspecialchars($row->descripcion, ENT_QUOTES)
                );
            }
            $query->free_result();
            return json_encode($arraysito);
        } else {
            return json_encode(array(1 => array("-- No se encontraron registros--")));
        }
    }

        
}
?>
