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

<?php
    $id_2 = $_GET['id'];
    $nombre_2 = $_GET['nombre'];
    $apellido_2 = $_GET['apellido'];
    $dni_2 = $_GET['dni'];
    $genero_2 = $_GET['genero'];
    $condicion_2 = $_GET['condicion'];
    $fecha_2 = $_GET['fecha'];
?>
    <div class="container ">
        <h3>Editar datos: </h3>
        <br>
        <div>
            <form action="sp_editar.php" method="post">
                <table class="table table-bordered border-dark table-striped table-hover">

                    <tr>
                        <td >Ingresar Datos:</td>
                        <td class="table-secondary table-bordered border-dark" ><input class="form-control" type="text" name="id"  value="<?=$id_2?>" ></td>
                    </tr >
                    <tr >
                        <td >Nombres:</td>
                        <td class="table-secondary table-bordered border-dark" > <input class="form-control " type="text" name="nombre"  value ="<?=$nombre_2?>"></td>
                    </tr>
                    <tr >
                        <td >Apelllidos:</td>
                        <td class="table-secondary table-bordered border-dark"><input class="form-control" type="text" name="apellido"  value ="<?=$apellido_2?>"></td>
                    </tr>
                    <tr >
                        <td >DNI:</td>
                        <td class="table-secondary table-bordered border-dark"><input class="form-control" type="text" name="dni" maxlength="8" value ="<?=$dni_2?>"></td>
                    </tr>
                    <tr >
                        <td >Genero:</td>
                            <td class="table-secondary table-bordered border-dark">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genero" id="inlineRadio1" value="Masculino">
                                <label class="form-check-label" for="inlineRadio1">masculino</label>
                                </div>

                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genero" id="inlineRadio2" value="Femenino">
                                <label class="form-check-label" for="inlineRadio2">femenino</label>
                                </div>

                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genero" id="inlineRadio2" value="Otro">
                                <label class="form-check-label" for="inlineRadio2">Otro</label>
                                </div>
                            </td>
                       
                    </tr>

                    <tr >
                        <td >A.S.A.:</td>
                            <td class="table-secondary table-bordered border-dark">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input " type="radio" name="condicion" id="inlineRadio1" value="I">
                                <label class="form-check-label" for="inlineRadio1">I</label>
                                </div>

                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="condicion" id="inlineRadio2" value="II">
                                <label class="form-check-label" for="inlineRadio2">II</label>
                                </div>

                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="condicion" id="inlineRadio2" value="III">
                                <label class="form-check-label" for="inlineRadio2">III</label>
                                </div>
                       
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="condicion" id="inlineRadio2" value="IV">
                                <label class="form-check-label" for="inlineRadio2">IV</label>
                                </div>

                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="condicion" id="inlineRadio2" value="V">
                                <label class="form-check-label" for="inlineRadio2">V</label>
                                </div>
                            </td>
                    </tr>
                    <tr >
                        <td >Fecha de registro:</td>
                        <td class="table-secondary table-bordered border-dark"><input class="form-control" type="date" name="fecha"  value ="<?=$fecha_2?>"></td>
                    </tr>
                    <tr>
                        <td >ARCHIVO:</td>
                        <td class="table-secondary table-bordered border-dark"><input  class="form-control" type="file" name="archivo" id=""></td>
                      
                    </tr>

                </table>
<!-- Botones-->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-outline-secondary" type="submit">Actualizar</button>
                    <a class="btn btn-primary " href="index.php" role="button">Cancelar</a>
                </div>
<!--/ Botones-->
            </form>
        </div>

    </div>
    
</body>
</html>