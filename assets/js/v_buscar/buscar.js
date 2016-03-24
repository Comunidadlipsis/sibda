    $(document).ready(function(){
            $("#Buscar").click(function(){
            var parametro={"texto":$("#texto").val().trim()};
            $.ajax({
                url:"../index.php/c_buscar/buscar",
                type:"POST",
                data:parametro,
                success:function(data){
                    $("#datosReporte").html(data);
                }
            });
                                                       
            return false;
        }) ;

        
       
    });