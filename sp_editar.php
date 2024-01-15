<?php 
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $genero = $_POST['genero'];
    $condicion = $_POST['condicion'];
    $fecha = $_POST['fecha'];
    $archivo = $_POST['archivo'];

    $cnx = mysqli_connect("localhost", "root", "", "dbtabla");
    $sql = "UPDATE pacientes SET nombre ='$nombre', apellido ='$apellido', dni ='$dni', genero ='$genero', condicion ='$condicion', fecha ='$fecha', archivo ='$archivo' where id = $id ";
    $rta = mysqli_query($cnx, $sql);

    if(!$rta){
        echo "No se actualizó!";
    }else{
        header ("Location: index.php");
    }
?>