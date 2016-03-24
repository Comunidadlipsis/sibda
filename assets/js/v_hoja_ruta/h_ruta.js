var acomulador=0;
var 
    //ID_PREGUNTA BASE DE DATOS POR ACTIVIDAD 1
    v1_1=0,v1_13=0,v1_14=0,v1_15=0,v1_16=0,
    v1_17=0,v1_18=0,v1_19=0,v1_20=0,v1_21=0,
    v1_22=0,v1_23=0,v1_24=0,v1_25=0,v1_26=0
    v1_27=0,v1_28=0,v1_29=0,v1_30=0,v1_31=0,
    v1_32=0,v1_33=0,v1_34=0,v1_35=0,v1_36=0
    //ID_PREGUNTA BASE DE DATOS POR ACTIVIDAD 2
    ,v2_1=0,v2_2=0,v2_3=0,v2_4=0,v2_5=0,
    //ID_PREGUNTA BASE DE DATOS POR ACTIVIDAD 3
    v3_1=0,v3_2=0,v3_3=0,v3_4=0,v3_5=0,v3_6=0;
    
    
function suma_horas(){
    //1
    if($("#1-1").val().trim()!=''){
      v1_1=parseFloat($("#1-1").val().trim()).toFixed(0);
    }
    if($("#1-1").val().trim()==''){
        v1_1=parseFloat(0).toFixed(0);
    }
    //13
    if($("#1-13").val().trim()!=''){
      v1_13=parseFloat($("#1-13").val().trim()).toFixed(0);
    }
    if($("#1-13").val().trim()==''){
        v1_13=parseFloat(0).toFixed(0);
    }
    //14
    if($("#1-14").val().trim()!=''){
      v1_14=parseFloat($("#1-14").val().trim()).toFixed(0);
    }
    if($("#1-14").val().trim()==''){
        v1_14=parseFloat(0).toFixed(0);
    }
    //15
    if($("#1-15").val().trim()!=''){
      v1_15=parseFloat($("#1-15").val().trim()).toFixed(0);
    }
    if($("#1-15").val().trim()==''){
        v1_15=parseFloat(0).toFixed(0);
    }
    //16
    if($("#1-16").val().trim()!=''){
      v1_16=parseFloat($("#1-16").val().trim()).toFixed(0);
    }
    if($("#1-16").val().trim()==''){
        v1_16=parseFloat(0).toFixed(0);
    }
    //17
    if($("#1-17").val().trim()!=''){
      v1_17=parseFloat($("#1-17").val().trim()).toFixed(0);
    }
    if($("#1-17").val().trim()==''){
        v1_17=parseFloat(0).toFixed(0);
    }
    //18
    if($("#1-18").val().trim()!=''){
      v1_18=parseFloat($("#1-18").val().trim()).toFixed(0);
    }
    if($("#1-18").val().trim()==''){
        v1_18=parseFloat(0).toFixed(0);
    }
    //19
    if($("#1-19").val().trim()!=''){
      v1_19=parseFloat($("#1-19").val().trim()).toFixed(0);
    }
    if($("#1-19").val().trim()==''){
        v1_19=parseFloat(0).toFixed(0);
    }
    //20
    if($("#1-20").val().trim()!=''){
      v1_20=parseFloat($("#1-20").val().trim()).toFixed(0);
    }
    if($("#1-20").val().trim()==''){
        v1_20=parseFloat(0).toFixed(0);
    }
    //21
    if($("#1-21").val().trim()!=''){
      v1_21=parseFloat($("#1-21").val().trim()).toFixed(0);
    }
    if($("#1-21").val().trim()==''){
        v1_21=parseFloat(0).toFixed(0);
    }
    //22
    if($("#1-22").val().trim()!=''){
      v1_22=parseFloat($("#1-22").val().trim()).toFixed(0);
    }
    if($("#1-22").val().trim()==''){
        v1_22=parseFloat(0).toFixed(0);
    }
    //23
    if($("#1-23").val().trim()!=''){
      v1_23=parseFloat($("#1-23").val().trim()).toFixed(0);
    }
    if($("#1-23").val().trim()==''){
        v1_23=parseFloat(0).toFixed(0);
    }
    //24
    if($("#1-24").val().trim()!=''){
      v1_24=parseFloat($("#1-24").val().trim()).toFixed(0);
    }
    if($("#1-24").val().trim()==''){
        v1_24=parseFloat(0).toFixed(0);
    }
    //25
    if($("#1-25").val().trim()!=''){
      v1_25=parseFloat($("#1-25").val().trim()).toFixed(0);
    }
    if($("#1-25").val().trim()==''){
        v1_25=parseFloat(0).toFixed(0);
    }
    //26
    if($("#1-26").val().trim()!=''){
      v1_26=parseFloat($("#1-26").val().trim()).toFixed(0);
    }
    if($("#1-26").val().trim()==''){
        v1_26=parseFloat(0).toFixed(0);
    }
    //27
    if($("#1-27").val().trim()!=''){
      v1_27=parseFloat($("#1-27").val().trim()).toFixed(0);
    }
    if($("#1-27").val().trim()==''){
        v1_27=parseFloat(0).toFixed(0);
    }
    //28
    if($("#1-28").val().trim()!=''){
      v1_28=parseFloat($("#1-28").val().trim()).toFixed(0);
    }
    if($("#1-28").val().trim()==''){
        v1_28=parseFloat(0).toFixed(0);
    }
    //29
    if($("#1-29").val().trim()!=''){
      v1_29=parseFloat($("#1-29").val().trim()).toFixed(0);
    }
    if($("#1-29").val().trim()==''){
        v1_29=parseFloat(0).toFixed(0);
    }
    //30
    if($("#1-30").val().trim()!=''){
      v1_30=parseFloat($("#1-30").val().trim()).toFixed(0);
    }
    if($("#1-30").val().trim()==''){
        v1_30=parseFloat(0).toFixed(0);
    }
    //31
    if($("#1-31").val().trim()!=''){
      v1_31=parseFloat($("#1-31").val().trim()).toFixed(0);
    }
    if($("#1-31").val().trim()==''){
        v1_31=parseFloat(0).toFixed(0);
    }
    //32
    if($("#1-32").val().trim()!=''){
      v1_32=parseFloat($("#1-32").val().trim()).toFixed(0);
    }
    if($("#1-32").val().trim()==''){
        v1_32=parseFloat(0).toFixed(0);
    }
    //33
    if($("#1-33").val().trim()!=''){
      v1_33=parseFloat($("#1-33").val().trim()).toFixed(0);
    }
    if($("#1-33").val().trim()==''){
        v1_33=parseFloat(0).toFixed(0);
    }
    //34
    if($("#1-34").val().trim()!=''){
      v1_34=parseFloat($("#1-34").val().trim()).toFixed(0);
    }
    if($("#1-34").val().trim()==''){
        v1_34=parseFloat(0).toFixed(0);
    }
    //35
    if($("#1-35").val().trim()!=''){
      v1_35=parseFloat($("#1-35").val().trim()).toFixed(0);
    }
    if($("#1-35").val().trim()==''){
        v1_35=parseFloat(0).toFixed(0);
    }
    //36
    if($("#1-36").val().trim()!=''){
      v1_36=parseFloat($("#1-36").val().trim()).toFixed(0);
    }
    if($("#1-36").val().trim()==''){
        v1_36=parseFloat(0).toFixed(0);
    }
    
    
    
    
    
    
    
    
    
    if($("#2-1").val().trim()!=''){
        v2_1=parseFloat($("#2-1").val().trim()).toFixed(0);
    }
    if($("#2-1").val().trim()==''){
        v2_1=parseFloat(0).toFixed(0);
    }
    if($("#2-2").val().trim()!=''){
        v2_2=parseFloat($("#2-2").val().trim()).toFixed(0);
    }
    if($("#2-2").val().trim()==''){
        v2_2=parseFloat(0).toFixed(0);
    }
    if($("#2-3").val().trim()!=''){
        v2_3=parseFloat($("#2-3").val().trim()).toFixed(0);
    }
    if($("#2-3").val().trim()==''){
        v2_3=parseFloat(0).toFixed(0);
    }
    if($("#2-4").val().trim()!=''){
        v2_4=parseFloat($("#2-4").val().trim()).toFixed(0);
    }
    if($("#2-4").val().trim()==''){
        v2_4=parseFloat(0).toFixed(0);
    }
    if($("#2-5").val().trim()!=''){
        v2_5=parseFloat($("#2-5").val().trim()).toFixed(0);
    }
    if($("#2-5").val().trim()==''){
        v2_5=parseFloat(0).toFixed(0);
    }
    if($("#3-1").val().trim()!=''){
        v3_1=parseFloat($("#3-1").val().trim()).toFixed(0);
    }
    if($("#3-1").val().trim()==''){
        v3_1=parseFloat(0).toFixed(0);
    }
    if($("#3-2").val().trim()!=''){
        v3_2=parseFloat($("#3-2").val().trim()).toFixed(0);
    }
    if($("#3-2").val().trim()==''){
        v3_2=parseFloat(0).toFixed(0);
    }
    if($("#3-3").val().trim()!=''){
        v3_3=parseFloat($("#3-3").val().trim()).toFixed(0);
    }
    if($("#3-3").val().trim()==''){
        v3_3=parseFloat(0).toFixed(0);
    }
     if($("#3-4").val().trim()!=''){
        v3_4=parseFloat($("#3-4").val().trim()).toFixed(0);
    }
    if($("#3-4").val().trim()==''){
        v3_4=parseFloat(0).toFixed(0);
    }
    if($("#3-5").val().trim()!=''){
        v3_5=parseFloat($("#3-5").val().trim()).toFixed(0);
    }
    if($("#3-5").val().trim()==''){
        v3_5=parseFloat(0).toFixed(0);
    }
    acomulador=parseFloat(v1_1)+parseFloat(v1_13)+parseFloat(v1_14)+parseFloat(v1_15)+parseFloat(v1_16)+parseFloat(v1_17)+
    parseFloat(v1_18)+parseFloat(v1_19)+parseFloat(v1_20)+parseFloat(v1_21)+parseFloat(v1_22)+parseFloat(v1_23)+parseFloat(v1_24)+
    parseFloat(v1_25)+parseFloat(v1_26)+parseFloat(v1_27)+parseFloat(v1_28)+parseFloat(v1_29)+parseFloat(v1_30)+parseFloat(v1_31)+
    parseFloat(v1_32)+parseFloat(v1_33)+parseFloat(v1_34)+parseFloat(v1_35)+parseFloat(v1_36)+
    //
    parseFloat(v2_1)+parseFloat(v2_2)+parseFloat(v2_3)+parseFloat(v2_4)+parseFloat(v2_5)+
    //
    parseFloat(v3_1)+parseFloat(v3_2)+parseFloat(v3_3)+parseFloat(v3_4)+parseFloat(v3_5);
  $("#total").val(acomulador);    
}
$("input").focus(function (){
  suma_horas();
  redondeo();
});

