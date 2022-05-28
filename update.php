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

$sql="UPDATE datos_empleados SET  num_empleado='$num_empleado',nombre='$nombre',p_apellido='$p_apellido',s_apellido='$s_apellido',
departamento='$departamento',area='$area',puesto='$puesto',estatus='$estatus',fecha_nacimiento='$fecha_nacimiento' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>