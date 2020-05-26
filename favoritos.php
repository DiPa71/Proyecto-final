<?php
session_start();
if(isset($_SESSION['usuario'])){
include_once 'includes/templades/headerloget.php';
include 'includes/fuctions/favf.php';

?>
    <div class="contenedor">
            <section>
            <h2 class="fw-300 centrar-texto">Tus Favoritos:</h2>
        <hr>
                    
                    <?php if(!empty($_SESSION['fav'])){?>
                                <table class="table table-bordered">
                                    <tr>
                                        <th wigth="25%" class="fondogriss">ID Producto</th>    
                                        <th wigth="25%" class="fondogriss text-center">Producto</th>
                                        <th wigth="25%" class="fondogriss text-center">Descripcion</th>
                                        <th wigth="25%" class="fondogriss text-center">--</th>
                                    </tr>
                                    <?php
                                    foreach($_SESSION['fav'] as $producto){?>
                                    <tr>
                                        <td><?php echo $producto['Id']?></td>
                                        <td><?php echo $producto['Producto']?></td>
                                        <td><?php echo $producto['Descripcion']?></td>
                                        <td>
                                        <form action="" method="post">
                                        <input type="hidden" name="id" value="<?php echo $producto['Id']; ?>">
                                        <button type="submit" name="añadir_fav" value="eliminar" class="remover-carrito"><i class="crossn fa fa-times-circle"></i></button>
                                        </form>>
                                        </form>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </table>
                    <?php } ?>
                  
            </section>
    </div>
    <div class="rango-foot">
    <?php include_once 'includes/templades/footer.php'?>
    </div>
<?php
}else{
include_once 'includes/templades/header.php';
}?>