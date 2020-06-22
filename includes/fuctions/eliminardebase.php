<?php 
include_once('db.php');
if(isset($_POST['btn_eliminar'])){
    var_dump($_POST);
$idp=$_POST['btn_eliminar'];
            $sql = 'DELETE FROM productos WHERE id_producto = $btn_eliminar';
            $stmt= mysqli_stmt_init($conn);
                if ($conn->query($sql) === TRUE) {
                    header("Location: ../../uporfile.php?action=completo_elim");
                    exit();
              } else {
                header("Location: ../../uporfile.php?error=error_base_datos");
                exit();
              }
              $conn->close();
}