$("input").keyup(function (){
  suma_horas();
});

function redondeo(){
    /*
     * ACTIVIDAD 1 Y SUS SUBTAREAS Y ID Y VARIABLES SEGUN ID DE BASE DE DATOS
     */
    //1
    if($("#1-1").val().trim()!=''){
        v1_1=parseFloat($("#1-1").val().trim()).toFixed(0);
        $("#1-1").val(v1_1);
      }        
    //13
    if($("#1-13").val().trim()!=''){
        v1_13=parseFloat($("#1-13").val().trim()).toFixed(0);
        $("#1-13").val(v1_13);
      }  
    //
    if($("#1-14").val().trim()!=''){
        v1_14=parseFloat($("#1-14").val().trim()).toFixed(0);
        $("#1-14").val(v1_14);
      }    
    //
    if($("#1-15").val().trim()!=''){
        v1_15=parseFloat($("#1-15").val().trim()).toFixed(0);
        $("#1-15").val(v1_15);
      }    
    //
    if($("#1-16").val().trim()!=''){
        v1_16=parseFloat($("#1-16").val().trim()).toFixed(0);
        $("#1-16").val(v1_16);
      }    
    //
    if($("#1-17").val().trim()!=''){
        v1_17=parseFloat($("#1-17").val().trim()).toFixed(0);
        $("#1-17").val(v1_17);
      }    
    //
    if($("#1-18").val().trim()!=''){
        v1_18=parseFloat($("#1-18").val().trim()).toFixed(0);
        $("#1-18").val(v1_18);
      }    
    //
    if($("#1-19").val().trim()!=''){
        v1_19=parseFloat($("#1-19").val().trim()).toFixed(0);
        $("#1-19").val(v1_19);
      }    
    //
    if($("#1-20").val().trim()!=''){
        v1_20=parseFloat($("#1-20").val().trim()).toFixed(0);
        $("#1-20").val(v1_20);
      }    
    //
    if($("#1-21").val().trim()!=''){
        v1_21=parseFloat($("#1-21").val().trim()).toFixed(0);
        $("#1-21").val(v1_21);
      }    
    //
    if($("#1-22").val().trim()!=''){
        v1_22=parseFloat($("#1-22").val().trim()).toFixed(0);
        $("#1-22").val(v1_22);
      }    
    //
    if($("#1-23").val().trim()!=''){
        v1_23=parseFloat($("#1-23").val().trim()).toFixed(0);
        $("#1-23").val(v1_23);
      }    
    //
    if($("#1-24").val().trim()!=''){
        v1_24=parseFloat($("#1-24").val().trim()).toFixed(0);
        $("#1-24").val(v1_24);
      }    
    //
    if($("#1-25").val().trim()!=''){
        v1_25=parseFloat($("#1-25").val().trim()).toFixed(0);
        $("#1-25").val(v1_25);
      }    
    //
    if($("#1-26").val().trim()!=''){
        v1_26=parseFloat($("#1-26").val().trim()).toFixed(0);
        $("#1-26").val(v1_26);
      }    
    //
    if($("#1-27").val().trim()!=''){
        v1_27=parseFloat($("#1-27").val().trim()).toFixed(0);
        $("#1-27").val(v1_27);
      }    
    //
    if($("#1-28").val().trim()!=''){
        v1_28=parseFloat($("#1-28").val().trim()).toFixed(0);
        $("#1-28").val(v1_28);
      }    
    //
    if($("#1-29").val().trim()!=''){
        v1_29=parseFloat($("#1-29").val().trim()).toFixed(0);
        $("#1-29").val(v1_29);
      }    
    //
    if($("#1-30").val().trim()!=''){
        v1_30=parseFloat($("#1-30").val().trim()).toFixed(0);
        $("#1-30").val(v1_30);
      }    
    //
    if($("#1-31").val().trim()!=''){
        v1_31=parseFloat($("#1-31").val().trim()).toFixed(0);
        $("#1-31").val(v1_31);
      }    
    //
    if($("#1-32").val().trim()!=''){
        v1_32=parseFloat($("#1-32").val().trim()).toFixed(0);
        $("#1-32").val(v1_32);
      }    
    //
    if($("#1-33").val().trim()!=''){
        v1_33=parseFloat($("#1-33").val().trim()).toFixed(0);
        $("#1-33").val(v1_33);
      }    
    //
    if($("#1-34").val().trim()!=''){
        v1_34=parseFloat($("#1-34").val().trim()).toFixed(0);
        $("#1-34").val(v1_34);
      }    
    //
    if($("#1-35").val().trim()!=''){
        v1_35=parseFloat($("#1-35").val().trim()).toFixed(0);
        $("#1-35").val(v1_35);
      }    
    //
    if($("#1-36").val().trim()!=''){
        v1_36=parseFloat($("#1-36").val().trim()).toFixed(0);
        $("#1-36").val(v1_36);
      }    
    //
    /*
     * ACTIVIDAD 2 Y SUS SUBTAREAS
     */
    if($("#2-1").val().trim()!=''){
        v2_1=parseFloat($("#2-1").val().trim()).toFixed(0);
        $("#2-1").val(v2_1);
    }
    if($("#2-2").val().trim()!=''){
        v2_2=parseFloat($("#2-2").val().trim()).toFixed(0);
        $("#2-2").val(v2_2);
    }
    if($("#2-3").val().trim()!=''){
        v2_3=parseFloat($("#2-3").val().trim()).toFixed(0);
        $("#2-3").val(v2_3);
    }
    if($("#2-4").val().trim()!=''){
        v2_4=parseFloat($("#2-4").val().trim()).toFixed(0);
        $("#2-4").val(v2_4);
    }
   
    if($("#2-5").val().trim()!=''){
        v2_5=parseFloat($("#2-5").val().trim()).toFixed(0);
        $("#2-5").val(v2_5);
    }
    /*
     * ACTIVIDAD 3 Y SUS SUBTAREAS
     */
    if($("#3-1").val().trim()!=''){
        v3_1=parseFloat($("#3-1").val().trim()).toFixed(0);
        $("#3-1").val(v3_1);
    }
    
    if($("#3-2").val().trim()!=''){
        v3_2=parseFloat($("#3-2").val().trim()).toFixed(0);
        $("#3-2").val(v3_2);
    }
  
    if($("#3-3").val().trim()!=''){
        v3_3=parseFloat($("#3-3").val().trim()).toFixed(0);
        $("#3-3").val(v3_3);
    }
  
     if($("#3-4").val().trim()!=''){
        v3_4=parseFloat($("#3-4").val().trim()).toFixed(0);
        $("#3-4").val(v3_4);
    }
   
    if($("#3-5").val().trim()!=''){
        v3_5=parseFloat($("#3-5").val().trim()).toFixed(0);
        $("#3-5").val(v3_5);
    }   
 }
 
