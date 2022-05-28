<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$num_empleado=$_POST['num_empleado'];
$nombre=$_POST['nombre'];
$p_apellido=$_POST['p_apellido'];
$s_apellido=$_POST['s_apellido'];
$departamento=$_POST['departamento'];
$area=$_POST['area'];
$puesto=$_POST['puesto'];
$estatus=$_POST['estatus'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];


$sql="INSERT INTO datos_empleados VALUES('$id','$num_empleado','$nombre','$p_apellido',
'$s_apellido','$departamento','$area','$puesto','$estatus','$fecha_nacimiento')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>