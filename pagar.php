<?php
session_start();

if(isset($_SESSION['usuario'])){
    include_once('includes/fuctions/db.php');
    include_once 'includes/templades/headerloget.php';?>
<div class="jumbotron text-center">
<h2>¡Datos Ingresados Correctamente!</h2>
<p>Tus tamales estan en Camino</p>


<form action="../../anuncios.php">
<button type="sumbit" name="Regresar">Seguir Comprando</button>
</form>
</div>
<div class="rango-foot">
<?php include_once 'includes/templades/footer.php'?>
</div>
    <?php if($_POST){
    $total= 0;
    $sessionid = session_id();
    
        foreach($_SESSION['carrito'] as $indice => $producto){
    
            $total += ($producto['Precio'] * $producto['Cantidad']);
    
        }
    $null= NULL;
    $paypal='';
    $date= date("l jS \of F Y h:i:s A");
    $correo= $_SESSION['correo'];
    $tpago= number_format($total,2);
    $estado='Pendiente';
    
    $sql = "INSERT INTO ventas (id_v, clavet , paypaldatos, fecha, correo, total, estatus) VALUES (?, ?, ?, ?, ?, ?, ? )";
    $stmt= mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "<script>alert('Error al mandar su solicitud');</script>";
        exit();
    }else{
    
        mysqli_stmt_bind_param($stmt, "issssds", $null, $sessionid, $paypal, $date, $correo, $tpago, $estado);
        mysqli_stmt_execute($stmt);
        echo "<script>alert('Datos admitidos, Pago Realizado');</script>";
        exit();
    }?> 

<div class="rango-foot">
    <?php include_once 'includes/templades/footer.php'?>
    </div>
<?php }?>
<p>¿Tienes Dudas? mandanos un correo en la seccion de contacto o envia un correo a: Tolito.com.mx@gmail.com</p>

    
<?php }else{?>
    <?php include_once 'includes/templades/header.php';?>
    <h2>Error 404! Page not Found...</h2>
    <div class="rango-foot">
    <?php include_once 'includes/templades/footer.php'?>
    </div>
<?php }?>
