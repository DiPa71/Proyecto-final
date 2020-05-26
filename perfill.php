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
            <p>Ya Ingreso, ¡Gracias por unirte a Tolito!</p>
            </div>
        </div>
</div>
<?php }else{ 
    include_once 'includes/templades/header.php';?>

    <div id="login_div" class="main-div ">
          
        <div class="contenedor-login">
            <div class="loginbk login-d">
                <h3><p>La mejor Pagina en venta de Tamales</p><p>¡UNETE!</p></h3>
            </div>
            <div class="login-i anuncio1">
			<nav class="singlog sombratxt">
				<a href="perfill.php">Inicio sesion</a>
				<a href="perfils.php">Registro sesion</a>
            </nav>
            <hr>
            <div class="">
            <h2>Inicio de sesion</h2>
            <hr>
            <?php 
                    if(isset($_GET['error'])){
                        if($_GET['error'] == "Campos_vacios"){
                            echo '<p class="errores">Algun Campo esta Vacio</p>';
                        }                        
                        else if($_GET['error'] == "Error_SQL_code_003"){
                            echo '<p class="errores">Error SQL Codigo:03</p>';
                        }
                        else if($_GET['error'] == "ContraseñaErronea"){
                            echo '<p class="errores">Contraseña o Usuario no coinciden, Favor de verificar</p>';
                        }
                        
                    }
                    
                    ?>
            <hr>
				<form action="includes/fuctions/login.php" method="POST">
					<input type="text" placeholder="Usuario / Email" id="email_field" name="email_l" required>
					<input type="password" placeholder="Contraseña" id="password_field" name="password_l" required>
					<button type="sumbit" name="sumbit"class="">Iniciar sesion</button>
                </form>
            </div>
            </div>
	</div>
	<?php }?>
    <?php include_once 'includes/templades/footer.php'?>