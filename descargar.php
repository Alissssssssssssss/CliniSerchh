<?php 
    $id = $_GET['id'];

    $cnx = mysqli_connect("localhost", "root", "", "dbtabla");
    $sql = "SELECT * FROM pacientes WHERE id = '$id'";
    $rta = mysqli_query($cnx, $sql);

    if (mysqli_num_rows($rta) == 1) {
        $fila = mysqli_fetch_assoc($rta);
        $archivo = $fila['archivo'];
        $ruta_archivo =  $archivo;
    
        // Verificar que el archivo exista en el servidor
        if (file_exists($ruta_archivo)) {
            // Enviar el archivo al navegador
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . $archivo . '"');
            readfile($ruta_archivo);
        } else {
            echo "El archivo no existe en el servidor.";
        }
    } else {
        echo "El archivo no se encontró en la base de datos.";
    }


?>