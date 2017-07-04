<!DOCTYPE html>
<html>
<head>
	<title>Guardar</title>
	 <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<div class="text-center">
				<h3>Registro de Nuevo Usuario al Sistema</h3>
			</div>
			<form id="formulario">
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" id="nombre" class="form-control">
				</div>
				<div class="form-group">
					<label for="apellido">Apellido</label>
					<input type="text" name="apellido" id="apellido" class="form-control">
				</div>
				<div class="form-group">
					<label for="cedula">Cedula</label>
					<input type="text" name="cedula" id="cedula" class="form-control">
				</div>
				<div class="form-group">
					<label for="usuario">Nombre de Usuario</label>
					<input type="text" name="usuario" id="usuario" class="form-control">
				</div>
				<div class="form-group">
					<label for="pwd">Clave</label>
					<input type="password" name="pwd" id="pwd" class="form-control">
				</div>
			</form>
				<a href="#" id="guardar" class="btn btn-danger btn-block">Registrar</a>
		</div>
	</div>

	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/index.js"></script>
</body>
</html>