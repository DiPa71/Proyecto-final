<?php
if(isset($_POST['añadir_carro'])){
    switch($_POST['añadir_carro']){
        case 'agregar':
            if(!isset($_SESSION['carrito'])){
                $productos = array(
                    'Id' => $_POST['pid'],
                    'Producto' => $_POST['producto'],
                    'Precio' => $_POST['precio'],
                    'Descripcion' => $_POST['descripcion'],
                    'Cantidad' => $_POST['cantidad']
                );
                $_SESSION['carrito'][0] = $productos;
            }else{
                $idp=array_column($_SESSION['carrito'], 'Id');
                if(in_array($_POST['pid'],$idp)){
                    echo "<script>alert('El Producto ya se agrego una vez');</script>";
                }else{
                $numerop = count($_SESSION['carrito']);
                $productos = array(
                    'Id' => $_POST['pid'],
                    'Producto' => $_POST['producto'],
                    'Precio' => $_POST['precio'],
                    'Descripcion' => $_POST['descripcion'],
                    'Cantidad' => $_POST['cantidad']
                );
                    $_SESSION['carrito'][$numerop] = $productos;
                }
            }
        break;

        case 'eliminar':
            foreach($_SESSION['carrito'] as $indice =>$producto){
                if($producto['Id'] == $_POST['id']){
                        unset($_SESSION['carrito'][$indice]);
                        echo "<script>alert ('Elemento Borrado del Carrito...');</script>";
                }
            }
        break;
    }
}