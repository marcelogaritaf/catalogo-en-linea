<?php
 include('../conexion.php');
 $idUsuario = $_POST['idUsuario'];
 $Nombre = $_POST['Nombre'];
 $Correo = $_POST['Correo'];
 $NombreUsuario = $_POST['NombreUsuario'];
 $TipoUsuario = $_POST['TipoUsuario'];
 $Password = $_POST['Password'];
 $Password = hash('sha512', $Password);
 $sql = mysqli_query($conexion, "UPDATE usuarios SET Nombre = '$Nombre',Correo = '$Correo',NombreUsuario='$NombreUsuario',TipoUsuario = '$TipoUsuario', Password = '$Password' WHERE IdUsuarios='$idUsuario'");

 if($sql){
     header("location: crudUsuarios.php");
 }else{
     echo "error al actualizar";
 }
?>