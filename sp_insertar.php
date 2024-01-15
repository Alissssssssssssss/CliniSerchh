<?php 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $genero = $_POST['genero'];
    $condicion = $_POST['condicion'];
    $fecha = $_POST['fecha'];
    $archivo = $_POST['archivo'];

    $cnx = mysqli_connect("localhost", "root", "", "dbtabla");
    $sql = "INSERT INTO pacientes(nombre, apellido, dni, genero, condicion, fecha, archivo) VALUES ('$nombre', '$apellido', '$dni', '$genero', '$condicion', '$fecha', '$archivo')";
    $rta = mysqli_query($cnx, $sql);
    if(!$rta){
        echo "No se inserto!";
    }else{
        header("Location: index.php");
       
        echo "se inserto";
    }
?>
