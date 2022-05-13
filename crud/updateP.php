<?php
    include('../conexion.php');
    $id = $_POST['Idproducto'];
    $nombre= $_POST['Nombre'];
    $descripcion = $_POST['Descripcion'];
    $tipoP = $_POST['TipoProducto'];
   // $imagen = addslashes(file_get_contents($_FILES['imagen']));
   $imagen = $_POST['imagen'];
    $sql = mysqli_query($conexion, "UPDATE productos SET Nombre='$nombre', Descripcion='$descripcion', Imagen='$imagen', TipoProductos='$tipoP' WHERE Idproducto='$id'");

    if($sql){
        header("location: crudProductos.php");
    }
    else{
        echo "error al actualizar";
    }

?>