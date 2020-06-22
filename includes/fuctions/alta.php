<?php
include_once('db.php');
//main if
if (isset($_POST['submit'])) {
    //valores imagen
$nombrei= $_FILES['p_img']['name'];
$tipoi= $_FILES['p_img']['type'];
$tamanoi= $_FILES['p_img']['size'];
$data = mysqul_real_escape_string(file_get_contents($_FILES['p_img']['tmp_name']));


//valores para POST
$permitidos= array('jpg', 'png', 'gif', 'jpeg');
$producto_id = uniqid (rand (),false);
$producto = $_POST['n_producto'];
$des = $_POST['d_producto'];
$precio = $_POST['p_producto'];
$etiquetas = $_POST['etiquetas'];

    $sql = "INSERT INTO users (id_producto, img_producto , producto, descripcion, precio, clasificacion) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt= mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../../uporfile.php?error=Error_SQL_code_006");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "sbssfs", $producto_id, $data, $producto, $des, $precio, $etiquetas);
        mysqli_stmt_execute($stmt);
        header("Location: ../../uporfile.php?error=RegistroExitoso");
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn); 
}else{
    header("Location: ../../uporfile.php?error=nadadenada");
    exit();     
}?>