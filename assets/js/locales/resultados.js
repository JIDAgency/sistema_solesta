$(document).ready(function() {
    $("#buscador").change(function () {
        $("#buscador").load(this.value);
        buscar($(this).val());
    });
    $("#buscador").enterKey(function () {
        $("#buscador").load(this.value);
        buscar($(this).val());
    })
});

function buscar(que_buscar) {
    var resultados = [];
    $.ajax({
        url: 'buscar/'+que_buscar,
        type: "GET",
        dataType:'json',
        success: function(data) {
            $.each(data, function(index,item){
                //$("#acciones").append(
                resultados.push(
					'<div class="col-md-3 col-6">'
                        +'<a href="http://localhost:8888/sistema_solesta/locales/ver/'+item.url+'" itemprop="" data-size="480x360">'
                            +'<div class="card">'
                                +'<div class="card-content">'
                                    +'<img class="img-fluid rounded" src="http://localhost:8888/sistema_solesta/almacenamiento/locales/'+item.url+'/logotipo.jpg" itemprop="" alt="Imagen de '+item.nombre+'" />'
                                +'</div>'
                            +'</div>'
                        +'</a>'
                    +'</div>'
                );
            });
            $("#resultados").html(resultados);
        }
    });
}