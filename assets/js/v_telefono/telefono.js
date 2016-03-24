
$("#Guardar_HT").click(function(){

   var rspta=confirm("¿Está seguro de guardar este registro");
   if(rspta){
   var parametros={
                            "hcid":$("#hcid").val().trim(),
							"correo":$("#correo").val().trim(),
							"tlfmovil":$("#tlfmovil").val().trim(),
							"tlffijo":$("#tlffijo").val().trim(),
							"tlfofic":$("#tlfofic").val().trim(),
							"tlfanex":$("#tlfanex").val().trim(),
							"direccion":$("#direccion").val().trim(),
							"referencia":$("#referencia").val().trim(),
							"distrito":$("#distrito").val().trim(),
							"provincia":$("#provincia").val().trim(),
							"departamento":$("#departamento").val().trim(),
							"edad":$("#edad").val().trim(),
							"fecha":$("#fecha").val().trim(),
							"hora":$("#hora").val().trim(),
							"anexo":$("#anexo").val().trim(),
							"tlfcont":$("#tlfcont").val().trim(),
							"correocont":$("#correocont").val().trim(),
							"rescod":$("#rescod").val().trim(),
							"actualizado":$("#actualizado").val().trim(),
							"corllam":$("#corllam").val().trim()
                           };


     
   $.ajax({
            data: parametros,
            url: '../index.php/c_telefono/grabarRegistro',
            type: 'post',
            async: true,
            beforeSend: function() {

            },
            success: function() {

              window.location.reload();
            },
            error: function() {
            }

   });
   }


});

