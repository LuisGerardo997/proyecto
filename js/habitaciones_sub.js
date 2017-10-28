$(document).on("ready",inicio);

function inicio(){
  mostrardatos('');
  $('#buscar').keyup(function(){
    var buscar = $('#buscar').val();
    mostrardatos(buscar);
  })
  $('.modal').on('shown.bs.modal', function () {
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
  $('body').on('click', '#listatipo_h a', function(e){
    e.preventDefault();
    idselect = $(this).attr('href');
    habitacion = $(this).parent().parent().children('td:eq(0)').text();
    tipo_habitacion = $(this).parent().parent().children('td:eq(1)').text();
    piso = $(this).parent().parent().children('td:eq(2)').text();

    $('#idselect').val(idselect);
    $('#habitacion_e').val(habitacion);
    $("#tipo option:contains('"+tipo_habitacion+"')").attr("selected",true);
    $('#piso_e').val(piso);
  })

  $('#actualizar').on('click',function(e){
    e.preventDefault();
    actualizardatos();
  })

  $('body').on('click','#listatipo_h button',function(){
    var mensaje = confirm('¿Está seguro que desea eliminar este registro? O_O');
    if(mensaje == true){
      idselect = $(this).attr('value');
      eliminar(idselect);
    }else{
      alert('Eliminación denegada ( ͡° ͜ʖ ͡°)');
    }
  })

function mostrardatos(valor){
  $.ajax({
    url:"http://localhost/proyecto/habitaciones_sub/mostrar",
    type: "POST",
    data:{buscar:valor},
    success:function(respuesta){
      //alert(respuesta);
      var registros = eval(respuesta);
      html = '';
      html = '<table class="table table-hover text-center"><thead>';
      html+='<tr><th class="text-center">Habitacion</th><th class="text-center">Tipo de Habitacion</th><th class="text-center">Piso</th><th class="text-center">Acción</th></tr>';
      html+='</thead><tbody>';
      for (var i = 0; i < registros.length;i++){
        html+='<tr><td>'+registros[i]['cod_habitacion']+'</td><td>'+registros[i]['tipo_habitacion']+'</td><td>'+registros[i]['piso']+'</td><td><a class="btn btn-default" href="'+registros[i]['cod_habitacion']+'"><span class="glyphicon glyphicon-pencil"></span></a><button type="button" class="btn btn-default" value="'+registros[i]['cod_habitacion']+'"><span class="glyphicon glyphicon-trash"></span></button></td></tr>';

      };
      html+='</tbody></table>';
      $('#listatipo_h').html(html);
    }
  })
}

function actualizardatos(valor){
  $.ajax({
    url:"http://localhost/proyecto/habitaciones_sub/actualizar",
    type: "POST",
    data:$('#form_actualizar').serialize(),
    success:function(respuesta){
      alert(respuesta);
        mostrardatos('');
        document.getElementById('form_actualizar').reset();
    }
  })
}

function eliminar(idselect){
  $.ajax({
    url:"http://localhost/proyecto/habitaciones_sub/eliminar",
    type: "POST",
    data:{id:idselect},
    success:function(respuesta){
      alert(respuesta);
        mostrardatos('');
    }
  })
}
}
