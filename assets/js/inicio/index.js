var actual_url = document.URL;
var method_call = "";

if(actual_url.indexOf("index") < 0){
    method_call = "inicio/";
}

$(document).ready(function(){

    cargar_datos_busqueda();

    function cargar_datos_busqueda(busqueda, categoria)
    {
        $.ajax({
            url: method_call+"fetch",
            method:"POST",
            data:{busqueda : busqueda, categoria : categoria},
            success:function(data){
                $('#resultado').html(data);
            }
        })
    }

    $('#buscador').keyup(function(){
        var busqueda = $('#buscador').val();
        var categoria = $('#categorias_select option:selected').val()
        if(busqueda == '' && categoria == '') {
            cargar_datos_busqueda();
        } else {
            cargar_datos_busqueda(busqueda, categoria);
        }
    });

    $('#categorias_select').change(function(){
        var busqueda = $('#buscador').val();
        var categoria = $('#categorias_select option:selected').val()
        if(busqueda == '' && categoria == '') {
            cargar_datos_busqueda();
        } else {
            cargar_datos_busqueda(busqueda, categoria);
        }
    });
});
