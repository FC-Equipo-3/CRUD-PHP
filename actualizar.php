<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM datos_empleados WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                <div class="row">
                                <div class="col-md-4">

                                Num_Empleado <input type="text" class="form-control mb-3" name="num_empleado" placeholder="Num_Empleado" value="<?php echo $row['num_empleado']  ?>">
                                Nombre <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                                Primer Apellido <input type="text" class="form-control mb-3" name="p_apellido" placeholder="P_Apellido" value="<?php echo $row['p_apellido']  ?>">
                                Segundo Apellido <input type="text" class="form-control mb-3" name="s_apellido" placeholder="S_Apellido" value="<?php echo $row['s_apellido']  ?>">
                                Departamento <input type="text" class="form-control mb-3" name="departamento" placeholder="Departamento" value="<?php echo $row['departamento']  ?>">
                                </div>

                                <div class="col-md-4">
                                Area <input type="text" class="form-control mb-3" name="area" placeholder="Area" value="<?php echo $row['area']  ?>">
                                Puesto <input type="text" class="form-control mb-3" name="puesto" placeholder="Puesto" value="<?php echo $row['puesto']  ?>">
                                Estatus <input type="text" class="form-control mb-3" name="estatus" placeholder="Estatus" value="<?php echo $row['estatus']  ?>">
                                Fecha de Nacimiento <input type="text" class="form-control mb-3" name="fecha_nacimiento" placeholder="DD/MM/AA" value="<?php echo $row['fecha_nacimiento']  ?>">
                                </div>

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    </div>
                </div>
    </body>
</html>