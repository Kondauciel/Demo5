<?php
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$existencias=$_POST['existencias'];
<<<<<<< HEAD
if(!empty($nombre)&&!empty($precio)&&!empty($existencias)){
    require_once'Models/Producto.php';
    $producto=new Producto();
    $resultado=$producto->InsertarProducto($nombre,$precio,$existencias);
=======
if(!empty($nombre)&& !empty($precio)&& !empty($existencias)){
    require_once 'Models/Producto.php';
    $producto = new Producto();
    $resultado=$producto->InsertarProducto($nombre,
    $precio,$existencias);
>>>>>>> b2883d1ece7a5489d7899625a046b0c608b37c54
    if($resultado){
        header("Location:index.php");
    }
    else{
<<<<<<< HEAD
        header("Location:nuevoProducto.php"); 
=======
        header("Location:nuevoProducto.php");
>>>>>>> b2883d1ece7a5489d7899625a046b0c608b37c54
    }
}
else{
    header("Location:nuevoProducto.php");
}
<<<<<<< HEAD

?>
=======
?>
>>>>>>> b2883d1ece7a5489d7899625a046b0c608b37c54
