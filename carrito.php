<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tamales tolito</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
    <body>
    <script src="js/Carrito.js"></script>
    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.html">
                    <img src="img/tolito2.png" height="70px" alt="Tamales tolito">
                </a>
                <div class="mobile-menu">
                    <a href="#navegacion">
                        <img src="img/barras.svg" alt="Icono Menu">
                    </a>
                </div>

                <nav id="navegacion" class="navegacion">
                    <a href="index.html">Inicio</a>
                    <a href="anuncios.html">Tienda</a>
                    <a href="blog.html">Blog</a>
                    <a href="contacto.html">Contacto</a>
                    <a href="carrito.html"><i class="fa fa-shopping-cart"></i>  Carrito</a>
                    <a href="favoritos.html"><i class="fa fa-heart"></i>  Favoritos / Deseados</a>
                    <a href="perfill.html"> <i class="fa fa-user"></i>  Login</a> <a href="perfils.html"> <i class="fa fa-user"></i>  Signin </a>
                </nav>
            </div>
        </div>

    </header>
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
                <!--Agregar los productos-->      
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
    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2020 &copy; </p>
        </div>
    </footer>
    <script src="js/jquery.js"></script>
        </body>
    </html>
