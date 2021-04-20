<?php 
	require_once "conexion.php";
	require_once "metodosCrud.php";

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>crud</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<form action="insertar.php" method="post">
	<label>Nombre</label>
	<p></p>
	<input type="text" name="txtnombre">
	<p></p>
	<label>Apellido</label>
	<p></p>
	<input type="text" name="txtapellido">
	<p></p>
	<button>Agregar datos</button>
</form>

<br><br>

<table style="border-collapse: collapse;" border="1">
	<tr tr class="table-danger">
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Actualizar</td>
		<td>Eliminar</td>
	</tr>
<?php 
	$obj= new metodos();
	$sql="SELECT id,nombre,apellido from t_personas";
	$datos=$obj->mostrarDatos($sql);

	foreach ($datos as $key ) {
 ?>
	<tr>
		<td><?php echo $key['nombre']; ?></td>
		<td><?php echo $key['apellido']; ?></td>
		<td>
			<a href="editar.php?id=<?php echo $key['id'] ?>">
			Editar
			</a>
		</td>
		<td>
			<a href="eliminar.php?id=<?php echo $key['id'] ?>">
			eliminar
			</a>
		</td>
	</tr>
<?php 
	}
 ?>
</table>
</body>
</html>