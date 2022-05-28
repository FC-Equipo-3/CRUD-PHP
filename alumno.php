<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM datos_empleados";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Pagina Empleado</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-3">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1> Datos del Trabajador</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id" placeholder="Id">
                                    <input type="text" class="form-control mb-3" name="num_empleado" placeholder="Num_Empleado">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="p_apellido" placeholder="P_Apellido">
                                    <input type="text" class="form-control mb-3" name="s_apellido" placeholder="S_Apellido">
                                    <input type="text" class="form-control mb-3" name="departamento" placeholder="Departamento">
                                    <input type="text" class="form-control mb-3" name="area" placeholder="Area">
                                    <input type="text" class="form-control mb-3" name="puesto" placeholder="Puesto">
                                    <input type="text" class="form-control mb-3" name="estatus" placeholder="Estatus">
                                    <input type="text" class="form-control mb-3" name="fecha_nacimiento" placeholder="dd/mm/aa">

                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-9">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Num_Empleado</th>
                                        <th>Nombre</th>
                                        <th>P_Apellido</th>
                                        <th>S_Apellido</th>
                                        <th>Departamento</th>
                                        <th>Area</th>
                                        <th>Puesto</th>
                                        <th>Estatus</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['num_empleado']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['p_apellido']?></th>   
                                                <th><?php  echo $row['s_apellido']?></th> 
                                                <th><?php  echo $row['departamento']?></th> 
                                                <th><?php  echo $row['area']?></th> 
                                                <th><?php  echo $row['puesto']?></th>
                                                <th><?php  echo $row['estatus']?></th> 
                                                <th><?php  echo $row['fecha_nacimiento']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>"class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>
