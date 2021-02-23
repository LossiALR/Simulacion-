<!DOCTYPE html>
<html>
<head>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Eduardo Lossada</title>
<link rel="stylesheet" href="resources/css/alertify/alertify.min.css"/>
<link rel="stylesheet" href="resources/css/alertify/default.min.css"/>
<link rel="stylesheet" href="resources/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="resources/css/fonts.css">
<link rel="stylesheet" href="estilo.css">
<link rel="stylesheet" type="text/css" href="resources/css/estilo.css">
<script src="resources/js/jquery-2.1.3.min.js"></script>
<script src="resources/js/bootstrap.min.js"></script>
<script src="resources/js/alertify.min.js"></script>
<script>
$(function() {
	//AJAX
	jQuery('#button').click(function (e) {
		var simulaciones = jQuery("#simulaciones").val();
		jQuery.ajax({
			type: "POST",
			url: "submit.php",
			data: "simulaciones=" + simulaciones,
			success: function (data) {
				$('#resultado').html(data);
			}
		});				
		return false;
	});
});
</script>
</head>
<body>

	<hr><p><b style="font-size:17px;">Algoritmo para la resolucion del problema:</b></p>
	<ol>
	<p> Inicializar X, Y y N (número de cuadras caminadas) en cero.
	Obtener un número aleatorio R (probabilidad de la dirección)
	Evaluar el valor de R:
	
	Si R es mayor o igual a 0 y menor que 25, incrementar Y en uno.
	Si R es mayor o igual a 25 y menor que 50, decrementar Y en uno.
	Si R es mayor o igual a 50 y menor que 75, incrementar X en uno.
	Si R es mayor o igual a 75 y menor que 100, decrementar X en uno.
	Incrementar el número de cuadras caminadas (N).
	Imprimir los valores X y Y.
	Repetir los pasos 2 a 5 hasta que N sea igual a 10.
	Sumar X y Y, para obtener la posición en donde se encuentra después de caminar 10 cuadras.
	Si el valor absoluto de la suma resulta igual a 2, entonces se toma como éxito. En caso contrario se toma como fracaso.</p>
	</ol>
	</div>
	</div>
	</div>




	<p><b style="font-size:17px;text-transform: uppercase;">Ingrese el número de simulaciones</b></p>
	<div class="row">
	<form action="#" method="post">
	<div class="col-md-12">
	<input type="text" id="simulaciones" name="simulaciones" placeholder="Número de simulaciones" autocomplete="off"><br><br>
	</div>
	</div>
	<div class="row">
	<div class="col-sm-7 ">
	<input id="button" class="btn btn-success" type="submit" value="Iniciar">
		</div>
	</form>
	</div>

	<div id="resultado"></div>

	</div>
	</div>
	</div>
	</div>
	</div>
	


</body>
</html>