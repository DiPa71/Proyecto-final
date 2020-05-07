<?php
session_start();
if(isset($_SESSION['usuario'])){
include_once 'includes/templades/headerloget.php';?>
<form class="" action="includes/fuctions/logout.php" method="POST">
<button type="sumbit" name="sumbit"class="">Cerrar sesion</button>
</form>





<?php }else{ ?>
<?php include_once 'includes/templades/header.php';?>
<h2>Error 404! Page not Found...</h2>
<?php }?>
