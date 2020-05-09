<?php
session_start();
if(isset($_SESSION['usuario'])){
include_once 'includes/templades/headerloget.php';
}else{
include_once 'includes/templades/header.php';
}?>

    <section>
        <div id="" class="main-div ">
            <div class="carritotienda">
            <div id="carrito" class="contenedor-carrito">
                    <div class="anuncio">
                        <img src="img/anuncio1.jpg">
                        <div class="contenido-anuncio">
                                <h3>Piña Exótica</h3>
                                <p>Exquisito tamal con base de piña de las islas Kawaii</p>
                                <p class="precio">$4 USD</p>
                                <div class="Cantidad">
                                    <p>Cantidad:</p>
                                    <input type="number" min="1" max="10" step="1" value="1" required>
                                </div>
                                
                                <div class="colubnasbotones-carrito">
                                    <div class="corazonmegusta">
                                        <button onclick="" class="megusta"><i class="fa fa-heart"></i></button>
                                    </div>
                                    <div class="corazonmegusta">
                                        <button onclick="" class="remover-carrito"><i class="crossn fa fa-times-circle"></i></button>
                                    </div>
                            
                                </div>
                        </div>
                    </div>
                
                    <div class="anuncio">
                        <img src="img/anuncio2.jpg" alt="Tamal de habanero">
                    <div class="contenido-anuncio">
                            <h3>Habanero spicy</h3>
                            <p>Delicia culinaria, elaborada a base de chile habanero con toques de olivo</p>
                            <p class="precio" id="Precio">$5.50 USD</p>
        
                            <div class="Cantidad">
                                <p>Cantidad:</p>
                                <input type="number" min="1" max="10" step="1" value="1" required>
                            </div>
                            <div class="colubnasbotones-carrito">
                                <div class="corazonmegusta">
                                    <button onclick="" class="megusta"><i class="fa fa-heart"></i></button>
                                </div>
                                <div class="corazonmegusta">
                                    <button onclick="" class="remover-carrito"><i class="crossn fa fa-times-circle"></i></button>
                                </div>
                        
                            </div>
                    </div>
                </div>  
            </div>
            <div class="carrito-orden anuncio1">
                <h3 class="fw-300">Precio a pagar</h3>
                <div class="lista-productos">

                </div>

                    <div class="compycal">
                        <p>Total:</p>
                        <div id="suma-total">
        
                        </div>
                        <div class="botoncmp d-block">
                            <a href="#" class="boton button">Calcular</a>
                        </div>
                        <div class="botoncmp d-block">
                            <a href="#" class="boton button">Realizar Compra</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </section>
    <?php include_once 'includes/templades/footer.php'?>
