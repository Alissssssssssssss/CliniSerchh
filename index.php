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

    <!--/Encabezado-->
    <br>
    <br>


    <div class="container-lg ">

        <h3>Registro de pacientes</h3>
        <br>

        <div >
            <form action="buscar.php" method="post" >
                
                <!--Buscador-->
                    <input class="form-control form-control-sm" type="text" placeholder="Buscar" name="buscar">
                    <p></p>
                    <input class="btn btn-primary btn-sm" type="submit" value="buscar">
                    <a class="btn btn-primary btn-sm" href="nuevo.php" role="button">nuevo</a>
                    <p></p>
            
                <!--/Buscador-->

            </form>
        </div>
        <br>
        <!-- ACA INICIA LA TABLA -->

        <table class="table table-lg table-bordered border-dark table-striped table-hover ">
                <tr class="table-secondary table-bordered border-dark">
                    <td >N°</td>
                    <td >NOMBRES</td>
                    <td >APELLIDOS</td>
                    <td align="center">DNI</td>
                    <td align="center">GENERO</td>
                    <td align="center">A.S.A.</td>
                    <td align="center">FECHA DE REGISTRO</td>
                    <td align="center">ARCHIVO</td>
                    <td align="center">OPCIONES</td>
    
                </tr>

        <!--conexion -->
    
            <?php   
                $cnx = mysqli_connect("localhost", "root", "", "dbtabla");
                $sql = "SELECT id, nombre, apellido, dni, genero, condicion, fecha, archivo FROM pacientes order by id asc";
                $rta = mysqli_query($cnx, $sql);
    
                while ($mostrar = mysqli_fetch_row($rta)){
            ?>
        <!--/conexion -->
                    <tr>
                        <td ><?php echo $mostrar[0] ?></td>
                        <td ><?php echo $mostrar[1] ?></td>
                        <td ><?php echo $mostrar[2] ?></td>
                        <td align="center"><?php echo $mostrar[3] ?></td>
                        <td align="center"><?php echo $mostrar[4] ?></td>
                        <td align="center"><?php echo $mostrar[5] ?></td>
                        <td align="center"><?php echo $mostrar[6] ?></td>

                        <td align="center">
                            <a class="icon-link text-info-emphasis" href="https://publuu.com/flip-book/364187/830785">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708z"/>
                                    <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                                </svg>
                            </a>
                            
                        </td>
                       
                
        <!-- BOTENONES-->              
                        <td align="center">
                            <a class="text-decoration-none text-primary" href="editar.php?id=<?php echo $mostrar[0] ?>&nombre=<?php echo $mostrar[1] ?>&apellido=<?php echo $mostrar[2] ?>&dni=<?php echo $mostrar[3] ?>&genero=<?php echo $mostrar[4] ?>&condicion=<?php echo $mostrar[5] ?>&fecha=<?php echo $mostrar[6] ?>">Editar</a> 

                            <a class="text-decoration-none text-danger" href="sp_eliminar.php?id=<?php echo $mostrar[0] ?>">Eliminar</a>
                        </td>
        <!-- /BOTENONES-->             
                    
                </tr>
                <?php
                }    
            ?>
            
      
        </table>
        <br>
        <br>
       
</div>
  
</body>
</html>