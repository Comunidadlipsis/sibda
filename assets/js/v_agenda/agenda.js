
$("#Guardar_HT").click(function(){
   var rspta=confirm("¿Está seguro de guardar este registro");
   if(rspta){
   var parametros={
                            "idcliente":$("#idcliente").val().trim(),
                            
                            
                            
                            "tipificacion":$("#tipificacion").val().trim(),
                             "comentario":$("#comentario").val().trim()};


     
   $.ajax({
            data: parametros,
            url: '../index.php/c_agenda/grabarRegistro',
            type: 'post',
            async: true,
            beforeSend: function() {
            },
            success: function(data) {
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
   }


});