<?php 
if(isset($_POST['sumbit'])){
require 'db.php';
$user = $_POST['email_l'];
$pass = $_POST['password_l'];
if( empty($user)||empty($pass)){
header("Location: ../../perfill.php?error=Campos_vacios");
exit();
}else{
    $sql = "SELECT * FROM users WHERE usuario =? or correo=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../../perfill.php?error=Error_SQL_code_003");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "ss", $user, $user);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($resultado)){
            if($pass == $row['pass']){
                session_start();
                $_SESSION['telefono']=$row['telefono'];
                $_SESSION['usuario']=$row['usuario'];
                $_SESSIOM['imgp']=$row['imgpor'];
                $_SESSION['pass']=$row['pass'];
                $_SESSION['id']=$row['id']; 
                $_SESSION['admins']=$row['admins'];
                $_SESSION['nombre']=$row['nombre'];
                $_SESSION['apellido']=$row['apellido'];
                $_SESSION['correo']=$row['correo'];
                $_SESSION['pais']=$row['pais'];

                header("Location: ../../index.php?login=logeado");
                exit();  
            }else{
                header("Location: ../../perfill.php?error=ContraseñaErronea");
                exit();   
            }
        }else{
            header("Location: ../../perfill.php?error=ContraseñaErronea");
            exit(); 
        }
    }
}
}

else{
    header("Location: ../../index.php?error=noestalogueado");
    exit();     
}