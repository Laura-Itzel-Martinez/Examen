<?php 

	require_once "conexion.php";
	$obj= new conectar();
	$conexion=$obj->conexion();
	$id=$_GET['id'];
	$sql="SELECT nombre,apellido 
			from t_personas where id='$id'";
	$result=mysqli_query($conexion,$sql);
	$ver=mysqli_fetch_row($result);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form action="actualizar.php" method="post">
	<input type="text" hidden="" value="<?php echo $id ?>" name="id">
	<label>Nombre</label>
	<p></p>
	<input type="text" name="txtnombre" value="<?php echo $ver[0] ?>">
	<p></p>
	<label>Apellido</label>
	<p></p>
	<input type="text" name="txtapellido" value="<?php echo $ver[1] ?>">
	<p></p>
	<button>Agregar datos</button>
</form>
</body>
</html>