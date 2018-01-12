function buscarcomentario(){

  var pais=$("#select_filtro_pais").val();
  var dato=$("#dato_buscado").val();
      if(dato == "")
    {

      var url="buscar_usuarios/"+pais+"";
    }
    else
    {
      var url="buscar_usuarios/"+pais+"/"+dato+"";
    }

  $("#contenido_principal").html($("#cargador_empresa").html());
 $.get(url,function(resul){
    $("#contenido_principal").html(resul);
  })

}

function buscarusuario(){
  alert("mensaje de alerta");
}
