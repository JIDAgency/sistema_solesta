var actual_url = document.URL;
var method_call = "";

if(actual_url.indexOf("index") < 0){
    method_call = "inicio/";
}

$(document).ready(function(){

    //cargar_datos_busqueda();

    function cargar_datos_busqueda(busqueda, categoria)
    {
        var busqueda = $('#buscador').val();

        if (busqueda.length === 0)
        {
            $('#resultado').hide();
        } else {
            $.ajax({
                url: method_call+"fetch",
                method:"POST",
                data:{busqueda : busqueda, categoria : categoria},
                success:function(data){
                    $('#resultado').show();
                    $('#resultado').addClass('auto_list');
                    $('#resultado').html(data);
                }
            })
        }
    }

    document.getElementById("vista").addEventListener("click", ocultar_resultado);

    function ocultar_resultado() {
        $('#resultado').hide();
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
