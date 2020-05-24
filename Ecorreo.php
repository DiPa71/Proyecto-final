<?php 
//llamada a campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$tel = $_POST['tel'];
$opc = $_POST['opc'];
$cantidad = $_POST['cantidad'];
$mensaje = $_POST['mensaje'];
//correo
$destino = "tolitotamales@gmail.com";
$asunto = "Contacto Tolito";

$cuerpomensaje = "De: $nombre \nCorreo: $correo\nTelefono: $tel\nOpcion: $opc\n";
$cuerpomensaje .= "Cantidad: $cantidad\n Mensaje: $mensaje";

//envio
mail($destino, $asunto, $cuerpomensaje);
header('Location:mensajeenviado.html');
 ?>