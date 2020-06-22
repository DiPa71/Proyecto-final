<?php
if(isset($_POST['añadir_fav'])){
    switch($_POST['añadir_fav']){
        case 'agregar':
            if(!isset($_SESSION['fav'])){
                $productos = array(
                    'Id' => $_POST['pid'],
                    'Producto' => $_POST['producto'],
                    'Descripcion' => $_POST['descripcion'],
                );
                $_SESSION['fav'][0] = $productos;
            }else{
                $idp=array_column($_SESSION['fav'], 'Id');
                if(in_array($_POST['pid'],$idp)){
                    echo "<script>alert('El Producto ya se agrego una vez');</script>";
                }else{
                $numerop = count($_SESSION['fav']);
                $productos = array(
                    'Id' => $_POST['pid'],
                    'Producto' => $_POST['producto'],
                    'Descripcion' => $_POST['descripcion'],
                );
                    $_SESSION['fav'][$numerop] = $productos;
                }
            }
        break;

        case 'eliminar':
            foreach($_SESSION['fav'] as $indice =>$producto){
                if($producto['Id'] == $_POST['id']){
                        unset($_SESSION['fav'][$indice]);
                        echo "<script>alert ('Elemento Borrado de Favoritos...');</script>";
                }
            }
        break;
    }
}