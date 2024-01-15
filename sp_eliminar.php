<?php 
    $id = $_GET['id'];


    $cnx = mysqli_connect("localhost", "root", "", "dbtabla");
    $sql = "DELETE FROM pacientes where id = $id ";
    $rta = mysqli_query($cnx, $sql);
    if(!$rta){
        echo "No se eliminó!";
    }else{
        header ("Location: index.php");
    }
?>