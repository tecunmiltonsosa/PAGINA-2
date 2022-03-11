
<?php 
$conexion = mysqli_connect("localhost", "root", "", "enfermo");
 

$dpi = $_POST['dpi'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$sueldo = $_POST['sueldo']; 
echo $dpi;
echo $apellido;
echo $sueldo;
mysqli_query($conexion, "INSERT INTO `enfermo`.`zuniga` (`dpi`, `nombre`, `apellido`, `sueldo`) VALUES ('$dpi', '$nombre', '$apellido', '$sueldo')");
echo "Exito...";
mysqli_close($conexion); 
?>