$(document).ready(function() {
    $("form").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });
    $("#1-1").focus();
});

$("#Guardar_HT").click(function(){
   var rspta=confirm("¿Está seguro de guardar esta hoja de tiempo,ya que no habrá oportunidad de modificarla?");
   if(rspta){
   var parametro_cabecera={"dni":$("#id_usuario").val().trim(),"fecha":$("#fecha_servidor").val().trim(),"comentario":$("#comentario").val().trim(),
       "total_hr":$("#total").val().trim()};
   var parametro1={ "id_a":1,"id_p1":1,"p1":$("#1-1").val().trim(),
                    "id_p13":13,"p13":$("#1-13").val().trim(),
                    "id_p14":14,"p14":$("#1-14").val().trim(),
                    "id_p15":15,"p15":$("#1-15").val().trim(),
                    "id_p16":16,"p16":$("#1-16").val().trim(),
                    "id_p17":17,"p17":$("#1-17").val().trim(),
                    "id_p18":18,"p18":$("#1-18").val().trim(),
                    "id_p19":19,"p19":$("#1-19").val().trim(),
                    "id_p20":20,"p20":$("#1-20").val().trim(),
                    "id_p21":21,"p21":$("#1-21").val().trim(),
                    "id_p22":22,"p22":$("#1-22").val().trim(),
                    "id_p23":23,"p23":$("#1-23").val().trim(),
                    "id_p24":24,"p24":$("#1-24").val().trim(),
                    "id_p25":25,"p25":$("#1-25").val().trim(),
                    "id_p26":26,"p26":$("#1-26").val().trim(),
                    "id_p27":27,"p27":$("#1-27").val().trim(),
                    "id_p28":28,"p28":$("#1-28").val().trim(),
                    "id_p29":29,"p29":$("#1-29").val().trim(),
                    "id_p30":30,"p30":$("#1-30").val().trim(),
                    "id_p31":31,"p31":$("#1-31").val().trim(),
                    "id_p32":32,"p32":$("#1-32").val().trim(),
                    "id_p33":33,"p33":$("#1-33").val().trim(),           
                    "id_p34":34,"p34":$("#1-34").val().trim(),
                    "id_p35":35,"p35":$("#1-35").val().trim(),
                    "id_p36":36,"p36":$("#1-36").val().trim()
  };
   var parametro2={ "id_a":2,"id_p1":2,"p1":$("#2-1").val().trim(),
                    "id_p2":3,"p2":$("#2-2").val().trim(),
                    "id_p3":4,"p3":$("#2-3").val().trim(),
                    "id_p4":5,"p4":$("#2-4").val().trim(),
                    "id_p5":6,"p5":$("#2-5").val().trim()};
   var parametro3={ "id_a":3,"id_p1":7,"p1":$("#3-1").val().trim(),
                    "id_p2":8,"p2":$("#3-2").val().trim(),
                    "id_p3":9,"p3":$("#3-3").val().trim(),
                    "id_p4":10,"p4":$("#3-4").val().trim(),
                    "id_p5":11,"p5":$("#3-5").val().trim()};
   $.ajax({
            data: parametro_cabecera,
            url: '../index.php/c_principal/guardar_cabecera',
            type: 'post',
            async: true,
            beforeSend: function() {
            },
            success: function(data) {
                $("#codigo_hr").val(data);
                detalles_cabecera(parametro1,parametro2,parametro3);
                $("#Guardar_HT").attr("disabled","disabled");
            },
            error: function() {
            }
   });
   }
});

function detalles_cabecera(parametro1,parametro2,parametro3){
       $.ajax({
            data: parametro1,
            url: '../index.php/c_principal/guardar_actividad1',
            type: 'post',
            async: true,
            beforeSend: function() {
            },
            success: function() {
            },
            error: function() {
            }
        });
        $.ajax({
            data: parametro2,
            url: '../index.php/c_principal/guardar_actividad2',
            type: 'post',
            async: true,
            beforeSend: function() {
            },
            success: function() {
            },
            error: function() {
            }
        });
        $.ajax({
            data: parametro3,
            url: '../index.php/c_principal/guardar_actividad3',
            type: 'post',
            async: true,
            beforeSend: function() {
            },
            success: function() {
                alert("Se grabó correctamente la Hoja de Tiempo...");
            },
            error: function() {
            }
        });
}



