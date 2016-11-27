$(document).ready(function() {
	$('#products').pinterest_grid({
		no_columns: 4,
		padding_x: 10,
		padding_y: 10,
		margin_bottom: 50,
		single_column_breakpoint: 700
	});

});

function CambiarCantidad(id)
{
	var cantidad = parseInt(document.getElementById('cantidad').value);
	window.location.href = "carrito/update/"+id+"/"+cantidad;
}
