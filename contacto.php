<?php
session_start();
if(isset($_SESSION['usuario'])){
include_once 'includes/templades/headerloget.php';?>

<img src="img/destacada3.jpg" alt="Imagen Principal">
    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw-300 centrar-texto">Llena el formulario de Contacto</h2>
        <hr>
        
        <?php     if(isset($_GET['mensaje'])){
        if($_GET['mensaje'] == "enviado"){
            echo '<center>
            <p class="errores">¡Listo nosotros nos pondremos en contacto!</p>
            <p><img src="img/enviado.png" alt="enviado"></p> </center>';
        }
    } ?><hr>
        <form class="contacto" action="includes/fuctions/Ecorreo.php" method="post">
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" placeholder="Tu Nombre" name="nombre" required>

                <label for="email">E-mail: </label>
                <input type="email" id="email" placeholder="Tu Correo electrónico" name="correo" required>

                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" placeholder="Tu Teléfono" name="tel" required>

                <label for="mensaje">Mensaje: </label>
                <textarea  id="mensaje" name="mensaje" required></textarea>

            </fieldset>
                

            <fieldset>
                <legend>Informacion Personalizada</legend>
                <label for="opciones">Vende o Compra</label>
                <select id="opciones" name="opc" required>
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="cantidad">Cantidad:</label>
                <input type="number" min="0" max="100"  name="cantidad">
            </fieldset>

            <button type="sumbit" value="Envialo (si te atreves :P)">Enviar</button>
        </form>
    </main>
    <?php }else{
include_once 'includes/templades/header.php';?>
<p>Inicie session para obtener acceso</p>
<?php }?>
    <?php include_once 'includes/templades/footer.php'?>
