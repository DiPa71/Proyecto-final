<?php
session_start();
if(isset($_SESSION['usuario'])){
include_once 'includes/templades/headerloget.php';
?>

    <main class="seccion contenedor">
        <h2 class="fw-300 centrar-texto">Tamales Disponibles</h2>
        <hr>
        <div class="contenedor barrabusc">
            <input type="text" id="inputbuscar" placeholder="¿Que estas buscando?" class=""><button><i class="nhov fa fa-search"></i></button>
        </div>
        <?php
        try{
            require_once('includes/fuctions/db.php');
            $sql = " SELECT id_producto, img_producto, producto, descripcion, precio FROM productos";
            $resultado = $conn->query($sql);
        }catch(\Exception $e){
            echo $e->getMessage();
        }
        ?>


        <div class="contenedor-anuncios">
        <?php //ordenando Los valores de la tabla
            $fproductos= array();
            while($productos = $resultado->fetch_assoc()){
                $producto = array(
                    'imagen' => $productos['img_producto'],
                    'Producto' => $productos['producto'],
                    'Descripcion' => $productos['descripcion'],
                    'Precio' => $productos['precio'],
                    'Id' => $productos['id_producto']
                    );
                $fproductos[] = $producto;?>
                        <?php }//fin while?>

        
            <?php //imprimir productos
                foreach($fproductos as $producto) {?>
                <div class="anuncio">
                <div class="contenido-anuncio">
                <?php echo '<img src=data:image;base64,'.base64_encode($producto['imagen']).' alt="Imagen producto">';?>
                <hr>
                    <h3><?php echo $producto['Producto']?></h3>
                    <p><?php echo $producto['Descripcion']?></p>
                    <p class="precio"><?php echo  '$ ' . $producto['Precio'] . ' MXN'?></p>
                    <form action='carrito.php?pid=<?php echo $producto['Id'];?>' method="POST">
                    <input type="hidden" name="pid" id="" value="<?php echo $producto['Id']; ?>">
                    <input type="hidden" name="producto" id="" value="<?php echo $producto['Producto']; ?>">
                    <input type="hidden" name="precio" id="" value="<?php  echo $producto['Precio']; ?>">
                    <input type="hidden" name="descripcion" id="" value="<?php  echo $producto['Descripcion']; ?>">
                    <label>Cantidad:
                    <input type="text" name="cantidad" value="<?php echo 1; ?>" min="0" max="10" step="2">
                    </label>
                    <div class="botonamarillo">
                    <button type="sumbit" name="añadir_carro"class="colorbtna" value="agregar">Añadir a Carrito</button>
                    </div>
                    </form>
                    <form action="includes/fuctions/favoritos.php">
                    <div class="corazonmegusta">
                        <button type="sumbit" name="añadir_favoritos" class="megusta" value="add to fav"><i class="fa fa-heart"></i></button>
                    </div>
                    </form>
                </div>
                </div>
                <?php } //fin foreach ?>
                </div>
                <hr>
                <?php $conn->close()?>
    </main>
    <div class="rango-foot">
    <?php include_once 'includes/templades/footer.php'?>
<?php }else{ 
include_once 'includes/templades/header.php';?>



<?php }?>