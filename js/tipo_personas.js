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
    url:"http://localhost:8080/proyecto/tipo_personas/mostrar",
    type: "POST",
    data:{buscar:valor},
    success:function(respuesta){
      //alert(respuesta);
      var registros = eval(respuesta);
      html = '';
      html = '<table class="table table-hover text-center"><thead>';
      html+='<tr><th class="text-center">Código</th><th class="text-center">Tipo de persona</th></tr>';
      html+='</thead><tbody>';
      for (var i = 0; i < registros.length;i++){
        html+='<tr><td>'+registros[i]['Cod_Tipo_Persona']+'</td><td>'+registros[i]['Tipo_Persona']+'</td></tr>';

      };
      html+='</tbody></table>';
      $('#listatipo').html(html);
    }
  })
}
