<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CliniSerch</title>
    <link rel="icon" href="imgs\icono.ico" sizes = "32x32" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="bg-info-subtle">

<!-- Encabezado -->
<nav class="navbar navbar-sm bg-dark" >
  
  <div class="d-inline p-2 ">
      <a class="navbar-brand" href=""><span class="text-light">
      <img src="imgs\logo.png" alt="Logo" width="35" height="30" class="d-inline-block align-text-top">
          CliniSerch</span> 
      </a>
  </div>
  <div class="d-inline p-2 ">
       <a class="btn btn-sm  btn-outline-light" href="index.html" role="button">Cerrar Seccion</a>
  </div>
</nav>
<br>
<br>

<!--/Encabezado-->

    
    <div class="container fluid">

        <h3>Resultados:</h3>
        <br>

        <div>
            <form action="buscar.php" method="post" >
                

                    <input class="form-control form-control-sm" type="text" placeholder="Buscar" name="buscar" >
                    <p></p>
                    <input class="btn btn-primary btn-sm" type="submit" value="buscar">
                    <a class="btn btn-primary btn-sm" href="nuevo.php" role="button">nuevo</a>
                    <p></p>
            
                    <!-- aca -->

            </form>
        </div>
        <br>
        <!-- ACA INICIA LA TABLA -->

        <table class="table table-bordered border-dark table-striped table-hover">
                <tr class="table-secondary table-bordered border-dark">
                    <td >N°</td>
                    <td >NOMBRES</td>
                    <td >APELLIDOS</td>
                    <td align="center">DNI</td>
                    <td align="center">GENERO</td>
                    <td align="center">ASA</td>
                    <td align="center">FECHA DE REGISTRO</td>
                    <td align="center">OPCIONES</td>
    
                </tr>
    
            <?php  

                $buscar = $_POST['buscar'];
                $cnx = mysqli_connect("localhost", "root", "", "dbtabla");
                $sql = "SELECT id, nombre, apellido, dni, genero, condicion, fecha FROM pacientes WHERE nombre  LIKE '$buscar%'
                OR apellido LIKE '$buscar%'
                OR dni LIKE '$buscar%'
                OR genero LIKE '$buscar%'
                ORDER BY id asc";
                $rta = mysqli_query($cnx, $sql);

    
                while ($mostrar = mysqli_fetch_row($rta)){
            ?>
                    <tr>
                        <td><?php echo $mostrar[0] ?></td>
                        <td><?php echo $mostrar[1] ?></td>
                        <td><?php echo $mostrar[2] ?></td>
                        <td><?php echo $mostrar[3] ?></td>
                        <td><?php echo $mostrar[4] ?></td>
                        <td align="center"><?php echo $mostrar[5] ?></td>
                        <td align="center"><?php echo $mostrar[6] ?></td>

                        <td align="center">
                            <a class="text-decoration-none text-primary" href="editar.php?id=<?php echo $mostrar[0] ?>&nombre=<?php echo $mostrar[1] ?>&apellido=<?php echo $mostrar[2] ?>&dni=<?php echo $mostrar[3] ?>&genero=<?php echo $mostrar[4] ?>&condicion=<?php echo $mostrar[5] ?>&fecha=<?php echo $mostrar[6] ?>">Editar</a> 

                            <a class="text-decoration-none text-danger" href="sp_eliminar.php?id=<?php echo $mostrar[0] ?>">Eliminar</a>
                        </td>

                    </tr>
            <?php
                }    
            ?>
    
    
      
        </table>
        <a class="btn btn-outline-primary" href="index.php" role="button">Atras</a>
    </div>




  
</body>
</html>