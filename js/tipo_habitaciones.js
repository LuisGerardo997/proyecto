$(document).on("ready",inicio);

function inicio(){
  mostrardatos('');
  $('#buscar').keyup(function(){
    var buscar = $('#buscar').val();
    mostrardatos(buscar);
  })
}
function mostrardatos(valor){
  $.ajax({
    url:"http://localhost:8080/proyecto/tipo_habitaciones/mostrar",
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
        html+='<tr><td>'+registros[i]['Cod_Persona']+'</td><td>'+registros[i]['Nombres']+'</td><td>'+registros[i]['Apellido_Paterno']+" "+registros[i]['Apellido_Materno']+'</td><td>'+registros[i]['Ciudad']+'</td><td>'+registros[i]['Estado_Civil']+'</td><td></tr>';

      };
      html+='</tbody></table>';
      $('#listatipo_h').html(html);
    }
  })
}
