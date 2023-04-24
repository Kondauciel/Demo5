<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de productos</title>
</head>
<body>
    <h1>Lista de productos</h1>
    <div>
<<<<<<< HEAD
        <a href="nuevoproducto.php">Nuevo</a>
=======
        <a href="nuevoProducto.php">Nuevo</a>
>>>>>>> b2883d1ece7a5489d7899625a046b0c608b37c54
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Existencias</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once 'Models/Producto.php';
                    $producto=new Producto();
                    $resultado=$producto->ObtenerProductos();
                    if(count($resultado)>0){
                        foreach ($resultado as $registro) {
                        echo '<tr>';
<<<<<<< HEAD
                        echo '<th>'.$registro['Id'].'</th>';
                        echo '<th>'.$registro['Nombre'].'</th>';
                        echo '<th>'.$registro['Precio'].'</th>';
                        echo '<th>'.$registro['Existencias'].'</th>';
=======
                        echo '<td>'.$registro['Id'].'</td>';
                        echo '<td>'.$registro['Nombre'].'</td>';
                        echo '<td>'.$registro['Precio'].'</td>';
                        echo '<td>'.$registro['Existencias'].'</td>';
>>>>>>> b2883d1ece7a5489d7899625a046b0c608b37c54
                        echo '</tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>