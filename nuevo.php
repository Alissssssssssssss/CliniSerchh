<!DOCTYPE html>
<html lang="en">
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
                <a class="navbar-brand" href="index.php"><span class="text-light">
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
    <div class=" container-lg">
        <h3>Ingresar datos del paciente. </h3>
        <br>
      
            <form action="sp_insertar.php" method="post">
                <table class="table table-bordered border-dark  table-striped">

                    
                    <tr >
                        <td>Nombres:</td>
                        <td class="table-secondary table-bordered border-dark"><input  class="form-control" type="text" name="nombre" id="" maxlength="50"></td>
                    </tr>
                    <tr>
                        <td>Apellidos:</td>
                        <td class="table-secondary table-bordered border-dark"><input  class="form-control" type="text" name="apellido" id="" maxlength="50"></td>
                    </tr>
                    <tr>
                        <td >DNI:</td>
                        <td class="table-secondary table-bordered border-dark" ><input  class="form-control" type="text" name="dni" id="" maxlength="8"></td>
                    </tr>
                    <tr>
                        <td>Genero:</td>
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

                    <tr>
                        <td>A.S.A.</td>
                            <td class="table-secondary table-bordered border-dark">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="condicion" id="inlineRadio1" value="I">
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
                    <tr>
                        <td>Fecha de registro:</td>
                        <td class="table-secondary table-bordered border-dark"><input  class="form-control" type="date" name="fecha" id=""></td>
                    </tr>
                    <tr>
                        <td >Archivo:</td>
                        <td class="table-secondary table-bordered border-dark" ><input  class="form-control" type="file" name="archivo" id=""></td>
                      
                    </tr>

                </table>
                    <input class="btn btn-primary  btn-sm " type="submit" value="Guardar">
                    <a class="btn btn-outline-primary btn-sm" href="index.php" role="button">Atras</a>
                    <p></p>
                 
            </form>
            

        

    </div>
    
</body>
</html>