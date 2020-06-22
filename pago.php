<?php
session_start();
if(isset($_SESSION['usuario'])){
include_once 'includes/templades/headerloget.php';
include 'includes/fuctions/carritof.php';

?>
    <main class="contenedor seccion contenido-centrado">
    <form class="contacto" action="pagar.php" method="post">
    <label for="nombre">Numero de Tarjeta:</label>
    <input type="text" placeholder="Ejemplo: 1111-1111-1111-1111" name="tarjeta" min="19" max="19" required>
    <label for="nombre">Caducidad:</label>
    <select id="opciones" name="opc" required>
                    <option value="" disabled selected>-- AÑO --</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
    </select>
    <select id="opciones" name="opc" required>
                    <option value="" disabled selected>-- Mes --</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
    </select>
    <label for="nombre">Codigo de Seguridad /CVV2:</label>
    <input type="number" min="0" max="999"  name="cvv2">
    <label for="nombre">Titular:</label>
    <input type="text" placeholder="Nombre del Titular" name="tarjeta" required>
    <button type="sumbit" name="pagar">Continuar la Compra</button>
    </form>
    </main>
<?php
}else{
include_once 'includes/templades/header.php';
}?>
    <div class="rango-foot">
    <?php include_once 'includes/templades/footer.php'?>
    </div>