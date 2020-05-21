<?php 
session_start();
if(isset($_SESSION['usuario'])){
    include_once 'includes/templades/headerloget.php';?>
    <div class="contenedor-login">
        <div class="loginbks login-d">
            <h3><p>La mejor Pagina en venta de Tamales</p><p>¡UNETE!</p></h3>
        </div>
        <div class="login-i anuncio1">
            <nav class="singlog sombratxt">
                <a href="perfill.php">Inicio sesion</a>
                <a href="perfils.php">Registro sesion</a>
            </nav>
            <hr>
            <div class="">
                <h2>Registro de sesion</h2>
                <hr>
                <p>Ya estas registrado, ¡Gracias por unirte a Tolito!</p>
            </div>
        </div>
</div>
<?php }else{
    include_once 'includes/templades/header.php';?>

    <div id="login_div" class="main-div ">
          
        <div class="contenedor-login">
            <div class="loginbks login-d">
                <h3><p>La mejor Pagina en venta de Tamales</p><p>¡UNETE!</p></h3>
            </div>
            <div class="login-i anuncio1">
			<nav class="singlog sombratxt">
				<a href="perfill.php">Inicio sesion</a>
				<a href="perfils.php">Registro sesion</a>
            </nav>
            <hr>
            <div class="">
            <h2>Registro de sesion</h2>
            <hr>
            <?php 
                    if(isset($_GET['error'])){
                        if($_GET['error'] == "Campos_vacios"){
                            echo '<p class="errores">Algun Campo esta Vacio</p>';
                        }
                        else if($_GET['error'] == "Usuario_no_admitido"){
                            echo '<p class="errores">Caracteres no validos en Usuario</p>';
                        }
                        else if($_GET['error'] == "correo_mal_ingresado"){
                            echo '<p class="errores">Correo invalido</p>';
                        }
                        else if($_GET['error'] == "Telefono_con_caracteres_invalidos"){
                            echo '<p class="errores">Telefono invalido</p>';
                        }
                        else if($_GET['error'] == "Telefono_con_caracteres_invalidos"){
                            echo '<p class="errores">Telefono invalido</p>';
                        }
                        else if($_GET['error'] == "Contraseñas_no_coinciden"){
                            echo '<p class="errores">Las Contraseñas no Coinciden</p>';
                        }
                        else if($_GET['error'] == "Error_SQL_code_001"){
                            echo '<p class="errores">Error SQL Codigo:01</p>';
                        }
                        else if($_GET['error'] == "Error_SQL_code_002"){
                            echo '<p class="errores">Error SQL Codigo:02</p>';
                        }
                        else if($_GET['error'] == "Error_SQL_code_003"){
                            echo '<p class="errores">Error SQL Codigo:03</p>';
                        }
                        else if($_GET['error'] == "Usuario_existente"){
                            echo '<p class="errores">Usuario Ya Existente</p>';
                        }
                    }
                    
                    ?>
                    <hr>
            <form class="" action="includes/fuctions/registro.php" method="POST" nctype="multipart/form-data" required>
                            <div class="datos-usuario">
                                <div class="campo">
                                    <label for="usuario">Usuario:
                                    <input type="text" name="username" id="user" placeholder="Nombre de Usuario -- solo a-z A-Z 0-9" maxlength="15" required>
                                    </label>
                                </div>
                                <div class="campo">
                                    <label for="nombre">Nombre:
                                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                                    </label>
                                </div>
                                <div class="campo">
                                    <label for="apellido">Apellido:
                                    <input type="text" name="apellido" id="apellido" placeholder="Apellido" required>
                                    </label>
                                </div>
                                <div class="campo">
                                    <label for="nombre">Telefono:
                                    <input type="number" name="telefono"  id="password" placeholder="Telefono -- solo 0-9" required>
                                    </label>
                                </div>
                                <div class="campo">
                                    <label for="email">E-Mail:
                                    <input type="email" name="email" id="email" placeholder="E-Mail" required>
                                    </label>
                                </div>
                                <div class="campo">
                                    <label for="nombre">Contraseña:
                                    <input type="password" name="passw"  id="password" placeholder="Contraseña -- solo a-z A-Z 0-9" required>
                                    </label>
                                </div>
                                <div class="campo">
                                    <label for="nombre">Repetir Contraseña:
                                    <input type="password" name="rep_passw"  id="password" placeholder="Repetir Contraseña" required>
                                    </label>
                                </div>
                                <div class="campo">
                                    <label for="Pais">Selecciona tu Pais</label>
                                        <select name="pais" id="pais" value="-any-" required>
                                        <option>Seleccionar su país</option>
                                        <option value="ger">Alemania</option>
                                        <option value="can">Canada</option>
                                        <option value="chl">Chile</option>
                                        <option value="esp">España</option>
                                        <option value="usa">Estados Unidos(USA)</option>
                                        <option value="jap">Japon</option>
                                        <option value="mx">Mexico</option>
                                        </select>
                                </div>
                                <div id="error"></div>
                            </div>
                            <button type="sumbit" name="sumbit" id="sumbit" class="">Registrar</button>
                </form>
                <hr>
                    </div>
            </div>
    </div>
	<?php } ?>	
    <?php include_once 'includes/templades/footer.php'?>