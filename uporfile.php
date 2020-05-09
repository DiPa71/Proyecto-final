<?php
session_start();
$admin = $_SESSION['admins'];
$usuario = $_SESSION['usuario'];
//$imagen = $_SESSION['imgp'];
$contraseña = $_SESSION['pass'];
$ide= $_SESSION['id'];
$estado = $_SESSION['admins'];
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$correo = $_SESSION['correo'];
$pais = $_SESSION['pais'];
$telefono = $_SESSION['telefono'];

//echo '<script arc="js/main.js"></script>';
if(isset($_SESSION['usuario'])){
include_once 'includes/templades/headerloget.php';
if($admin = 1){?>
	<div class="warp">
		<ul class="tabs">
            <li><a href="#tab1">Informacion Personal</a></li>
			<li><a href="#tab2">Administrar Usuarios</a></li>
            <li><a href="#tab3">Administarar Productos</a></li>
		</ul>
		<div class="secciones">
			<article id="tab1">
                <div class="informacion">
                    <div class="contenidop anuncio3 diplay">
                    <img src="img/perfildef.jpg">
                    <?php echo $usuario?>
                    </div>
                    <div class="contenidop anuncio3 txtprof">
                    <p>Nombre y Apellido: <?php echo $nombre. " " . $apellido?></p>
                    <p>Correo: <?php echo $correo?></p>
                    <p>Telefono: <?php echo $telefono?></p>
                    <p>id_unico: <?php echo $ide?></p>
                    </div>
                </div>
            </article>


			<article id="tab2">
            <?php
        try{
            require_once('includes/fuctions/db.php');
            $sql = " SELECT id, usuario, nombre, apellido, correo, telefono, pais, admins FROM users";
            $resultado = $conn->query($sql);
        }catch(\Exception $e){
            echo $e->getMessage();
        }
        ?>
    <div class="informacion">
        <div class="contenidop anuncio3 diplay">
                    <img src="img/perfildef.jpg">
                    <?php echo $usuario?>
                        <?php //ordenando Los valores de la tabla
                            $fusuarios= array();
                            while($usuarios = $resultado->fetch_assoc()){
                                $usuario = array(
                                    'Usuario' => $usuarios['usuario'],
                                    'Idunico' => $usuarios['id'],
                                    'Nombre' => $usuarios['nombre'],
                                    'Apellido' => $usuarios['apellido'],
                                    'Correo' => $usuarios['correo'],
                                    'Telefono' => $usuarios['telefono'],
                                    'Pais' => $usuarios['pais'],
                                    'Estado' => $usuarios['admins'],
                                    );
                                $fusuarios[] = $usuario;?>
                                
                                        <?php }//fin while?>
        </div>
        <div class="contenidop anuncio3 diplay">
            <div class="registrof">
            <div class="contenedor barrabusc">
            <input type="text" id="inputbuscar" placeholder="| id | Usuario | Nombre | Telefono |" class=""><button><i class="nhov fa fa-search"></i></button>
            </div>    
            <table class="table table-bordered">
					<tr>
						<th width="10%">Nombre Usuario</th>
						<th width="30%">ID</th>
						<th width="10%">Nombre y Apellido</th>
						<th width="20%">Correo</th>
                        <th width="10%">Telefono</th>
                        <th width="10%">Pais</th>
                        <th width="20%">admins</th>
                    </tr> 
                    <tr>
                        <?php foreach($fusuarios as $usuario) {?>
						<td><?php echo $usuario["Usuario"]; ?></td>
						<td><?php echo $usuario["Idunico"]; ?></td>
						<td><?php echo $usuario["Nombre"] . '' . $usuario["Apellido"]; ?></td>
                        <td><?php echo $usuario["Correo"]; ?></td>
                        <td><?php echo $usuario["Telefono"]; ?></td>
                        <td><?php echo $usuario["Pais"]; ?></td>
                        <td> <?php echo 'Base:' . $usuario["Estado"]; ?>
                        <select name="edit" id="pais" value=""> 
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        </select></td>
					</tr>
                    <?php }?>
                    </tr>
                </table>
                <tr>            
                    <form>
                        <button type="sumbit">Realizar cambios</button>
                    </form>
                    </tr>
            </div>

        </div>
        </div>
            </article>
            <article id="tab3">


            </article>
            <form action="includes/fuctions/logout.php" method="POST">
            <button type="sumbit">Cerrar sesion</button>
            </form>
	   </div>
    </div>
<?php } else if($admin == 0){ ?>
    <div class="warp">
		<ul class="tabs">
            <li><a href="#tab1">Informacion Personal</a></li>
		</ul>

		<div class="secciones">
			<article id="tab1">
                <div class="informacion">
                    <div class="contenidop anuncio3 diplay">
                    <img src="img/perfildef.jpg">
                    <?php echo $usuario?>
                    </div>
                    <div class="contenidop anuncio3 txtprof">
                    <p>Nombre y Apellido: <?php echo $nombre. " " . $apellido?></p>
                    <p>Correo: <?php echo $correo?></p>
                    <p>Telefono: <?php echo $telefono?></p>
                    <p>id_unico: <?php echo $ide?></p>
                    </div>
                </div>
            </article>
<?php } ?>

<?php }else{ ?>
<?php include_once 'includes/templades/header.php';?>
<h2>Error 404! Page not Found...</h2>
<?php }?>
<?php include_once 'includes/templades/footer.php'?>