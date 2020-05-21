<?php
session_start();
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
//var_dump($_SESSION);
//echo '<script arc="js/main.js"></script>';
if(isset($_SESSION['usuario'])){
include_once 'includes/templades/headerloget.php';
switch($estado){

    case 1: ?>
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
                    <div class="contenidop anuncio3 txtprof contenedor">
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
						<th width="10%" class="fondogriss">Nombre Usuario</th>
						<th width="30%" class="fondogriss">ID</th>
						<th width="10%" class="fondogriss">Nombre y Apellido</th>
						<th width="20%" class="fondogriss">Correo</th>
                        <th width="10%" class="fondogriss">Telefono</th>
                        <th width="10%" class="fondogriss">Pais</th>
                        <th width="20%" class="fondogriss">admins</th>
                    </tr> 
                    <tr>
                        <?php foreach($fusuarios as $usuario) {?>
						<td><?php echo $usuario["Usuario"]; ?></td>
						<td><?php echo $usuario["Idunico"]; ?></td>
						<td><?php echo $usuario["Nombre"] . ' ' . $usuario["Apellido"]; ?></td>
                        <td><?php echo $usuario["Correo"]; ?></td>
                        <td><?php echo $usuario["Telefono"]; ?></td>
                        <td><?php echo $usuario["Pais"]; ?></td>
                        <td> <?php if($usuario["Usuario"] != 'ADMIN'){switch($usuario["Estado"]){
                            case 0:
                                $valora = 'No';
                            break;
                            case 1:
                                $valora = 'Si';
                            break;
                            default:
                            echo 'error basede datos';
                            break;
                        }?>
                        <select name="edit" id="estado"> 
                                        <option value='<?php $usuario["Estado"] ?>'>predefinodo: <?php echo $valora ?></option>
                                        <option value="0">No</option>
                                        <option value="1">Si</option>
                                        </select></td>
                                        <?php }else{switch($usuario["Estado"]){
                            case 0:
                                $valora = 'No';
                            break;
                            case 1:
                                $valora = 'Si';
                            break;
                            default:
                            echo 'error basede datos';
                            break;
                        }?>
                         <?php echo $valora;?></td>
                    <?php }?>
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
    <?php break;
    
    case 0:?>
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
            <form action="includes/fuctions/logout.php" method="POST">
            <button type="sumbit">Cerrar sesion</button>
            </form>

    <?php break;
    default: 
    var_dump($_SESSION);?>
<h2>Ocurrio un error</h2>
<form action="includes/fuctions/logout.php" method="POST">
            <button type="sumbit">Cerrar sesion</button>
            </form>
    <?php break;

}?>

<?php }else{ ?>
<?php include_once 'includes/templades/header.php';?>
<h2>Error 404! Page not Found...</h2>
<?php }?>

<script>	$('ul.tabs li a:first').addClass('active');
	$('.secciones article').hide();
	$('.secciones article:first').show();

	$('ul.tabs li a').click(function(){
		$('ul.tabs li a').removeClass('active');
		$(this).addClass('active');
		$('.secciones article').hide();

		var activeTab = $(this).attr('href');
		$(activeTab).show();
		return false;
	});</script>
<?php include_once 'includes/templades/footer.php'?>