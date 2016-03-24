
$("#Guardar_HT").click(function(){

   var rspta=confirm("¿Está seguro de guardar este registro");
   if(rspta){

  var clave=$("#clave").val().trim();
  var rclave=$("#rclave").val().trim();

console.log(clave);
console.log(rclave);
      if(clave===rclave){

 var parametros={
                            "usuario":$("#usuario").val().trim(),
                            "clave":$("#clave").val().trim(),
                            
                            "nombres":$("#nombres").val().trim(),
                            "apellidos":$("#apellidos").val().trim(),
                            "perfil":$("#perfil").val().trim()

                           };

   $.ajax({
            data: parametros,
            url: '../index.php/c_usuario/grabarRegistro',
            type: 'post',
            async: true,
            beforeSend: function() {

            },
            success: function() {
                /*
                $("#codigo_hr").val(data);
                detalles_cabecera(parametro1,parametro2,parametro3);
                $("#Guardar_HT").attr("disabled","disabled");
                */
              window.alert("Registro actualizado con exito!"); 
          
            window.location.reload();
            },
            error: function() {
            }

   }); 

}else{
 window.alert("Las claves no coinciden,intente nuevamente"); 
 /* window.location.reload();*/
}

   }


});
