$(document).on("ready",inicio);


function inicio(){
  mostrardatos('');
  $('#buscar').keyup(function(){
    var buscar = $('#buscar').val();
    mostrardatos(buscar);
  })
  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus();
  })
  $('#enviar').on('click',function(){
    $.ajax({
      url:$('#form').attr('action'),
      type:$('#form').attr('method'),
      data:$('#form').serialize(),
      success:function(mensaje){
        mostrardatos('');
        document.getElementById('form').reset();
        alert(mensaje);
      }
    })
  })
}
function mostrardatos(valor){
  $.ajax({
    url:"http://localhost:82/proyecto/tipo_habitaciones/mostrar",
    type: "POST",
    data:{buscar:valor},
    success:function(respuesta){
      //alert(respuesta);
      var registros = eval(respuesta);
      html = '';
      html = '<table class="table table-hover text-center"><thead>';
      html+='<tr><th class="text-center">Codigo del Producto</th><th class="text-center">Codigo de la Marca</th><th class="text-center">Codigo del tipo de Producto</th><th class="text-center">Producto</th><th class="text-center">Descripcion</th><th class="text-center">Precio del Producto</th><th class="text-center">Skock del Producto</th><th class="text-center">Stock Minimo</th><th class="text-center">Stock Maximo</th></tr>';
      html+='</thead><tbody>';
      for (var i = 0; i < registros.length;i++){
        html+='<tr><td>'+registros[i]['Cod_Producto']+'</td><td>'+registros[i]['Cod_Marca']+'</td><td>'+registros[i]['Cod_Tipo_Producto']+'</td><td>'+registros[i]['Producto']+'</td><td>'+registros[i]['Descripcion']+'</td><td>'+registros[i]['Precio_Producto']+'</td><td>'+registros[i]['Stock_Producto']+'</td><td>'+registros[i]['Stock_Minimo']+'</td><td>'+registros[i]['Stock_Maximo']+'</td></tr>';

      };
      html+='</tbody></table>';
      $('#listatipo_h').html(html);
    }
  })
}
