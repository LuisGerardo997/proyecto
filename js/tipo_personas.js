$(document).on("ready",inicio);

function inicio(){
  mostrardatos("");
}
function mostrardatos(valor){
    $.ajax({
      url:"http://localhost:8080/proyecto/tipo_personas/",
      type: "POST",
      data:{buscar:valor},
      success:function(respuesta){
        alert(respuesta);
      }
      }
    });
}
