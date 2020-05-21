<?php
session_start();
if(isset($_SESSION['usuario'])){
include_once 'includes/templades/headerloget.php';
}else{
include_once 'includes/templades/header.php';
}?>
<pre>
    <?php var_dump($_GET)?> 
    <?php var_dump($_POST)?> 
    <?php var_dump($_SESSION)?> 
    <?php var_dump($row)?> 
    </pre>

    <main class="seccion contenedor">
        <h2 class="fw-300 centrar-texto">Tamales Disponibles</h2>
        <hr>
        <div class="contenedor barrabusc">
            <input type="text" id="inputbuscar" placeholder="¿Que estas buscando?" class=""><button><i class="nhov fa fa-search"></i></button>
        </div>
<div class="contenedor-anuncios">
        <?php
        try{
            require_once('includes/fuctions/db.php');
            $sql = " SELECT id_producto, img_producto, producto, descripcion, precio FROM productos";
            $resultado = $conn->query($sql);
        }catch(\Exception $e){
            echo $e->getMessage();
        }
        ?>
<?php 
    $sql= "SELECT id_producto FROM productos WHERE $_GET = id_producto";
    $resultado = mysqli_query($conn, $sql);
    if(mysqli_num_rows($resultado) > 0){
        while($row = mysqli_fetch_assoc($resultado)){ ?>
            <div class="anuncio">
                <div class="contenido-anuncio">
                        <?php echo '<img src=data:image;base64,'.base64_encode($row['img_producto']).' alt="Imagen producto">';?>
                        <hr>
                        <h3><?php echo $row['producto']?></h3>
                        <p><?php echo $row['descripcion']?></p>
                        <p class="precio"><?php echo  '$ ' . $row['precio'] . ' MXN'?></p>
                        <form action='includes/fuctions/carritoc.php?action=añadircarrito=<?php echo $row['id_producto'];?>' method="POST">
                        <div class="botonamarillo">
                            <button type="sumbit" name="añadir_carro" class="colorbtna">Añadir a Carrito</button>
                        </div>
                        <input type="numeber" name="cantidad" value="1">
                        <input type="hidden" name="namep" value="<?php echo $row['producto']; ?>">
                        </form>
                        <form action="includes/fuctions/favoritos.php">
                        <div class="corazonmegusta">
                            <button type="sumbit" name="añadir_favoritos" class="megusta" value="add to fav"><i class="fa fa-heart"></i></button>
                        </div>
                        </form>
                    </form>
                </div>    
            </div>
       <?php } ?>
    <?php } ?>
            <?php $conn->close()?>
</div> 
    </main>
    <?php include_once 'includes/templades/footer.php'?>