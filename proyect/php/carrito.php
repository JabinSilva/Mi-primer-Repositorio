<?php 

$con=mysqli_connect('localhost','root','', 'inversionesingt');

if (!$con) {

echo "No se pudo conectar al servidor";
	}else{
$bd=mysqli_select_db($conn,'inversionesingt');
if (!$bd) {
	echo "no se encrontro la base datos";
return $conn;
}
}

$producto=$_POST['cod_producto'];

$tabla= "INSERT INTO `productos` VALUES ('cod_producto','nombre','precio')";


$ejecutar=$conn ->query($tabla);

if (!$ejecutar) {
	echo "<h1>no se agrego nada al carrito </h1>";
}else{
echo " <div class='cuadro-regresar'>
	
<h1> Se agrego al carrito. </h1>  <br> <a class='boton-regresar' href= '../inicio.html'> REGRESAR </a> </div>";
}
 ?>

