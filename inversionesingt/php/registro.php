<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>InversionesINGT</title>
	<link rel="stylesheet" type="text/css" href="stilo.php">
	<link rel="stylesheet" type="text/css" href="../css/registroc.css">
</head>
<body>

	 <div class="cuadro-text">
	 	<h1 class="texto">Gracias por Registrarse</h1>
	 	<a class="tpa" href="../index.html">Regresar</a>
	 </div>



<?php 

//$conn=mysqli_connect('localhost','root','', 'inversionesingt');

if (!$conn) {

echo "No se pudo conectar al servidor";
	}else{
//$datos=mysqli_select_db($conn,'inversionesingt');
if (!$datos) {
	echo "no se encrontro la base datos";
return $conn;
}}
//definimos las variables
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$correo= $_POST['correo'];
$telefono= $_POST['telefono'];
$usuario= $_POST['usuario'];
$clave= $_POST['clave'];

//hacemos la sentencia sql
//$tabla= "INSERT INTO `persona` VALUES ('$nombre','$apellido','$correo','$telefono','$usuario','$clave')";


$ejecutar=$conn ->query($tabla);

if (!$ejecutar) {
	echo "<h1>Hubo algun error en el servidor </h1>";
}else{
echo " <div class='cuadro-regresar'>
	
<h1> Registro exitoso. </h1>  <br> <a class='boton-regresar' href= '../index.html'> REGRESAR </a> </div>";
}

 ?>
 </body>
</html>
