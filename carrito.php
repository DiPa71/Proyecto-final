<?php
session_start();
if(isset($_SESSION['usuario'])){
include_once 'includes/templades/headerloget.php';
include 'includes/fuctions/carritof.php';

?>
    <div class="contenedor">
            <section>
                    <div class="carritotienda">
                    <?php if(!empty($_SESSION['carrito'])){?>
                                <table class="table table-bordered">
                                    <tr>
                                        <th wigth="35%" class="fondogriss">ID Producto</th>    
                                        <th wigth="10%" class="fondogriss text-center">Producto</th>
                                        <th wigth="35%" class="fondogriss text-center">Descripcion</th>
                                        <th wigth="3%" class="fondogriss text-center">Cantidad</th>
                                        <th wigth="7%" class="fondogriss text-center">Precio</th>
                                        <th wigth="5%" class="fondogriss text-center">Total</th>
                                        <th wigth="5%" class="fondogriss text-center">--</th>
                                    </tr>
                                    <?php 
                                    $total = 0;
                                    foreach($_SESSION['carrito'] as $producto){?>
                                    <tr>

                                        <td><?php echo $producto['Id']?></td>
                                        <td><?php echo $producto['Producto']?></td>
                                        <td><?php echo $producto['Descripcion']?></td>
                                        <td><?php echo $producto['Cantidad']?></td>
                                        <td><?php echo '$ ' . $producto['Precio']?></td>
                                        <td><?php echo number_format($producto['Precio'] * $producto['Cantidad'],2);?></td>
                                        <td>
                                        <form action="" method="post">
                                        <input type="hidden" name="id" value="<?php echo $producto['Id']; ?>">
                                        <button type="submit" name="añadir_carro" value="eliminar" class="remover-carrito"><i class="crossn fa fa-times-circle"></i></button>
                                        </form>
                                        </td>
                                    </tr>

                                <?php }?>
                                <?php $total = $total + ($producto['Precio'] * $producto['Cantidad']); ?>
                                </table>

                                <?php }else{ ?>
                                    <div class="alert alert-success">
                                        No hay productos en el Carrito...
                                    </div>
                                <?php $total = 0;   } ?>
                        <div class="carrito-orden anuncio1">
                            <h3 class="fw-300">Precio Final</h3>
                            <div class="lista-productos">

                                    </div>
                                        <div class="compycal">
                                            <hr>   
                                            <div class="listapro">
                                            <p class="precio">Calculos:</p>
                                            <?php foreach($_SESSION['carrito'] as $indice => $producto){?>

                                                <?php echo $producto['Producto'] . ' $ ' . $producto['Precio'] . ' x' .$producto['Cantidad']?><br>

                                            <?php }?>
                                            </div>
                                            <hr>
                                            <form action="pagar.php" method="POST">
                                            <input type="hidden" value='<?php $_SESSION['correo'];?>'>
                                            <input type="hidden" value='<?php $total?>'>
                                            <p>Total a Pagar:<div id="precio"><?php echo number_format($total,2);?></div></p>
                                            <button type="sumbit" name="pago">Realizar Compra</button>
                                            <?php $_SESSION['carrito'][] = $total; ?>
                                        </form>
                                        </div>
                                    
                        </div>
                    </div>  
            </section>
    </div>
    <div class="rango-foot">
    <?php include_once 'includes/templades/footer.php'?>
    </div>
<?php
}else{
include_once 'includes/templades/header.php';
}?>