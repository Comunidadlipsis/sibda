/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function limpiarformulario(formulario) {
    /* Se encarga de leer todas las etiquetas input del formulario*/
    $(formulario).find('input').each(function() {
        switch (this.type) {
            case 'password':
            case 'text':
                $(this).val($(this).attr("default-value"));
                break;
            case 'hidden':
                $(this).val('');
                break;
            case 'checkbox':
            case 'radio':
                this.checked = false;
        }
    });

    /* Se encarga de leer todas las etiquetas select del formulario */
    $(formulario).find('select').each(function() {
        $("#" + this.id + " option[value=0]").attr("selected", true);
    });
    /* Se encarga de leer todas las etiquetas textarea del formulario */
    $(formulario).find('textarea').each(function() {
        $(this).val('');
    });
}