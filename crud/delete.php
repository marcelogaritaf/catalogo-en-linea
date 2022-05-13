<?php
 include('../conexion.php');
 $idUsuarios = $_GET['id'];
 $sql = mysqli_query ($conexion, "DELETE FROM usuarios WHERE IdUsuarios='$idUsuarios'");
 if($sql){
     header ("location: crudUsuarios.php");

 }else{
     echo"error al eliminar";
 }

?>