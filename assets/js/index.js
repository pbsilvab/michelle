$(function(){

	$('#guardar').click(function(e){
		e.preventDefault();
		guardar();
	});

});

function guardar(){
//POST ENVIA LOS DATOS PARA QUE SEAN ALMACENADOS

//GET  HACE UNA CONSULTA A LA BASE DE DADOS

//PUT ACTUALIZA LOS DATOS DE LA BASE DE DATOS

//DELETE ELIMINA LOS DATOS

	$.ajax({
		url:'guardar.php',
		type:'POST',
		data:$('#formulario').serialize(),
		success:function(r){
			alert(r);
			limpiar();
		},
		error:function(err){
			console.log(err);
		}
	});
}
function limpiar(){
	$('#formulario')[0].reset();
}