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
    url:"http://localhost/proyecto/clientes/mostrar",
    type: "POST",
    data:{buscar:valor},
    success:function(respuesta){
      //alert(respuesta);
      var registros = eval(respuesta);
      html = '';
      html = '<table class="table table-hover text-center"><thead>';
      html+='<tr><th class="text-center">DNI</th><th class="text-center">Nombres</th><th class="text-center">Apellidos</th><th class="text-center">Ciudad</th><th class="text-center">Estado Civil</th></tr>';
      html+='</thead><tbody>';
      for (var i = 0; i < registros.length;i++){
        html+='<tr><td>'+registros[i]['cod_persona']+'</td><td>'+registros[i]['nombres']+'</td><td>'+registros[i]['apellido_paterno']+" "+registros[i]['apellido_materno']+'</td><td>'+registros[i]['ciudad']+'</td><td>'+registros[i]['estado_civil']+'</td><td></tr>';

      };
      html+='</tbody></table>';
      $('#listacliente').html(html);
    }
  })
}
