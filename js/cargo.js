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
    url:"http://localhost:82/proyecto/cargo/mostrar",
    type: "POST",
    data:{buscar:valor},
    success:function(respuesta){
      //alert(respuesta);
      var registros = eval(respuesta);
      html = '';
      html = '<table class="table table-hover text-center"><thead>';
      html+='<tr><th class="text-center">Codigo Cargo</th><th class="text-center">Codigo Area</th><th class="text-center">Descripcion</th><th class="text-center">Cargo</th></tr>';
      html+='</thead><tbody>';
      for (var i = 0; i < registros.length;i++){
        html+='<tr><td>'+registros[i]['Cod_Cargo']+'</td><td>'+registros[i]['Cod_Area']+'</td><td>'+registros[i]['Descripcion']+'</td><td>'+registros[i]['Cargo']+'</td></tr>';

      };
      html+='</tbody></table>';
      $('#listatipo_h').html(html);
    }
  })
}
